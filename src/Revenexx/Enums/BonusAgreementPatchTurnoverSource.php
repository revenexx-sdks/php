<?php

namespace Revenexx\Enums;

use JsonSerializable;

class BonusAgreementPatchTurnoverSource implements JsonSerializable
{
    private static BonusAgreementPatchTurnoverSource $ORDERS;
    private static BonusAgreementPatchTurnoverSource $IMPORT;

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

    public static function ORDERS(): BonusAgreementPatchTurnoverSource
    {
        if (!isset(self::$ORDERS)) {
            self::$ORDERS = new BonusAgreementPatchTurnoverSource('orders');
        }
        return self::$ORDERS;
    }
    public static function IMPORT(): BonusAgreementPatchTurnoverSource
    {
        if (!isset(self::$IMPORT)) {
            self::$IMPORT = new BonusAgreementPatchTurnoverSource('import');
        }
        return self::$IMPORT;
    }
}