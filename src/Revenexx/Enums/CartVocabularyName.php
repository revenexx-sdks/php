<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CartVocabularyName implements JsonSerializable
{
    private static CartVocabularyName $IOAPPLYMODES;
    private static CartVocabularyName $IODIRECTIONS;
    private static CartVocabularyName $IOENTITIES;
    private static CartVocabularyName $IOFORMATS;
    private static CartVocabularyName $ITEMTYPES;
    private static CartVocabularyName $STATUSES;

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

    public static function IOAPPLYMODES(): CartVocabularyName
    {
        if (!isset(self::$IOAPPLYMODES)) {
            self::$IOAPPLYMODES = new CartVocabularyName('io-apply-modes');
        }
        return self::$IOAPPLYMODES;
    }
    public static function IODIRECTIONS(): CartVocabularyName
    {
        if (!isset(self::$IODIRECTIONS)) {
            self::$IODIRECTIONS = new CartVocabularyName('io-directions');
        }
        return self::$IODIRECTIONS;
    }
    public static function IOENTITIES(): CartVocabularyName
    {
        if (!isset(self::$IOENTITIES)) {
            self::$IOENTITIES = new CartVocabularyName('io-entities');
        }
        return self::$IOENTITIES;
    }
    public static function IOFORMATS(): CartVocabularyName
    {
        if (!isset(self::$IOFORMATS)) {
            self::$IOFORMATS = new CartVocabularyName('io-formats');
        }
        return self::$IOFORMATS;
    }
    public static function ITEMTYPES(): CartVocabularyName
    {
        if (!isset(self::$ITEMTYPES)) {
            self::$ITEMTYPES = new CartVocabularyName('item-types');
        }
        return self::$ITEMTYPES;
    }
    public static function STATUSES(): CartVocabularyName
    {
        if (!isset(self::$STATUSES)) {
            self::$STATUSES = new CartVocabularyName('statuses');
        }
        return self::$STATUSES;
    }
}