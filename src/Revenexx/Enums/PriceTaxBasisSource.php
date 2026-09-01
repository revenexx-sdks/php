<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PriceTaxBasisSource implements JsonSerializable
{
    private static PriceTaxBasisSource $LIST;
    private static PriceTaxBasisSource $LISTLEGACY;
    private static PriceTaxBasisSource $TENANT;

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

    public static function LIST(): PriceTaxBasisSource
    {
        if (!isset(self::$LIST)) {
            self::$LIST = new PriceTaxBasisSource('list');
        }
        return self::$LIST;
    }
    public static function LISTLEGACY(): PriceTaxBasisSource
    {
        if (!isset(self::$LISTLEGACY)) {
            self::$LISTLEGACY = new PriceTaxBasisSource('list_legacy');
        }
        return self::$LISTLEGACY;
    }
    public static function TENANT(): PriceTaxBasisSource
    {
        if (!isset(self::$TENANT)) {
            self::$TENANT = new PriceTaxBasisSource('tenant');
        }
        return self::$TENANT;
    }
}