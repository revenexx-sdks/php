<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AttributeBooleanStatus implements JsonSerializable
{
    private static AttributeBooleanStatus $AVAILABLE;
    private static AttributeBooleanStatus $PROCESSING;
    private static AttributeBooleanStatus $DELETING;
    private static AttributeBooleanStatus $STUCK;
    private static AttributeBooleanStatus $FAILED;

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

    public static function AVAILABLE(): AttributeBooleanStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new AttributeBooleanStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): AttributeBooleanStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new AttributeBooleanStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): AttributeBooleanStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new AttributeBooleanStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): AttributeBooleanStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new AttributeBooleanStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): AttributeBooleanStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AttributeBooleanStatus('failed');
        }
        return self::$FAILED;
    }
}