<?php

namespace Revenexx\Enums;

use JsonSerializable;

class BonusAgreementState implements JsonSerializable
{
    private static BonusAgreementState $ACTIVE;
    private static BonusAgreementState $CALCULATED;
    private static BonusAgreementState $APPROVED;
    private static BonusAgreementState $PAID;
    private static BonusAgreementState $FORFEITED;

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

    public static function ACTIVE(): BonusAgreementState
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new BonusAgreementState('active');
        }
        return self::$ACTIVE;
    }
    public static function CALCULATED(): BonusAgreementState
    {
        if (!isset(self::$CALCULATED)) {
            self::$CALCULATED = new BonusAgreementState('calculated');
        }
        return self::$CALCULATED;
    }
    public static function APPROVED(): BonusAgreementState
    {
        if (!isset(self::$APPROVED)) {
            self::$APPROVED = new BonusAgreementState('approved');
        }
        return self::$APPROVED;
    }
    public static function PAID(): BonusAgreementState
    {
        if (!isset(self::$PAID)) {
            self::$PAID = new BonusAgreementState('paid');
        }
        return self::$PAID;
    }
    public static function FORFEITED(): BonusAgreementState
    {
        if (!isset(self::$FORFEITED)) {
            self::$FORFEITED = new BonusAgreementState('forfeited');
        }
        return self::$FORFEITED;
    }
}