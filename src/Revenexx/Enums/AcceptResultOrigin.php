<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AcceptResultOrigin implements JsonSerializable
{
    private static AcceptResultOrigin $BUYER;
    private static AcceptResultOrigin $SELLER;

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

    public static function BUYER(): AcceptResultOrigin
    {
        if (!isset(self::$BUYER)) {
            self::$BUYER = new AcceptResultOrigin('buyer');
        }
        return self::$BUYER;
    }
    public static function SELLER(): AcceptResultOrigin
    {
        if (!isset(self::$SELLER)) {
            self::$SELLER = new AcceptResultOrigin('seller');
        }
        return self::$SELLER;
    }
}