<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AddressDeliveryPointType implements JsonSerializable
{
    private static AddressDeliveryPointType $STREET;
    private static AddressDeliveryPointType $PACKSTATION;
    private static AddressDeliveryPointType $POSTOFFICE;
    private static AddressDeliveryPointType $POBOX;
    private static AddressDeliveryPointType $MILITARY;

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

    public static function STREET(): AddressDeliveryPointType
    {
        if (!isset(self::$STREET)) {
            self::$STREET = new AddressDeliveryPointType('street');
        }
        return self::$STREET;
    }
    public static function PACKSTATION(): AddressDeliveryPointType
    {
        if (!isset(self::$PACKSTATION)) {
            self::$PACKSTATION = new AddressDeliveryPointType('packstation');
        }
        return self::$PACKSTATION;
    }
    public static function POSTOFFICE(): AddressDeliveryPointType
    {
        if (!isset(self::$POSTOFFICE)) {
            self::$POSTOFFICE = new AddressDeliveryPointType('post_office');
        }
        return self::$POSTOFFICE;
    }
    public static function POBOX(): AddressDeliveryPointType
    {
        if (!isset(self::$POBOX)) {
            self::$POBOX = new AddressDeliveryPointType('po_box');
        }
        return self::$POBOX;
    }
    public static function MILITARY(): AddressDeliveryPointType
    {
        if (!isset(self::$MILITARY)) {
            self::$MILITARY = new AddressDeliveryPointType('military');
        }
        return self::$MILITARY;
    }
}