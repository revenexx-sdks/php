<?php

namespace Revenexx\Enums;

use JsonSerializable;

class BonusAgreementBaseSource implements JsonSerializable
{
    private static BonusAgreementBaseSource $MANUAL;
    private static BonusAgreementBaseSource $PREVIOUSAGREEMENT;
    private static BonusAgreementBaseSource $ORDERS;
    private static BonusAgreementBaseSource $IMPORT;

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

    public static function MANUAL(): BonusAgreementBaseSource
    {
        if (!isset(self::$MANUAL)) {
            self::$MANUAL = new BonusAgreementBaseSource('manual');
        }
        return self::$MANUAL;
    }
    public static function PREVIOUSAGREEMENT(): BonusAgreementBaseSource
    {
        if (!isset(self::$PREVIOUSAGREEMENT)) {
            self::$PREVIOUSAGREEMENT = new BonusAgreementBaseSource('previous_agreement');
        }
        return self::$PREVIOUSAGREEMENT;
    }
    public static function ORDERS(): BonusAgreementBaseSource
    {
        if (!isset(self::$ORDERS)) {
            self::$ORDERS = new BonusAgreementBaseSource('orders');
        }
        return self::$ORDERS;
    }
    public static function IMPORT(): BonusAgreementBaseSource
    {
        if (!isset(self::$IMPORT)) {
            self::$IMPORT = new BonusAgreementBaseSource('import');
        }
        return self::$IMPORT;
    }
}