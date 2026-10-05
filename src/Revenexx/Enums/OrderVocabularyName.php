<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderVocabularyName implements JsonSerializable
{
    private static OrderVocabularyName $CANCELLATIONSCOPES;
    private static OrderVocabularyName $COMMENTVISIBILITIES;
    private static OrderVocabularyName $DISCOUNTAPPLIESTO;
    private static OrderVocabularyName $DISCOUNTEFFECTKINDS;
    private static OrderVocabularyName $DISCOUNTPLACEMENTS;
    private static OrderVocabularyName $DISCOUNTSOURCES;
    private static OrderVocabularyName $DISCOUNTVALUETYPES;
    private static OrderVocabularyName $FULFILLMENTSTATUSES;
    private static OrderVocabularyName $ITEMTYPES;
    private static OrderVocabularyName $PAYMENTSTATUSES;
    private static OrderVocabularyName $REFUNDMODES;
    private static OrderVocabularyName $RETURNREASONTONES;
    private static OrderVocabularyName $RETURNRESOLUTIONS;
    private static OrderVocabularyName $RETURNSTATUSES;
    private static OrderVocabularyName $STATUSES;

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

    public static function CANCELLATIONSCOPES(): OrderVocabularyName
    {
        if (!isset(self::$CANCELLATIONSCOPES)) {
            self::$CANCELLATIONSCOPES = new OrderVocabularyName('cancellation-scopes');
        }
        return self::$CANCELLATIONSCOPES;
    }
    public static function COMMENTVISIBILITIES(): OrderVocabularyName
    {
        if (!isset(self::$COMMENTVISIBILITIES)) {
            self::$COMMENTVISIBILITIES = new OrderVocabularyName('comment-visibilities');
        }
        return self::$COMMENTVISIBILITIES;
    }
    public static function DISCOUNTAPPLIESTO(): OrderVocabularyName
    {
        if (!isset(self::$DISCOUNTAPPLIESTO)) {
            self::$DISCOUNTAPPLIESTO = new OrderVocabularyName('discount-applies-to');
        }
        return self::$DISCOUNTAPPLIESTO;
    }
    public static function DISCOUNTEFFECTKINDS(): OrderVocabularyName
    {
        if (!isset(self::$DISCOUNTEFFECTKINDS)) {
            self::$DISCOUNTEFFECTKINDS = new OrderVocabularyName('discount-effect-kinds');
        }
        return self::$DISCOUNTEFFECTKINDS;
    }
    public static function DISCOUNTPLACEMENTS(): OrderVocabularyName
    {
        if (!isset(self::$DISCOUNTPLACEMENTS)) {
            self::$DISCOUNTPLACEMENTS = new OrderVocabularyName('discount-placements');
        }
        return self::$DISCOUNTPLACEMENTS;
    }
    public static function DISCOUNTSOURCES(): OrderVocabularyName
    {
        if (!isset(self::$DISCOUNTSOURCES)) {
            self::$DISCOUNTSOURCES = new OrderVocabularyName('discount-sources');
        }
        return self::$DISCOUNTSOURCES;
    }
    public static function DISCOUNTVALUETYPES(): OrderVocabularyName
    {
        if (!isset(self::$DISCOUNTVALUETYPES)) {
            self::$DISCOUNTVALUETYPES = new OrderVocabularyName('discount-value-types');
        }
        return self::$DISCOUNTVALUETYPES;
    }
    public static function FULFILLMENTSTATUSES(): OrderVocabularyName
    {
        if (!isset(self::$FULFILLMENTSTATUSES)) {
            self::$FULFILLMENTSTATUSES = new OrderVocabularyName('fulfillment-statuses');
        }
        return self::$FULFILLMENTSTATUSES;
    }
    public static function ITEMTYPES(): OrderVocabularyName
    {
        if (!isset(self::$ITEMTYPES)) {
            self::$ITEMTYPES = new OrderVocabularyName('item-types');
        }
        return self::$ITEMTYPES;
    }
    public static function PAYMENTSTATUSES(): OrderVocabularyName
    {
        if (!isset(self::$PAYMENTSTATUSES)) {
            self::$PAYMENTSTATUSES = new OrderVocabularyName('payment-statuses');
        }
        return self::$PAYMENTSTATUSES;
    }
    public static function REFUNDMODES(): OrderVocabularyName
    {
        if (!isset(self::$REFUNDMODES)) {
            self::$REFUNDMODES = new OrderVocabularyName('refund-modes');
        }
        return self::$REFUNDMODES;
    }
    public static function RETURNREASONTONES(): OrderVocabularyName
    {
        if (!isset(self::$RETURNREASONTONES)) {
            self::$RETURNREASONTONES = new OrderVocabularyName('return-reason-tones');
        }
        return self::$RETURNREASONTONES;
    }
    public static function RETURNRESOLUTIONS(): OrderVocabularyName
    {
        if (!isset(self::$RETURNRESOLUTIONS)) {
            self::$RETURNRESOLUTIONS = new OrderVocabularyName('return-resolutions');
        }
        return self::$RETURNRESOLUTIONS;
    }
    public static function RETURNSTATUSES(): OrderVocabularyName
    {
        if (!isset(self::$RETURNSTATUSES)) {
            self::$RETURNSTATUSES = new OrderVocabularyName('return-statuses');
        }
        return self::$RETURNSTATUSES;
    }
    public static function STATUSES(): OrderVocabularyName
    {
        if (!isset(self::$STATUSES)) {
            self::$STATUSES = new OrderVocabularyName('statuses');
        }
        return self::$STATUSES;
    }
}