<?php

namespace Revenexx\Enums;

use JsonSerializable;

class DeliveryPointType implements JsonSerializable
{
    private static DeliveryPointType $STREET;
    private static DeliveryPointType $PACKSTATION;
    private static DeliveryPointType $POSTOFFICE;
    private static DeliveryPointType $POBOX;
    private static DeliveryPointType $MILITARY;

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

    public static function STREET(): DeliveryPointType
    {
        if (!isset(self::$STREET)) {
            self::$STREET = new DeliveryPointType('street');
        }
        return self::$STREET;
    }
    public static function PACKSTATION(): DeliveryPointType
    {
        if (!isset(self::$PACKSTATION)) {
            self::$PACKSTATION = new DeliveryPointType('packstation');
        }
        return self::$PACKSTATION;
    }
    public static function POSTOFFICE(): DeliveryPointType
    {
        if (!isset(self::$POSTOFFICE)) {
            self::$POSTOFFICE = new DeliveryPointType('post_office');
        }
        return self::$POSTOFFICE;
    }
    public static function POBOX(): DeliveryPointType
    {
        if (!isset(self::$POBOX)) {
            self::$POBOX = new DeliveryPointType('po_box');
        }
        return self::$POBOX;
    }
    public static function MILITARY(): DeliveryPointType
    {
        if (!isset(self::$MILITARY)) {
            self::$MILITARY = new DeliveryPointType('military');
        }
        return self::$MILITARY;
    }
}