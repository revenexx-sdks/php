<?php

namespace RevenexxAPIRevenexx;

use Ahc\Jwt\JWT;

class Client
{
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_PATCH = 'PATCH';
    const METHOD_DELETE = 'DELETE';
    const METHOD_HEAD = 'HEAD';
    const METHOD_OPTIONS = 'OPTIONS';
    const METHOD_CONNECT = 'CONNECT';
    const METHOD_TRACE = 'TRACE';

    const CHUNK_SIZE = 5 * 1024 * 1024;
    const JWT_MAX_AGE_SECONDS = 3600;

    /**
     * Is Self Signed Certificates Allowed?
     *
     * @var bool
     */
    protected bool $selfSigned = false;

    /**
     * Service host name
     *
     * @var string
     */
    protected string $endpoint = 'https://api.revenexx.com';

    /**
     * Global Headers
     *
     * @var array
     */
    protected array $headers = [
        'content-type' => '',
        'user-agent' => 'RevenexxAPIRevenexxPHPSDK/0.0.4 ()',
        'x-sdk-name'=> 'Revenexx PHP',
        'x-sdk-platform'=> '',
        'x-sdk-language'=> 'php',
        'x-sdk-version'=> '0.0.4',
    ];

    /**
     * API key for JWT generation
     *
     * @var string|null
     */
    protected ?string $key = null;

    /**
     * Cached authorization header value
     *
     * @var string|null
     */
    protected ?string $authorization = null;

    /**
     * Authorization header expiry time
     *
     * @var \DateTime|null
     */
    protected ?\DateTime $authorizationExpiresAt = null;

    /**
     * Timeout in seconds
     *
     * @var int|null
     */
    protected ?int $timeout = null;

    /**
     * Connect timeout in seconds
     *
     * @var int|null
     */
    protected ?int $connectTimeout = null;

    /**
     * Client constructor.
     */
    public function __construct()
    {
 
    }

    /**
     * Set ApiKeyAuth
     *
     * A gateway-managed scoped API key (rvxk_…).
     *
     * @param string $value
     *
     * @return Client
     */
    public function setApiKeyAuth(string $value): Client
    {
        $this->addHeader('X-Revenexx-Api-Key', $value);

        return $this;
    }

    /**
     * Set BearerAuth
     *
     * A Zitadel-issued JWT (Cockpit / interactive callers).
     *
     * @param string $value
     *
     * @return Client
     */
    public function setBearerAuth(string $value): Client
    {
        $this->key = $value;
        $this->authorization = null;
        $this->authorizationExpiresAt = null;

        return $this;
    }

    /**
     * Set Tenant
     *
     * The tenant slug your requests are scoped to, sent as the
     * X-Revenexx-Tenant header on every request.
     *
     * @param string $value
     *
     * @return Client
     */
    public function setTenant(string $value): Client
    {
        $this->addHeader('X-Revenexx-Tenant', $value);

        return $this;
    }

    /***
     * @param bool $status
     * @return $this
     */
    public function setSelfSigned(bool $status = true): Client
    {
        $this->selfSigned = $status;

        return $this;
    }

