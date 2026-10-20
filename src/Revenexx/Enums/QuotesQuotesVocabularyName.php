<?php

namespace Revenexx\Enums;

use JsonSerializable;

class QuotesQuotesVocabularyName implements JsonSerializable
{
    private static QuotesQuotesVocabularyName $ACTOR;
    private static QuotesQuotesVocabularyName $ATTACHMENTDIRECTION;
    private static QuotesQuotesVocabularyName $EVENTKIND;
    private static QuotesQuotesVocabularyName $ITEMDECISION;
    private static QuotesQuotesVocabularyName $PRICEREASON;
    private static QuotesQuotesVocabularyName $QUOTEORIGIN;
    private static QuotesQuotesVocabularyName $QUOTESTATUS;
    private static QuotesQuotesVocabularyName $VISIBILITY;

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

    public static function ACTOR(): QuotesQuotesVocabularyName
    {
        if (!isset(self::$ACTOR)) {
            self::$ACTOR = new QuotesQuotesVocabularyName('actor');
        }
        return self::$ACTOR;
    }
    public static function ATTACHMENTDIRECTION(): QuotesQuotesVocabularyName
    {
        if (!isset(self::$ATTACHMENTDIRECTION)) {
            self::$ATTACHMENTDIRECTION = new QuotesQuotesVocabularyName('attachment-direction');
        }
        return self::$ATTACHMENTDIRECTION;
    }
    public static function EVENTKIND(): QuotesQuotesVocabularyName
    {
        if (!isset(self::$EVENTKIND)) {
            self::$EVENTKIND = new QuotesQuotesVocabularyName('event-kind');
        }
        return self::$EVENTKIND;
    }
    public static function ITEMDECISION(): QuotesQuotesVocabularyName
    {
        if (!isset(self::$ITEMDECISION)) {
            self::$ITEMDECISION = new QuotesQuotesVocabularyName('item-decision');
        }
        return self::$ITEMDECISION;
    }
    public static function PRICEREASON(): QuotesQuotesVocabularyName
    {
        if (!isset(self::$PRICEREASON)) {
            self::$PRICEREASON = new QuotesQuotesVocabularyName('price-reason');
        }
        return self::$PRICEREASON;
    }
    public static function QUOTEORIGIN(): QuotesQuotesVocabularyName
    {
        if (!isset(self::$QUOTEORIGIN)) {
            self::$QUOTEORIGIN = new QuotesQuotesVocabularyName('quote-origin');
        }
        return self::$QUOTEORIGIN;
    }
    public static function QUOTESTATUS(): QuotesQuotesVocabularyName
    {
        if (!isset(self::$QUOTESTATUS)) {
            self::$QUOTESTATUS = new QuotesQuotesVocabularyName('quote-status');
        }
        return self::$QUOTESTATUS;
    }
    public static function VISIBILITY(): QuotesQuotesVocabularyName
    {
        if (!isset(self::$VISIBILITY)) {
            self::$VISIBILITY = new QuotesQuotesVocabularyName('visibility');
        }
        return self::$VISIBILITY;
    }
}