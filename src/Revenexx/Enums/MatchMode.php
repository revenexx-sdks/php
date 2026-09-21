<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MatchMode implements JsonSerializable
{
    private static MatchMode $ALL;
    private static MatchMode $ANY;

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

    public static function ALL(): MatchMode
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new MatchMode('all');
        }
        return self::$ALL;
    }
    public static function ANY(): MatchMode
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new MatchMode('any');
        }
        return self::$ANY;
    }
}