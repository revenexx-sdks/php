<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AddressUpdateRequestDeliveryPointType implements JsonSerializable
{
    private static AddressUpdateRequestDeliveryPointType $STREET;
    private static AddressUpdateRequestDeliveryPointType $PACKSTATION;
    private static AddressUpdateRequestDeliveryPointType $POSTOFFICE;
    private static AddressUpdateRequestDeliveryPointType $POBOX;
    private static AddressUpdateRequestDeliveryPointType $MILITARY;

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

    public static function STREET(): AddressUpdateRequestDeliveryPointType
    {
        if (!isset(self::$STREET)) {
            self::$STREET = new AddressUpdateRequestDeliveryPointType('street');
        }
        return self::$STREET;
    }
    public static function PACKSTATION(): AddressUpdateRequestDeliveryPointType
    {
        if (!isset(self::$PACKSTATION)) {
            self::$PACKSTATION = new AddressUpdateRequestDeliveryPointType('packstation');
        }
        return self::$PACKSTATION;
    }
    public static function POSTOFFICE(): AddressUpdateRequestDeliveryPointType
    {
        if (!isset(self::$POSTOFFICE)) {
            self::$POSTOFFICE = new AddressUpdateRequestDeliveryPointType('post_office');
        }
        return self::$POSTOFFICE;
    }
    public static function POBOX(): AddressUpdateRequestDeliveryPointType
    {
        if (!isset(self::$POBOX)) {
            self::$POBOX = new AddressUpdateRequestDeliveryPointType('po_box');
        }
        return self::$POBOX;
    }
    public static function MILITARY(): AddressUpdateRequestDeliveryPointType
    {
        if (!isset(self::$MILITARY)) {
            self::$MILITARY = new AddressUpdateRequestDeliveryPointType('military');
        }
        return self::$MILITARY;
    }
}