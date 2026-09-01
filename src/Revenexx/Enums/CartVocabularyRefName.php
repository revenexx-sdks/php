<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CartVocabularyRefName implements JsonSerializable
{
    private static CartVocabularyRefName $IOAPPLYMODES;
    private static CartVocabularyRefName $IODIRECTIONS;
    private static CartVocabularyRefName $IOENTITIES;
    private static CartVocabularyRefName $IOFORMATS;
    private static CartVocabularyRefName $ITEMTYPES;
    private static CartVocabularyRefName $STATUSES;

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

    public static function IOAPPLYMODES(): CartVocabularyRefName
    {
        if (!isset(self::$IOAPPLYMODES)) {
            self::$IOAPPLYMODES = new CartVocabularyRefName('io-apply-modes');
        }
        return self::$IOAPPLYMODES;
    }
    public static function IODIRECTIONS(): CartVocabularyRefName
    {
        if (!isset(self::$IODIRECTIONS)) {
            self::$IODIRECTIONS = new CartVocabularyRefName('io-directions');
        }
        return self::$IODIRECTIONS;
    }
    public static function IOENTITIES(): CartVocabularyRefName
    {
        if (!isset(self::$IOENTITIES)) {
            self::$IOENTITIES = new CartVocabularyRefName('io-entities');
        }
        return self::$IOENTITIES;
    }
    public static function IOFORMATS(): CartVocabularyRefName
    {
        if (!isset(self::$IOFORMATS)) {
            self::$IOFORMATS = new CartVocabularyRefName('io-formats');
        }
        return self::$IOFORMATS;
    }
    public static function ITEMTYPES(): CartVocabularyRefName
    {
        if (!isset(self::$ITEMTYPES)) {
            self::$ITEMTYPES = new CartVocabularyRefName('item-types');
        }
        return self::$ITEMTYPES;
    }
    public static function STATUSES(): CartVocabularyRefName
    {
        if (!isset(self::$STATUSES)) {
            self::$STATUSES = new CartVocabularyRefName('statuses');
        }
        return self::$STATUSES;
    }
}