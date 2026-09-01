<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceVocabularyName implements JsonSerializable
{
    private static PriceVocabularyName $LISTSTATUSES;
    private static PriceVocabularyName $PRICETYPES;
    private static PriceVocabularyName $TAXBASES;

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

    public static function LISTSTATUSES(): PriceVocabularyName
    {
        if (!isset(self::$LISTSTATUSES)) {
            self::$LISTSTATUSES = new PriceVocabularyName('list-statuses');
        }
        return self::$LISTSTATUSES;
    }
    public static function PRICETYPES(): PriceVocabularyName
    {
        if (!isset(self::$PRICETYPES)) {
            self::$PRICETYPES = new PriceVocabularyName('price-types');
        }
        return self::$PRICETYPES;
    }
    public static function TAXBASES(): PriceVocabularyName
    {
        if (!isset(self::$TAXBASES)) {
            self::$TAXBASES = new PriceVocabularyName('tax-bases');
        }
        return self::$TAXBASES;
    }
}