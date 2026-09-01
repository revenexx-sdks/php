<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderResolutionStage implements JsonSerializable
{
    private static OrderResolutionStage $COMPLETE;
    private static OrderResolutionStage $REJECT;

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

    public static function COMPLETE(): OrderResolutionStage
    {
        if (!isset(self::$COMPLETE)) {
            self::$COMPLETE = new OrderResolutionStage('complete');
        }
        return self::$COMPLETE;
    }
    public static function REJECT(): OrderResolutionStage
    {
        if (!isset(self::$REJECT)) {
            self::$REJECT = new OrderResolutionStage('reject');
        }
        return self::$REJECT;
    }
}