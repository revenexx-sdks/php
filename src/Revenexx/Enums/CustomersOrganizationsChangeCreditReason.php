<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CustomersOrganizationsChangeCreditReason implements JsonSerializable
{
    private static CustomersOrganizationsChangeCreditReason $RATINGCHANGED;
    private static CustomersOrganizationsChangeCreditReason $VOLUMECHANGED;
    private static CustomersOrganizationsChangeCreditReason $PAYMENTBEHAVIOUR;
    private static CustomersOrganizationsChangeCreditReason $CUSTOMERREQUEST;
    private static CustomersOrganizationsChangeCreditReason $OTHER;

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

    public static function RATINGCHANGED(): CustomersOrganizationsChangeCreditReason
    {
        if (!isset(self::$RATINGCHANGED)) {
            self::$RATINGCHANGED = new CustomersOrganizationsChangeCreditReason('rating_changed');
        }
        return self::$RATINGCHANGED;
    }
    public static function VOLUMECHANGED(): CustomersOrganizationsChangeCreditReason
    {
        if (!isset(self::$VOLUMECHANGED)) {
            self::$VOLUMECHANGED = new CustomersOrganizationsChangeCreditReason('volume_changed');
        }
        return self::$VOLUMECHANGED;
    }
    public static function PAYMENTBEHAVIOUR(): CustomersOrganizationsChangeCreditReason
    {
        if (!isset(self::$PAYMENTBEHAVIOUR)) {
            self::$PAYMENTBEHAVIOUR = new CustomersOrganizationsChangeCreditReason('payment_behaviour');
        }
        return self::$PAYMENTBEHAVIOUR;
    }
    public static function CUSTOMERREQUEST(): CustomersOrganizationsChangeCreditReason
    {
        if (!isset(self::$CUSTOMERREQUEST)) {
            self::$CUSTOMERREQUEST = new CustomersOrganizationsChangeCreditReason('customer_request');
        }
        return self::$CUSTOMERREQUEST;
    }
    public static function OTHER(): CustomersOrganizationsChangeCreditReason
    {
        if (!isset(self::$OTHER)) {
            self::$OTHER = new CustomersOrganizationsChangeCreditReason('other');
        }
        return self::$OTHER;
    }
}