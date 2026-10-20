<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrganizationBlockRequestReason implements JsonSerializable
{
    private static OrganizationBlockRequestReason $PAYMENTOVERDUE;
    private static OrganizationBlockRequestReason $CREDITEXCEEDED;
    private static OrganizationBlockRequestReason $INSOLVENCY;
    private static OrganizationBlockRequestReason $DISPUTE;
    private static OrganizationBlockRequestReason $COMPLIANCE;
    private static OrganizationBlockRequestReason $CUSTOMERREQUEST;
    private static OrganizationBlockRequestReason $OTHER;

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

    public static function PAYMENTOVERDUE(): OrganizationBlockRequestReason
    {
        if (!isset(self::$PAYMENTOVERDUE)) {
            self::$PAYMENTOVERDUE = new OrganizationBlockRequestReason('payment_overdue');
        }
        return self::$PAYMENTOVERDUE;
    }
    public static function CREDITEXCEEDED(): OrganizationBlockRequestReason
    {
        if (!isset(self::$CREDITEXCEEDED)) {
            self::$CREDITEXCEEDED = new OrganizationBlockRequestReason('credit_exceeded');
        }
        return self::$CREDITEXCEEDED;
    }
    public static function INSOLVENCY(): OrganizationBlockRequestReason
    {
        if (!isset(self::$INSOLVENCY)) {
            self::$INSOLVENCY = new OrganizationBlockRequestReason('insolvency');
        }
        return self::$INSOLVENCY;
    }
    public static function DISPUTE(): OrganizationBlockRequestReason
    {
        if (!isset(self::$DISPUTE)) {
            self::$DISPUTE = new OrganizationBlockRequestReason('dispute');
        }
        return self::$DISPUTE;
    }
    public static function COMPLIANCE(): OrganizationBlockRequestReason
    {
        if (!isset(self::$COMPLIANCE)) {
            self::$COMPLIANCE = new OrganizationBlockRequestReason('compliance');
        }
        return self::$COMPLIANCE;
    }
    public static function CUSTOMERREQUEST(): OrganizationBlockRequestReason
    {
        if (!isset(self::$CUSTOMERREQUEST)) {
            self::$CUSTOMERREQUEST = new OrganizationBlockRequestReason('customer_request');
        }
        return self::$CUSTOMERREQUEST;
    }
    public static function OTHER(): OrganizationBlockRequestReason
    {
        if (!isset(self::$OTHER)) {
            self::$OTHER = new OrganizationBlockRequestReason('other');
        }
        return self::$OTHER;
    }
}