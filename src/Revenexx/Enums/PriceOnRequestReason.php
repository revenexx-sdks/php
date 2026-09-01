<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceOnRequestReason implements JsonSerializable
{
    private static PriceOnRequestReason $NOTPRICED;
    private static PriceOnRequestReason $ONREQUESTENTRY;
    private static PriceOnRequestReason $ANONYMOUSDENIED;
    private static PriceOnRequestReason $NOIDENTITY;

    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function jsonSerialize(): string
    {
        return $this->value;
    }

    public static function NOTPRICED(): PriceOnRequestReason
    {
        if (!isset(self::$NOTPRICED)) {
            self::$NOTPRICED = new PriceOnRequestReason('not_priced');
        }
        return self::$NOTPRICED;
    }
    public static function ONREQUESTENTRY(): PriceOnRequestReason
    {
        if (!isset(self::$ONREQUESTENTRY)) {
            self::$ONREQUESTENTRY = new PriceOnRequestReason('on_request_entry');
        }
        return self::$ONREQUESTENTRY;
    }
    public static function ANONYMOUSDENIED(): PriceOnRequestReason
    {
        if (!isset(self::$ANONYMOUSDENIED)) {
            self::$ANONYMOUSDENIED = new PriceOnRequestReason('anonymous_denied');
        }
        return self::$ANONYMOUSDENIED;
    }
    public static function NOIDENTITY(): PriceOnRequestReason
    {
        if (!isset(self::$NOIDENTITY)) {
            self::$NOIDENTITY = new PriceOnRequestReason('no_identity');
        }
        return self::$NOIDENTITY;
    }
}