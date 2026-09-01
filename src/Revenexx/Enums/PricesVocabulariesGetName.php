<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PricesVocabulariesGetName implements JsonSerializable
{
    private static PricesVocabulariesGetName $LISTSTATUSES;
    private static PricesVocabulariesGetName $PRICETYPES;
    private static PricesVocabulariesGetName $TAXBASES;

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

    public static function LISTSTATUSES(): PricesVocabulariesGetName
    {
        if (!isset(self::$LISTSTATUSES)) {
            self::$LISTSTATUSES = new PricesVocabulariesGetName('list-statuses');
        }
        return self::$LISTSTATUSES;
    }
    public static function PRICETYPES(): PricesVocabulariesGetName
    {
        if (!isset(self::$PRICETYPES)) {
            self::$PRICETYPES = new PricesVocabulariesGetName('price-types');
        }
        return self::$PRICETYPES;
    }
    public static function TAXBASES(): PricesVocabulariesGetName
    {
        if (!isset(self::$TAXBASES)) {
            self::$TAXBASES = new PricesVocabulariesGetName('tax-bases');
        }
        return self::$TAXBASES;
    }
}