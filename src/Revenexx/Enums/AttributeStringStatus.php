<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AttributeStringStatus implements JsonSerializable
{
    private static AttributeStringStatus $AVAILABLE;
    private static AttributeStringStatus $PROCESSING;
    private static AttributeStringStatus $DELETING;
    private static AttributeStringStatus $STUCK;
    private static AttributeStringStatus $FAILED;

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

    public static function AVAILABLE(): AttributeStringStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new AttributeStringStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): AttributeStringStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new AttributeStringStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): AttributeStringStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new AttributeStringStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): AttributeStringStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new AttributeStringStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): AttributeStringStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AttributeStringStatus('failed');
        }
        return self::$FAILED;
    }
}