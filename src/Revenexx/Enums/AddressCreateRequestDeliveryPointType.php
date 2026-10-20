<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AddressCreateRequestDeliveryPointType implements JsonSerializable
{
    private static AddressCreateRequestDeliveryPointType $STREET;
    private static AddressCreateRequestDeliveryPointType $PACKSTATION;
    private static AddressCreateRequestDeliveryPointType $POSTOFFICE;
    private static AddressCreateRequestDeliveryPointType $POBOX;
    private static AddressCreateRequestDeliveryPointType $MILITARY;

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

    public static function STREET(): AddressCreateRequestDeliveryPointType
    {
        if (!isset(self::$STREET)) {
            self::$STREET = new AddressCreateRequestDeliveryPointType('street');
        }
        return self::$STREET;
    }
    public static function PACKSTATION(): AddressCreateRequestDeliveryPointType
    {
        if (!isset(self::$PACKSTATION)) {
            self::$PACKSTATION = new AddressCreateRequestDeliveryPointType('packstation');
        }
        return self::$PACKSTATION;
    }
    public static function POSTOFFICE(): AddressCreateRequestDeliveryPointType
    {
        if (!isset(self::$POSTOFFICE)) {
            self::$POSTOFFICE = new AddressCreateRequestDeliveryPointType('post_office');
        }
        return self::$POSTOFFICE;
    }
    public static function POBOX(): AddressCreateRequestDeliveryPointType
    {
        if (!isset(self::$POBOX)) {
            self::$POBOX = new AddressCreateRequestDeliveryPointType('po_box');
        }
        return self::$POBOX;
    }
    public static function MILITARY(): AddressCreateRequestDeliveryPointType
    {
        if (!isset(self::$MILITARY)) {
            self::$MILITARY = new AddressCreateRequestDeliveryPointType('military');
        }
        return self::$MILITARY;
    }
}