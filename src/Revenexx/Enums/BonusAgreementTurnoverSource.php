<?php

namespace Revenexx\Enums;

use JsonSerializable;

class BonusAgreementTurnoverSource implements JsonSerializable
{
    private static BonusAgreementTurnoverSource $ORDERS;
    private static BonusAgreementTurnoverSource $IMPORT;

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

    public static function ORDERS(): BonusAgreementTurnoverSource
    {
        if (!isset(self::$ORDERS)) {
            self::$ORDERS = new BonusAgreementTurnoverSource('orders');
        }
        return self::$ORDERS;
    }
    public static function IMPORT(): BonusAgreementTurnoverSource
    {
        if (!isset(self::$IMPORT)) {
            self::$IMPORT = new BonusAgreementTurnoverSource('import');
        }
        return self::$IMPORT;
    }
}