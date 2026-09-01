<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AttributeLongtextStatus implements JsonSerializable
{
    private static AttributeLongtextStatus $AVAILABLE;
    private static AttributeLongtextStatus $PROCESSING;
    private static AttributeLongtextStatus $DELETING;
    private static AttributeLongtextStatus $STUCK;
    private static AttributeLongtextStatus $FAILED;

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

    public static function AVAILABLE(): AttributeLongtextStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new AttributeLongtextStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): AttributeLongtextStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new AttributeLongtextStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): AttributeLongtextStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new AttributeLongtextStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): AttributeLongtextStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new AttributeLongtextStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): AttributeLongtextStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AttributeLongtextStatus('failed');
        }
        return self::$FAILED;
    }
}