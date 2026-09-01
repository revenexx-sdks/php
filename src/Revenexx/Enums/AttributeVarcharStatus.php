<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AttributeVarcharStatus implements JsonSerializable
{
    private static AttributeVarcharStatus $AVAILABLE;
    private static AttributeVarcharStatus $PROCESSING;
    private static AttributeVarcharStatus $DELETING;
    private static AttributeVarcharStatus $STUCK;
    private static AttributeVarcharStatus $FAILED;

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

    public static function AVAILABLE(): AttributeVarcharStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new AttributeVarcharStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): AttributeVarcharStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new AttributeVarcharStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): AttributeVarcharStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new AttributeVarcharStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): AttributeVarcharStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new AttributeVarcharStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): AttributeVarcharStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AttributeVarcharStatus('failed');
        }
        return self::$FAILED;
    }
}