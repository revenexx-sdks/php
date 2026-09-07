<?php

namespace Revenexx\Enums;

use JsonSerializable;

class EvaluateRequestConditions implements JsonSerializable
{
    private static EvaluateRequestConditions $AVAILABLEBUDGET;
    private static EvaluateRequestConditions $PERSONALLIMIT;

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

    public static function AVAILABLEBUDGET(): EvaluateRequestConditions
    {
        if (!isset(self::$AVAILABLEBUDGET)) {
            self::$AVAILABLEBUDGET = new EvaluateRequestConditions('availableBudget');
        }
        return self::$AVAILABLEBUDGET;
    }
    public static function PERSONALLIMIT(): EvaluateRequestConditions
    {
        if (!isset(self::$PERSONALLIMIT)) {
            self::$PERSONALLIMIT = new EvaluateRequestConditions('personalLimit');
        }
        return self::$PERSONALLIMIT;
    }
}