<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class AttributePolygonStatus implements JsonSerializable
{
    private static AttributePolygonStatus $AVAILABLE;
    private static AttributePolygonStatus $PROCESSING;
    private static AttributePolygonStatus $DELETING;
    private static AttributePolygonStatus $STUCK;
    private static AttributePolygonStatus $FAILED;

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

    public static function AVAILABLE(): AttributePolygonStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new AttributePolygonStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): AttributePolygonStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new AttributePolygonStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): AttributePolygonStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new AttributePolygonStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): AttributePolygonStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new AttributePolygonStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): AttributePolygonStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AttributePolygonStatus('failed');
        }
        return self::$FAILED;
    }
}