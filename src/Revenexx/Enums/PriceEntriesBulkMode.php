<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceEntriesBulkMode implements JsonSerializable
{
    private static PriceEntriesBulkMode $UPSERT;
    private static PriceEntriesBulkMode $APPEND;

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

    public static function UPSERT(): PriceEntriesBulkMode
    {
        if (!isset(self::$UPSERT)) {
            self::$UPSERT = new PriceEntriesBulkMode('upsert');
        }
        return self::$UPSERT;
    }
    public static function APPEND(): PriceEntriesBulkMode
    {
        if (!isset(self::$APPEND)) {
            self::$APPEND = new PriceEntriesBulkMode('append');
        }
        return self::$APPEND;
    }
}