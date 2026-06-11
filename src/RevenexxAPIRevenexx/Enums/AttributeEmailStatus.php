<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class AttributeEmailStatus implements JsonSerializable
{
    private static AttributeEmailStatus $AVAILABLE;
    private static AttributeEmailStatus $PROCESSING;
    private static AttributeEmailStatus $DELETING;
    private static AttributeEmailStatus $STUCK;
    private static AttributeEmailStatus $FAILED;

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

    public static function AVAILABLE(): AttributeEmailStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new AttributeEmailStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): AttributeEmailStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new AttributeEmailStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): AttributeEmailStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new AttributeEmailStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): AttributeEmailStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new AttributeEmailStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): AttributeEmailStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AttributeEmailStatus('failed');
        }
        return self::$FAILED;
    }
}