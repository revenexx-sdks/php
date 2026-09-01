<?php

namespace Revenexx\Enums;

use JsonSerializable;

class EntityType implements JsonSerializable
{
    private static EntityType $PRODUCT;
    private static EntityType $REFERENCEENTITY;
    private static EntityType $ASSET;
    private static EntityType $CATEGORY;

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

    public static function PRODUCT(): EntityType
    {
        if (!isset(self::$PRODUCT)) {
            self::$PRODUCT = new EntityType('product');
        }
        return self::$PRODUCT;
    }
    public static function REFERENCEENTITY(): EntityType
    {
        if (!isset(self::$REFERENCEENTITY)) {
            self::$REFERENCEENTITY = new EntityType('reference_entity');
        }
        return self::$REFERENCEENTITY;
    }
    public static function ASSET(): EntityType
    {
        if (!isset(self::$ASSET)) {
            self::$ASSET = new EntityType('asset');
        }
        return self::$ASSET;
    }
    public static function CATEGORY(): EntityType
    {
        if (!isset(self::$CATEGORY)) {
            self::$CATEGORY = new EntityType('category');
        }
        return self::$CATEGORY;
    }
}