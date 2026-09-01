<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrdersVocabulariesGetName implements JsonSerializable
{
    private static OrdersVocabulariesGetName $CANCELLATIONSCOPES;
    private static OrdersVocabulariesGetName $COMMENTVISIBILITIES;
    private static OrdersVocabulariesGetName $FULFILLMENTSTATUSES;
    private static OrdersVocabulariesGetName $ITEMTYPES;
    private static OrdersVocabulariesGetName $PAYMENTSTATUSES;
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