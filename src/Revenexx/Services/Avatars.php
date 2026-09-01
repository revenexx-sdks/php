<?php

namespace Revenexx\Services;

use Revenexx\RevenexxException;
use Revenexx\Client;
use Revenexx\Service;
use Revenexx\InputFile;
use Revenexx\Enums\Code;
use Revenexx\Enums\AvatarsGetCreditCardCode;
use Revenexx\Enums\AvatarsGetFlagCode;
use Revenexx\Enums\Theme;
use Revenexx\Enums\Timezone;
use Revenexx\Enums\Permissions;
use Revenexx\Enums\Output;

class Avatars extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * You can use this endpoint to show different browser icons to your users.
     * The code argument receives the browser code as it appears in your user [GET
     * /account/sessions](https://app.revenexx.com/docs/references/cloud/client-web/account#getSessions)
     * endpoint. Use width, height and quality arguments to change the output
     * settings.
     * 
     * When one dimension is specified and the other is 0, the image is scaled
     * with preserved aspect ratio. If both dimensions are 0, the API provides an
     * image at source quality. If dimensions are not specified, the default size
     * of image returned is 100x100px.
     *
     * @param Code $code
     * @param ?int $width
     * @param ?int $height
     * @param ?int $quality
     * @throws RevenexxException
     * @return array
     */
    public function avatarsGetBrowser(Code $code, ?int $width = null, ?int $height = null, ?int $quality = null): array
    {
        $apiPath = str_replace(
            ['{code}'],
            [$code],
            '/v1/avatars/browsers/{code}'
        );

        $apiParams = [];
        $apiParams['code'] = $code;

        if (!is_null($width)) {
            $apiParams['width'] = $width;
        }

        if (!is_null($height)) {
            $apiParams['height'] = $height;
        }

        if (!is_null($quality)) {
            $apiParams['quality'] = $quality;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * The credit card endpoint will return you the icon of the credit card
     * provider you need. Use width, height and quality arguments to change the
     * output settings.
     * 
     * When one dimension is specified and the other is 0, the image is scaled
     * with preserved aspect ratio. If both dimensions are 0, the API provides an
     * image at source quality. If dimensions are not specified, the default size
     * of image returned is 100x100px.
     * 
     *
     * @param AvatarsGetCreditCardCode $code
     * @param ?int $width
     * @param ?int $height
     * @param ?int $quality
     * @throws RevenexxException
     * @return array
     */
    public function avatarsGetCreditCard(AvatarsGetCreditCardCode $code, ?int $width = null, ?int $height = null, ?int $quality = null): array
    {
        $apiPath = str_replace(
            ['{code}'],
            [$code],
            '/v1/avatars/credit-cards/{code}'
        );

        $apiParams = [];
        $apiParams['code'] = $code;

        if (!is_null($width)) {
            $apiParams['width'] = $width;
        }

        if (!is_null($height)) {
            $apiParams['height'] = $height;
        }

        if (!is_null($quality)) {
            $apiParams['quality'] = $quality;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * You can use this endpoint to show different country flags icons to your
     * users. The code argument receives the 2 letter country code. Use width,
     * height and quality arguments to change the output settings. Country codes
     * follow the [ISO 3166-1](https://en.wikipedia.org/wiki/ISO_3166-1) standard.
     * 
     * When one dimension is specified and the other is 0, the image is scaled
     * with preserved aspect ratio. If both dimensions are 0, the API provides an
     * image at source quality. If dimensions are not specified, the default size
     * of image returned is 100x100px.
     * 
     *
     * @param AvatarsGetFlagCode $code
     * @param ?int $width
     * @param ?int $height
     * @param ?int $quality
     * @throws RevenexxException
     * @return array
     */
    public function avatarsGetFlag(AvatarsGetFlagCode $code, ?int $width = null, ?int $height = null, ?int $quality = null): array
    {
        $apiPath = str_replace(
            ['{code}'],
            [$code],
            '/v1/avatars/flags/{code}'
        );

        $apiParams = [];
        $apiParams['code'] = $code;

        if (!is_null($width)) {
            $apiParams['width'] = $width;
        }

        if (!is_null($height)) {
            $apiParams['height'] = $height;
        }

        if (!is_null($quality)) {
            $apiParams['quality'] = $quality;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Use this endpoint to fetch a remote image URL and crop it to any image size
     * you want. This endpoint is very useful if you need to crop and display
     * remote images in your app or in case you want to make sure a 3rd party
     * image is properly served using a TLS protocol.
     * 
     * When one dimension is specified and the other is 0, the image is scaled
     * with preserved aspect ratio. If both dimensions are 0, the API provides an
     * image at source quality. If dimensions are not specified, the default size
     * of image returned is 400x400px.
     * 
     * This endpoint does not follow HTTP redirects.
     *
     * @param string $url
     * @param ?int $width
     * @param ?int $height
     * @throws RevenexxException
     * @return array
     */
    public function avatarsGetImage(string $url, ?int $width = null, ?int $height = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/avatars/image'
        );

        $apiParams = [];
        $apiParams['url'] = $url;

        if (!is_null($width)) {
            $apiParams['width'] = $width;
        }

        if (!is_null($height)) {
            $apiParams['height'] = $height;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Use this endpoint to show your user initials avatar icon on your website or
     * app. By default, this route will try to print your logged-in user name or
     * email initials. You can also overwrite the user name if you pass the 'name'
     * parameter. If no name is given and no user is logged, an empty avatar will
     * be returned.
     * 
     * You can use the color and background params to change the avatar colors. By
     * default, a random theme will be selected. The random theme will persist for
     * the user's initials when reloading the same theme will always return for
     * the same initials.
     * 
     * When one dimension is specified and the other is 0, the image is scaled
     * with preserved aspect ratio. If both dimensions are 0, the API provides an
     * image at source quality. If dimensions are not specified, the default size
     * of image returned is 100x100px.
     * 
     *
     * @param ?string $name
     * @param ?int $width
     * @param ?int $height
     * @param ?string $background
     * @throws RevenexxException
     * @return array
     */
    public function avatarsGetInitials(?string $name = null, ?int $width = null, ?int $height = null, ?string $background = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/avatars/initials'
        );

        $apiParams = [];

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($width)) {
            $apiParams['width'] = $width;
        }

        if (!is_null($height)) {
            $apiParams['height'] = $height;
        }

        if (!is_null($background)) {
            $apiParams['background'] = $background;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Converts a given plain text to a QR code image. You can use the query
     * parameters to change the size and style of the resulting image.
     * 
     *
     * @param string $text
     * @param ?int $size
     * @param ?int $margin
     * @param ?bool $download
     * @throws RevenexxException
     * @return array
     */
    public function avatarsGetQR(string $text, ?int $size = null, ?int $margin = null, ?bool $download = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/avatars/qr'
        );

        $apiParams = [];
        $apiParams['text'] = $text;

        if (!is_null($size)) {
            $apiParams['size'] = $size;
        }

        if (!is_null($margin)) {
            $apiParams['margin'] = $margin;
        }

        if (!is_null($download)) {
            $apiParams['download'] = $download;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Use this endpoint to capture a screenshot of any website URL. This endpoint
     * uses a headless browser to render the webpage and capture it as an image.
     * 
     * You can configure the browser viewport size, theme, user agent,
     * geolocation, permissions, and more. Capture either just the viewport or the
     * full page scroll.
     * 
     * When width and height are specified, the image is resized accordingly. If
     * both dimensions are 0, the API provides an image at original size. If
     * dimensions are not specified, the default viewport size is 1280x720px.
     *
     * @param string $url
     * @param ?array $headers
     * @param ?int $viewportWidth
     * @param ?int $viewportHeight
     * @param ?float $scale
     * @param ?Theme $theme
     * @param ?string $userAgent
     * @param ?bool $fullpage
     * @param ?string $locale
     * @param ?Timezone $timezone
     * @param ?float $latitude
     * @param ?float $longitude
     * @param ?float $accuracy
     * @param ?bool $touch
     * @param ?array $permissions
     * @param ?int $sleep
     * @param ?int $width
     * @param ?int $height
     * @param ?int $quality
     * @param ?Output $output
     * @throws RevenexxException
     * @return array
     */
    public function avatarsGetScreenshot(string $url, ?array $headers = null, ?int $viewportWidth = null, ?int $viewportHeight = null, ?float $scale = null, ?Theme $theme = null, ?string $userAgent = null, ?bool $fullpage = null, ?string $locale = null, ?Timezone $timezone = null, ?float $latitude = null, ?float $longitude = null, ?float $accuracy = null, ?bool $touch = null, ?array $permissions = null, ?int $sleep = null, ?int $width = null, ?int $height = null, ?int $quality = null, ?Output $output = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/v1/avatars/screenshots'
        );

        $apiParams = [];
        $apiParams['url'] = $url;

        if (!is_null($headers)) {
            $apiParams['headers'] = $headers;
        }

        if (!is_null($viewportWidth)) {
            $apiParams['viewportWidth'] = $viewportWidth;
        }

        if (!is_null($viewportHeight)) {
            $apiParams['viewportHeight'] = $viewportHeight;
        }

        if (!is_null($scale)) {
            $apiParams['scale'] = $scale;
        }

        if (!is_null($theme)) {
            $apiParams['theme'] = $theme;
        }

        if (!is_null($userAgent)) {
            $apiParams['userAgent'] = $userAgent;
        }

        if (!is_null($fullpage)) {
            $apiParams['fullpage'] = $fullpage;
        }

        if (!is_null($locale)) {
            $apiParams['locale'] = $locale;
        }

        if (!is_null($timezone)) {
            $apiParams['timezone'] = $timezone;
        }

        if (!is_null($latitude)) {
            $apiParams['latitude'] = $latitude;
        }

        if (!is_null($longitude)) {
            $apiParams['longitude'] = $longitude;
        }

        if (!is_null($accuracy)) {
            $apiParams['accuracy'] = $accuracy;
        }

        if (!is_null($touch)) {
            $apiParams['touch'] = $touch;
        }

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

        if (!is_null($sleep)) {
            $apiParams['sleep'] = $sleep;
        }

        if (!is_null($width)) {
            $apiParams['width'] = $width;
        }

        if (!is_null($height)) {
            $apiParams['height'] = $height;
        }

        if (!is_null($quality)) {
            $apiParams['quality'] = $quality;
        }

        if (!is_null($output)) {
            $apiParams['output'] = $output;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}