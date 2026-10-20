<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrganizationChangeCreditRequestReason implements JsonSerializable
{
    private static OrganizationChangeCreditRequestReason $RATINGCHANGED;
    private static OrganizationChangeCreditRequestReason $VOLUMECHANGED;
    private static OrganizationChangeCreditRequestReason $PAYMENTBEHAVIOUR;
    private static OrganizationChangeCreditRequestReason $CUSTOMERREQUEST;
    private static OrganizationChangeCreditRequestReason $OTHER;

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

    public static function RATINGCHANGED(): OrganizationChangeCreditRequestReason
    {
        if (!isset(self::$RATINGCHANGED)) {
            self::$RATINGCHANGED = new OrganizationChangeCreditRequestReason('rating_changed');
        }
        return self::$RATINGCHANGED;
    }
    public static function VOLUMECHANGED(): OrganizationChangeCreditRequestReason
    {
        if (!isset(self::$VOLUMECHANGED)) {
            self::$VOLUMECHANGED = new OrganizationChangeCreditRequestReason('volume_changed');
        }
        return self::$VOLUMECHANGED;
    }
    public static function PAYMENTBEHAVIOUR(): OrganizationChangeCreditRequestReason
    {
        if (!isset(self::$PAYMENTBEHAVIOUR)) {
            self::$PAYMENTBEHAVIOUR = new OrganizationChangeCreditRequestReason('payment_behaviour');
        }
        return self::$PAYMENTBEHAVIOUR;
    }
    public static function CUSTOMERREQUEST(): OrganizationChangeCreditRequestReason
    {
        if (!isset(self::$CUSTOMERREQUEST)) {
            self::$CUSTOMERREQUEST = new OrganizationChangeCreditRequestReason('customer_request');
        }
        return self::$CUSTOMERREQUEST;
    }
    public static function OTHER(): OrganizationChangeCreditRequestReason
    {
        if (!isset(self::$OTHER)) {
            self::$OTHER = new OrganizationChangeCreditRequestReason('other');
        }
        return self::$OTHER;
    }
}