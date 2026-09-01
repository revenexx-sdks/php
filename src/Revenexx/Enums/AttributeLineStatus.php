<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AttributeLineStatus implements JsonSerializable
{
    private static AttributeLineStatus $AVAILABLE;
    private static AttributeLineStatus $PROCESSING;
    private static AttributeLineStatus $DELETING;
    private static AttributeLineStatus $STUCK;
    private static AttributeLineStatus $FAILED;

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

    public static function AVAILABLE(): AttributeLineStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new AttributeLineStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): AttributeLineStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new AttributeLineStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): AttributeLineStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new AttributeLineStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): AttributeLineStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new AttributeLineStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): AttributeLineStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AttributeLineStatus('failed');
        }
        return self::$FAILED;
    }
}