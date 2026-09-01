<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AttributeUrlStatus implements JsonSerializable
{
    private static AttributeUrlStatus $AVAILABLE;
    private static AttributeUrlStatus $PROCESSING;
    private static AttributeUrlStatus $DELETING;
    private static AttributeUrlStatus $STUCK;
    private static AttributeUrlStatus $FAILED;

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

    public static function AVAILABLE(): AttributeUrlStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new AttributeUrlStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): AttributeUrlStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new AttributeUrlStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): AttributeUrlStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new AttributeUrlStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): AttributeUrlStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new AttributeUrlStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): AttributeUrlStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AttributeUrlStatus('failed');
        }
        return self::$FAILED;
    }
}