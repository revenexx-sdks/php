<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CustomersOrganizationsBlockReason implements JsonSerializable
{
    private static CustomersOrganizationsBlockReason $PAYMENTOVERDUE;
    private static CustomersOrganizationsBlockReason $CREDITEXCEEDED;
    private static CustomersOrganizationsBlockReason $INSOLVENCY;
    private static CustomersOrganizationsBlockReason $DISPUTE;
    private static CustomersOrganizationsBlockReason $COMPLIANCE;
    private static CustomersOrganizationsBlockReason $CUSTOMERREQUEST;
    private static CustomersOrganizationsBlockReason $OTHER;

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

    public static function PAYMENTOVERDUE(): CustomersOrganizationsBlockReason
    {
        if (!isset(self::$PAYMENTOVERDUE)) {
            self::$PAYMENTOVERDUE = new CustomersOrganizationsBlockReason('payment_overdue');
        }
        return self::$PAYMENTOVERDUE;
    }
    public static function CREDITEXCEEDED(): CustomersOrganizationsBlockReason
    {
        if (!isset(self::$CREDITEXCEEDED)) {
            self::$CREDITEXCEEDED = new CustomersOrganizationsBlockReason('credit_exceeded');
        }
        return self::$CREDITEXCEEDED;
    }
    public static function INSOLVENCY(): CustomersOrganizationsBlockReason
    {
        if (!isset(self::$INSOLVENCY)) {
            self::$INSOLVENCY = new CustomersOrganizationsBlockReason('insolvency');
        }
        return self::$INSOLVENCY;
    }
    public static function DISPUTE(): CustomersOrganizationsBlockReason
    {
        if (!isset(self::$DISPUTE)) {
            self::$DISPUTE = new CustomersOrganizationsBlockReason('dispute');
        }
        return self::$DISPUTE;
    }
    public static function COMPLIANCE(): CustomersOrganizationsBlockReason
    {
        if (!isset(self::$COMPLIANCE)) {
            self::$COMPLIANCE = new CustomersOrganizationsBlockReason('compliance');
        }
        return self::$COMPLIANCE;
    }
    public static function CUSTOMERREQUEST(): CustomersOrganizationsBlockReason
    {
        if (!isset(self::$CUSTOMERREQUEST)) {
            self::$CUSTOMERREQUEST = new CustomersOrganizationsBlockReason('customer_request');
        }
        return self::$CUSTOMERREQUEST;
    }
    public static function OTHER(): CustomersOrganizationsBlockReason
    {
        if (!isset(self::$OTHER)) {
            self::$OTHER = new CustomersOrganizationsBlockReason('other');
        }
        return self::$OTHER;
    }
}