<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class AttributeMediumtextStatus implements JsonSerializable
{
    private static AttributeMediumtextStatus $AVAILABLE;
    private static AttributeMediumtextStatus $PROCESSING;
    private static AttributeMediumtextStatus $DELETING;
    private static AttributeMediumtextStatus $STUCK;
    private static AttributeMediumtextStatus $FAILED;

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

    public static function AVAILABLE(): AttributeMediumtextStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new AttributeMediumtextStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): AttributeMediumtextStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new AttributeMediumtextStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): AttributeMediumtextStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new AttributeMediumtextStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): AttributeMediumtextStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new AttributeMediumtextStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): AttributeMediumtextStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AttributeMediumtextStatus('failed');
        }
        return self::$FAILED;
    }
}