    /***
     * @param $endpoint
     * @return $this
     */
    public function setEndpoint(string $endpoint): Client
    {
        if (!str_starts_with($endpoint, 'http://') && !str_starts_with($endpoint, 'https://')) {
            throw new RevenexxAPIRevenexxException("Invalid endpoint URL: $endpoint");
        }

        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * Set Timeout
     *
     * @param int $timeout Timeout in seconds
     * @return Client
     */
    public function setTimeout(int $timeout): Client
    {
        $this->timeout = $timeout;
        return $this;
    }

    /**
     * Set Connect Timeout
     *
     * @param int $connectTimeout Connect timeout in seconds
     * @return Client
     */
    public function setConnectTimeout(int $connectTimeout): Client
    {
        $this->connectTimeout = $connectTimeout;
        return $this;
    }

    /**
     * @param $key
     * @param $value
     */
    public function addHeader(string $key, string $value): Client
    {
        $this->headers[strtolower($key)] = $value;

        return $this;
    }

    /**
     * Get authorization header, generating a new JWT if needed
     *
     * @return string
     */
    private function getAuthorization(): string
    {
        if (\is_string($this->authorization) && $this->authorizationExpiresAt > new \DateTime()) {
            return $this->authorization;
        }

        $jwt = new JWT($this->key, maxAge: self::JWT_MAX_AGE_SECONDS);
        $this->authorization = "Bearer {$jwt->encode([])}";

        $this->authorizationExpiresAt = (new \DateTime())->modify('+' . (self::JWT_MAX_AGE_SECONDS - 5) . ' seconds');

        return $this->authorization;
    }

    /**
     * Call
     *
     * Make an API call
     *
     * @param string $method
     * @param string $path
     * @param array $params
     * @param array $headers
     * @return array|string
     * @throws RevenexxAPIRevenexxException
     */
    public function call(
        string $method,
        string $path = '',
        array $headers = [],
        array $params = [],
        ?string $responseType = null
    )
    {
        if ($this->key !== null) {
            $this->headers['authorization'] = $this->getAuthorization();
        }
        $headers = array_merge($this->headers, $headers);
        $ch = curl_init($this->endpoint . $path . (($method == self::METHOD_GET && !empty($params)) ? '?' . http_build_query($params) : ''));
        $responseHeaders = [];

        switch ($headers['content-type']) {
            case 'application/json':
                $query = json_encode($this->prepareParams($params));
                break;

            case 'multipart/form-data':
                $query = $this->flatten($params);
                break;

            default:
                $query = http_build_query($params);
                break;
        }

        foreach ($headers as $i => $header) {
            $headers[] = $i . ':' . $header;
            unset($headers[$i]);
        }

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, php_uname('s') . '-' . php_uname('r') . ':php-' . phpversion());
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, $responseType !== 'location');
        curl_setopt($ch, CURLOPT_HEADERFUNCTION, function($curl, $header) use (&$responseHeaders) {
            $len = strlen($header);
            $header = explode(':', strtolower($header), 2);

            if (count($header) < 2) { // ignore invalid headers
                return $len;
            }

            $responseHeaders[strtolower(trim($header[0]))] = trim($header[1]);

            return $len;
        });

        if($method != self::METHOD_GET) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        }

        // Allow self signed certificates
        if($this->selfSigned) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        }

        // Set timeout if configured
        if($this->timeout !== null) {
            curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);
        }

        // Set connect timeout if configured
        if($this->connectTimeout !== null) {
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->connectTimeout);
        }

        $responseBody   = curl_exec($ch);
        $contentType    = $responseHeaders['content-type'] ?? '';
        $responseStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        $warnings = $responseHeaders['x-revenexx api — revenexx-warning'] ?? '';
        if ($warnings) {
            foreach(explode(';', $warnings) as $warning) {
                \trigger_error($warning, E_USER_WARNING);
            }
        }
        
        if (\is_string($responseBody) && str_starts_with($contentType, 'application/json')) {
            $responseBody = json_decode($responseBody, true);
        }

        if (curl_errno($ch)) {
            throw new RevenexxAPIRevenexxException(curl_error($ch), $responseStatus, $responseBody['type'] ?? '', $responseBody);
        }
        
        curl_close($ch);

        if($responseStatus >= 400) {
            if(is_array($responseBody)) {
                throw new RevenexxAPIRevenexxException($responseBody['message'], $responseStatus, $responseBody['type'] ?? '', json_encode($responseBody));
            } else {
                throw new RevenexxAPIRevenexxException($responseBody, $responseStatus, '', $responseBody);
            }
        }

        if ($responseType === 'location') {
            return $responseHeaders['location'];
        }

        return $responseBody;
    }

    /**
     * Flatten params array to PHP multiple format
     *
     * @param array $data
     * @param string $prefix
     * @return array
     */
    protected function flatten(array $data, string $prefix = ''): array {
        $output = [];

        foreach($data as $key => $value) {
            $finalKey = $prefix ? "{$prefix}[{$key}]" : $key;

            if (is_array($value)) {
                $output += $this->flatten($value, $finalKey); // @todo: handle name collision here if needed
            }
            else {
                $output[$finalKey] = $value;
            }
        }

        return $output;
    }

    /**
     * Prepare params for JSON encoding by converting model objects to arrays
     *
     * @param mixed $data
     * @return mixed
     */
    protected function prepareParams($data)
    {
        if (is_array($data)) {
            return array_map([$this, 'prepareParams'], $data);
        }

        if (is_object($data) && method_exists($data, 'toArray')) {
            return $data->toArray();
        }

        return $data;
    }

    /**
     * Get information about this SDK and the generator that produced it.
     *
     * Contributed by the 'about' plugin.
     *
     * @return array<string, string>
     */
    public function getAbout(): array
    {
        return [
            'name' => 'Revenexx PHP',
            'version' => '0.0.4',
            'language' => 'php',
            'generator' => 'revenexx/sdk-generator',
            'generatorUrl' => 'https://github.com/revenexx/sdk-generator',
        ];
    }
}
