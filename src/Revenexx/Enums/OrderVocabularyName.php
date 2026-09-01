<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderVocabularyName implements JsonSerializable
{
    private static OrderVocabularyName $CANCELLATIONSCOPES;
    private static OrderVocabularyName $COMMENTVISIBILITIES;
    private static OrderVocabularyName $FULFILLMENTSTATUSES;
    private static OrderVocabularyName $ITEMTYPES;
    private static OrderVocabularyName $PAYMENTSTATUSES;
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