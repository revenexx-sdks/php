<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderVocabularySummaryName implements JsonSerializable
{
    private static OrderVocabularySummaryName $CANCELLATIONSCOPES;
    private static OrderVocabularySummaryName $COMMENTVISIBILITIES;
    private static OrderVocabularySummaryName $FULFILLMENTSTATUSES;
    private static OrderVocabularySummaryName $ITEMTYPES;
    private static OrderVocabularySummaryName $PAYMENTSTATUSES;
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