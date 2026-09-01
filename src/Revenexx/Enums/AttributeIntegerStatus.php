<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AttributeIntegerStatus implements JsonSerializable
{
    private static AttributeIntegerStatus $AVAILABLE;
    private static AttributeIntegerStatus $PROCESSING;
    private static AttributeIntegerStatus $DELETING;
    private static AttributeIntegerStatus $STUCK;
    private static AttributeIntegerStatus $FAILED;

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

    public static function AVAILABLE(): AttributeIntegerStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new AttributeIntegerStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): AttributeIntegerStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new AttributeIntegerStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): AttributeIntegerStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new AttributeIntegerStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): AttributeIntegerStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new AttributeIntegerStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): AttributeIntegerStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AttributeIntegerStatus('failed');
        }
        return self::$FAILED;
    }
}