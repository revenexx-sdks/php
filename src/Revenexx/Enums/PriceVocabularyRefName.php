<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceVocabularyRefName implements JsonSerializable
{
    private static PriceVocabularyRefName $LISTSTATUSES;
    private static PriceVocabularyRefName $PRICETYPES;
    private static PriceVocabularyRefName $TAXBASES;

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

    public static function LISTSTATUSES(): PriceVocabularyRefName
    {
        if (!isset(self::$LISTSTATUSES)) {
            self::$LISTSTATUSES = new PriceVocabularyRefName('list-statuses');
        }
        return self::$LISTSTATUSES;
    }
    public static function PRICETYPES(): PriceVocabularyRefName
    {
        if (!isset(self::$PRICETYPES)) {
            self::$PRICETYPES = new PriceVocabularyRefName('price-types');
        }
        return self::$PRICETYPES;
    }
    public static function TAXBASES(): PriceVocabularyRefName
    {
        if (!isset(self::$TAXBASES)) {
            self::$TAXBASES = new PriceVocabularyRefName('tax-bases');
        }
        return self::$TAXBASES;
    }
}