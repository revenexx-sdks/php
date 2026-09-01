<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AttributeRelationshipStatus implements JsonSerializable
{
    private static AttributeRelationshipStatus $AVAILABLE;
    private static AttributeRelationshipStatus $PROCESSING;
    private static AttributeRelationshipStatus $DELETING;
    private static AttributeRelationshipStatus $STUCK;
    private static AttributeRelationshipStatus $FAILED;

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

    public static function AVAILABLE(): AttributeRelationshipStatus
    {
        if (!isset(self::$AVAILABLE)) {
            self::$AVAILABLE = new AttributeRelationshipStatus('available');
        }
        return self::$AVAILABLE;
    }
    public static function PROCESSING(): AttributeRelationshipStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new AttributeRelationshipStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function DELETING(): AttributeRelationshipStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new AttributeRelationshipStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function STUCK(): AttributeRelationshipStatus
    {
        if (!isset(self::$STUCK)) {
            self::$STUCK = new AttributeRelationshipStatus('stuck');
        }
        return self::$STUCK;
    }
    public static function FAILED(): AttributeRelationshipStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AttributeRelationshipStatus('failed');
        }
        return self::$FAILED;
    }
}