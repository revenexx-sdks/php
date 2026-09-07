<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PurchaseRequestEventName implements JsonSerializable
{
    private static PurchaseRequestEventName $PURCHASEREQUESTREQUESTED;
    private static PurchaseRequestEventName $PURCHASEREQUESTAPPROVED;
    private static PurchaseRequestEventName $PURCHASEREQUESTDECLINED;
    private static PurchaseRequestEventName $PURCHASEREQUESTCANCELLED;
    private static PurchaseRequestEventName $PURCHASEREQUESTORDERED;
    private static PurchaseRequestEventName $PURCHASEREQUESTNOTIFICATION;
    private static PurchaseRequestEventName $BUDGETWITHDRAWN;
    private static PurchaseRequestEventName $BUDGETCONFIRMED;

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

    public static function PURCHASEREQUESTREQUESTED(): PurchaseRequestEventName
    {
        if (!isset(self::$PURCHASEREQUESTREQUESTED)) {
            self::$PURCHASEREQUESTREQUESTED = new PurchaseRequestEventName('purchase_request.requested');
        }
        return self::$PURCHASEREQUESTREQUESTED;
    }
    public static function PURCHASEREQUESTAPPROVED(): PurchaseRequestEventName
    {
        if (!isset(self::$PURCHASEREQUESTAPPROVED)) {
            self::$PURCHASEREQUESTAPPROVED = new PurchaseRequestEventName('purchase_request.approved');
        }
        return self::$PURCHASEREQUESTAPPROVED;
    }
    public static function PURCHASEREQUESTDECLINED(): PurchaseRequestEventName
    {
        if (!isset(self::$PURCHASEREQUESTDECLINED)) {
            self::$PURCHASEREQUESTDECLINED = new PurchaseRequestEventName('purchase_request.declined');
        }
        return self::$PURCHASEREQUESTDECLINED;
    }
    public static function PURCHASEREQUESTCANCELLED(): PurchaseRequestEventName
    {
        if (!isset(self::$PURCHASEREQUESTCANCELLED)) {
            self::$PURCHASEREQUESTCANCELLED = new PurchaseRequestEventName('purchase_request.cancelled');
        }
        return self::$PURCHASEREQUESTCANCELLED;
    }
    public static function PURCHASEREQUESTORDERED(): PurchaseRequestEventName
    {
        if (!isset(self::$PURCHASEREQUESTORDERED)) {
            self::$PURCHASEREQUESTORDERED = new PurchaseRequestEventName('purchase_request.ordered');
        }
        return self::$PURCHASEREQUESTORDERED;
    }
    public static function PURCHASEREQUESTNOTIFICATION(): PurchaseRequestEventName
    {
        if (!isset(self::$PURCHASEREQUESTNOTIFICATION)) {
            self::$PURCHASEREQUESTNOTIFICATION = new PurchaseRequestEventName('purchase_request.notification');
        }
        return self::$PURCHASEREQUESTNOTIFICATION;
    }
    public static function BUDGETWITHDRAWN(): PurchaseRequestEventName
    {
        if (!isset(self::$BUDGETWITHDRAWN)) {
            self::$BUDGETWITHDRAWN = new PurchaseRequestEventName('budget.withdrawn');
        }
        return self::$BUDGETWITHDRAWN;
    }
    public static function BUDGETCONFIRMED(): PurchaseRequestEventName
    {
        if (!isset(self::$BUDGETCONFIRMED)) {
            self::$BUDGETCONFIRMED = new PurchaseRequestEventName('budget.confirmed');
        }
        return self::$BUDGETCONFIRMED;
    }
}