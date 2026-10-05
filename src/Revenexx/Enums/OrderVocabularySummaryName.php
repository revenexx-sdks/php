<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderVocabularySummaryName implements JsonSerializable
{
    private static OrderVocabularySummaryName $CANCELLATIONSCOPES;
    private static OrderVocabularySummaryName $COMMENTVISIBILITIES;
    private static OrderVocabularySummaryName $DISCOUNTAPPLIESTO;
    private static OrderVocabularySummaryName $DISCOUNTEFFECTKINDS;
    private static OrderVocabularySummaryName $DISCOUNTPLACEMENTS;
    private static OrderVocabularySummaryName $DISCOUNTSOURCES;
    private static OrderVocabularySummaryName $DISCOUNTVALUETYPES;
    private static OrderVocabularySummaryName $FULFILLMENTSTATUSES;
    private static OrderVocabularySummaryName $ITEMTYPES;
    private static OrderVocabularySummaryName $PAYMENTSTATUSES;
    private static OrderVocabularySummaryName $REFUNDMODES;
    private static OrderVocabularySummaryName $RETURNREASONTONES;
    private static OrderVocabularySummaryName $RETURNRESOLUTIONS;
    private static OrderVocabularySummaryName $RETURNSTATUSES;
    private static OrderVocabularySummaryName $STATUSES;

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

    public static function CANCELLATIONSCOPES(): OrderVocabularySummaryName
    {
        if (!isset(self::$CANCELLATIONSCOPES)) {
            self::$CANCELLATIONSCOPES = new OrderVocabularySummaryName('cancellation-scopes');
        }
        return self::$CANCELLATIONSCOPES;
    }
    public static function COMMENTVISIBILITIES(): OrderVocabularySummaryName
    {
        if (!isset(self::$COMMENTVISIBILITIES)) {
            self::$COMMENTVISIBILITIES = new OrderVocabularySummaryName('comment-visibilities');
        }
        return self::$COMMENTVISIBILITIES;
    }
    public static function DISCOUNTAPPLIESTO(): OrderVocabularySummaryName
    {
        if (!isset(self::$DISCOUNTAPPLIESTO)) {
            self::$DISCOUNTAPPLIESTO = new OrderVocabularySummaryName('discount-applies-to');
        }
        return self::$DISCOUNTAPPLIESTO;
    }
    public static function DISCOUNTEFFECTKINDS(): OrderVocabularySummaryName
    {
        if (!isset(self::$DISCOUNTEFFECTKINDS)) {
            self::$DISCOUNTEFFECTKINDS = new OrderVocabularySummaryName('discount-effect-kinds');
        }
        return self::$DISCOUNTEFFECTKINDS;
    }
    public static function DISCOUNTPLACEMENTS(): OrderVocabularySummaryName
    {
        if (!isset(self::$DISCOUNTPLACEMENTS)) {
            self::$DISCOUNTPLACEMENTS = new OrderVocabularySummaryName('discount-placements');
        }
        return self::$DISCOUNTPLACEMENTS;
    }
    public static function DISCOUNTSOURCES(): OrderVocabularySummaryName
    {
        if (!isset(self::$DISCOUNTSOURCES)) {
            self::$DISCOUNTSOURCES = new OrderVocabularySummaryName('discount-sources');
        }
        return self::$DISCOUNTSOURCES;
    }
    public static function DISCOUNTVALUETYPES(): OrderVocabularySummaryName
    {
        if (!isset(self::$DISCOUNTVALUETYPES)) {
            self::$DISCOUNTVALUETYPES = new OrderVocabularySummaryName('discount-value-types');
        }
        return self::$DISCOUNTVALUETYPES;
    }
    public static function FULFILLMENTSTATUSES(): OrderVocabularySummaryName
    {
        if (!isset(self::$FULFILLMENTSTATUSES)) {
            self::$FULFILLMENTSTATUSES = new OrderVocabularySummaryName('fulfillment-statuses');
        }
        return self::$FULFILLMENTSTATUSES;
    }
    public static function ITEMTYPES(): OrderVocabularySummaryName
    {
        if (!isset(self::$ITEMTYPES)) {
            self::$ITEMTYPES = new OrderVocabularySummaryName('item-types');
        }
        return self::$ITEMTYPES;
    }
    public static function PAYMENTSTATUSES(): OrderVocabularySummaryName
    {
        if (!isset(self::$PAYMENTSTATUSES)) {
            self::$PAYMENTSTATUSES = new OrderVocabularySummaryName('payment-statuses');
        }
        return self::$PAYMENTSTATUSES;
    }
    public static function REFUNDMODES(): OrderVocabularySummaryName
    {
        if (!isset(self::$REFUNDMODES)) {
            self::$REFUNDMODES = new OrderVocabularySummaryName('refund-modes');
        }
        return self::$REFUNDMODES;
    }
    public static function RETURNREASONTONES(): OrderVocabularySummaryName
    {
        if (!isset(self::$RETURNREASONTONES)) {
            self::$RETURNREASONTONES = new OrderVocabularySummaryName('return-reason-tones');
        }
        return self::$RETURNREASONTONES;
    }
    public static function RETURNRESOLUTIONS(): OrderVocabularySummaryName
    {
        if (!isset(self::$RETURNRESOLUTIONS)) {
            self::$RETURNRESOLUTIONS = new OrderVocabularySummaryName('return-resolutions');
        }
        return self::$RETURNRESOLUTIONS;
    }
    public static function RETURNSTATUSES(): OrderVocabularySummaryName
    {
        if (!isset(self::$RETURNSTATUSES)) {
            self::$RETURNSTATUSES = new OrderVocabularySummaryName('return-statuses');
        }
        return self::$RETURNSTATUSES;
    }
    public static function STATUSES(): OrderVocabularySummaryName
    {
        if (!isset(self::$STATUSES)) {
            self::$STATUSES = new OrderVocabularySummaryName('statuses');
        }
        return self::$STATUSES;
    }
}