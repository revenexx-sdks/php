<?php

namespace Revenexx\Enums;

use JsonSerializable;

class InventoriesVocabulariesGetName implements JsonSerializable
{
    private static InventoriesVocabulariesGetName $LOCATIONTYPES;
    private static InventoriesVocabulariesGetName $MOVEMENTTYPES;
    private static InventoriesVocabulariesGetName $RESERVATIONSTATUSES;

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

    public static function LOCATIONTYPES(): InventoriesVocabulariesGetName
    {
        if (!isset(self::$LOCATIONTYPES)) {
            self::$LOCATIONTYPES = new InventoriesVocabulariesGetName('location-types');
        }
        return self::$LOCATIONTYPES;
    }
    public static function MOVEMENTTYPES(): InventoriesVocabulariesGetName
    {
        if (!isset(self::$MOVEMENTTYPES)) {
            self::$MOVEMENTTYPES = new InventoriesVocabulariesGetName('movement-types');
        }
        return self::$MOVEMENTTYPES;
    }
    public static function RESERVATIONSTATUSES(): InventoriesVocabulariesGetName
    {
        if (!isset(self::$RESERVATIONSTATUSES)) {
            self::$RESERVATIONSTATUSES = new InventoriesVocabulariesGetName('reservation-statuses');
        }
        return self::$RESERVATIONSTATUSES;
    }
}