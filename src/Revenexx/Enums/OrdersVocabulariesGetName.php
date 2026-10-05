<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrdersVocabulariesGetName implements JsonSerializable
{
    private static OrdersVocabulariesGetName $CANCELLATIONSCOPES;
    private static OrdersVocabulariesGetName $COMMENTVISIBILITIES;
    private static OrdersVocabulariesGetName $DISCOUNTAPPLIESTO;
    private static OrdersVocabulariesGetName $DISCOUNTEFFECTKINDS;
    private static OrdersVocabulariesGetName $DISCOUNTPLACEMENTS;
    private static OrdersVocabulariesGetName $DISCOUNTSOURCES;
    private static OrdersVocabulariesGetName $DISCOUNTVALUETYPES;
    private static OrdersVocabulariesGetName $FULFILLMENTSTATUSES;
    private static OrdersVocabulariesGetName $ITEMTYPES;
    private static OrdersVocabulariesGetName $PAYMENTSTATUSES;
    private static OrdersVocabulariesGetName $REFUNDMODES;
    private static OrdersVocabulariesGetName $RETURNREASONTONES;
    private static OrdersVocabulariesGetName $RETURNRESOLUTIONS;
    private static OrdersVocabulariesGetName $RETURNSTATUSES;
    private static OrdersVocabulariesGetName $STATUSES;

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

    public static function CANCELLATIONSCOPES(): OrdersVocabulariesGetName
    {
        if (!isset(self::$CANCELLATIONSCOPES)) {
            self::$CANCELLATIONSCOPES = new OrdersVocabulariesGetName('cancellation-scopes');
        }
        return self::$CANCELLATIONSCOPES;
    }
    public static function COMMENTVISIBILITIES(): OrdersVocabulariesGetName
    {
        if (!isset(self::$COMMENTVISIBILITIES)) {
            self::$COMMENTVISIBILITIES = new OrdersVocabulariesGetName('comment-visibilities');
        }
        return self::$COMMENTVISIBILITIES;
    }
    public static function DISCOUNTAPPLIESTO(): OrdersVocabulariesGetName
    {
        if (!isset(self::$DISCOUNTAPPLIESTO)) {
            self::$DISCOUNTAPPLIESTO = new OrdersVocabulariesGetName('discount-applies-to');
        }
        return self::$DISCOUNTAPPLIESTO;
    }
    public static function DISCOUNTEFFECTKINDS(): OrdersVocabulariesGetName
    {
        if (!isset(self::$DISCOUNTEFFECTKINDS)) {
            self::$DISCOUNTEFFECTKINDS = new OrdersVocabulariesGetName('discount-effect-kinds');
        }
        return self::$DISCOUNTEFFECTKINDS;
    }
    public static function DISCOUNTPLACEMENTS(): OrdersVocabulariesGetName
    {
        if (!isset(self::$DISCOUNTPLACEMENTS)) {
            self::$DISCOUNTPLACEMENTS = new OrdersVocabulariesGetName('discount-placements');
        }
        return self::$DISCOUNTPLACEMENTS;
    }
    public static function DISCOUNTSOURCES(): OrdersVocabulariesGetName
    {
        if (!isset(self::$DISCOUNTSOURCES)) {
            self::$DISCOUNTSOURCES = new OrdersVocabulariesGetName('discount-sources');
        }
        return self::$DISCOUNTSOURCES;
    }
    public static function DISCOUNTVALUETYPES(): OrdersVocabulariesGetName
    {
        if (!isset(self::$DISCOUNTVALUETYPES)) {
            self::$DISCOUNTVALUETYPES = new OrdersVocabulariesGetName('discount-value-types');
        }
        return self::$DISCOUNTVALUETYPES;
    }
    public static function FULFILLMENTSTATUSES(): OrdersVocabulariesGetName
    {
        if (!isset(self::$FULFILLMENTSTATUSES)) {
            self::$FULFILLMENTSTATUSES = new OrdersVocabulariesGetName('fulfillment-statuses');
        }
        return self::$FULFILLMENTSTATUSES;
    }
    public static function ITEMTYPES(): OrdersVocabulariesGetName
    {
        if (!isset(self::$ITEMTYPES)) {
            self::$ITEMTYPES = new OrdersVocabulariesGetName('item-types');
        }
        return self::$ITEMTYPES;
    }
    public static function PAYMENTSTATUSES(): OrdersVocabulariesGetName
    {
        if (!isset(self::$PAYMENTSTATUSES)) {
            self::$PAYMENTSTATUSES = new OrdersVocabulariesGetName('payment-statuses');
        }
        return self::$PAYMENTSTATUSES;
    }
    public static function REFUNDMODES(): OrdersVocabulariesGetName
    {
        if (!isset(self::$REFUNDMODES)) {
            self::$REFUNDMODES = new OrdersVocabulariesGetName('refund-modes');
        }
        return self::$REFUNDMODES;
    }
    public static function RETURNREASONTONES(): OrdersVocabulariesGetName
    {
        if (!isset(self::$RETURNREASONTONES)) {
            self::$RETURNREASONTONES = new OrdersVocabulariesGetName('return-reason-tones');
        }
        return self::$RETURNREASONTONES;
    }
    public static function RETURNRESOLUTIONS(): OrdersVocabulariesGetName
    {
        if (!isset(self::$RETURNRESOLUTIONS)) {
            self::$RETURNRESOLUTIONS = new OrdersVocabulariesGetName('return-resolutions');
        }
        return self::$RETURNRESOLUTIONS;
    }
    public static function RETURNSTATUSES(): OrdersVocabulariesGetName
    {
        if (!isset(self::$RETURNSTATUSES)) {
            self::$RETURNSTATUSES = new OrdersVocabulariesGetName('return-statuses');
        }
        return self::$RETURNSTATUSES;
    }
    public static function STATUSES(): OrdersVocabulariesGetName
    {
        if (!isset(self::$STATUSES)) {
            self::$STATUSES = new OrdersVocabulariesGetName('statuses');
        }
        return self::$STATUSES;
    }
}