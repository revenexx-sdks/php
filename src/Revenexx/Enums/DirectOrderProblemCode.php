<?php

namespace Revenexx\Enums;

use JsonSerializable;

class DirectOrderProblemCode implements JsonSerializable
{
    private static DirectOrderProblemCode $COSTCENTERCLOSED;
    private static DirectOrderProblemCode $CURRENCYMISMATCH;
    private static DirectOrderProblemCode $REFUSED;

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

    public static function COSTCENTERCLOSED(): DirectOrderProblemCode
    {
        if (!isset(self::$COSTCENTERCLOSED)) {
            self::$COSTCENTERCLOSED = new DirectOrderProblemCode('cost_center_closed');
        }
        return self::$COSTCENTERCLOSED;
    }
    public static function CURRENCYMISMATCH(): DirectOrderProblemCode
    {
        if (!isset(self::$CURRENCYMISMATCH)) {
            self::$CURRENCYMISMATCH = new DirectOrderProblemCode('currency_mismatch');
        }
        return self::$CURRENCYMISMATCH;
    }
    public static function REFUSED(): DirectOrderProblemCode
    {
        if (!isset(self::$REFUSED)) {
            self::$REFUSED = new DirectOrderProblemCode('refused');
        }
        return self::$REFUSED;
    }
}