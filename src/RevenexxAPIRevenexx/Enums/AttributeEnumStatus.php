<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class AttributeEnumStatus implements JsonSerializable
{
    private static AttributeEnumStatus $AVAILABLE;
    private static AttributeEnumStatus $PROCESSING;
    private static AttributeEnumStatus $DELETING;
    private static AttributeEnumStatus $STUCK;
    private static AttributeEnumStatus $FAILED;

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

    public static function AVAILABLE(): AttributeEnumStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new AttributeEnumStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): AttributeEnumStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new AttributeEnumStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): AttributeEnumStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new AttributeEnumStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): AttributeEnumStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new AttributeEnumStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): AttributeEnumStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AttributeEnumStatus('failed');
        }
        return self::$FAILED;
    }
}