<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AttributeIpStatus implements JsonSerializable
{
    private static AttributeIpStatus $AVAILABLE;
    private static AttributeIpStatus $PROCESSING;
    private static AttributeIpStatus $DELETING;
    private static AttributeIpStatus $STUCK;
    private static AttributeIpStatus $FAILED;

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

    public static function AVAILABLE(): AttributeIpStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new AttributeIpStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): AttributeIpStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new AttributeIpStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): AttributeIpStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new AttributeIpStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): AttributeIpStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new AttributeIpStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): AttributeIpStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AttributeIpStatus('failed');
        }
        return self::$FAILED;
    }
}