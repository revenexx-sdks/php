<?php

namespace Revenexx\Enums;

use JsonSerializable;

class JourneyTemplateTier implements JsonSerializable
{
    private static JourneyTemplateTier $MVP;
    private static JourneyTemplateTier $V2;

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

    public static function MVP(): JourneyTemplateTier
    {
        if (!isset(self::$MVP)) {
            self::$MVP = new JourneyTemplateTier('mvp');
        }
        return self::$MVP;
    }
    public static function V2(): JourneyTemplateTier
    {
        if (!isset(self::$V2)) {
            self::$V2 = new JourneyTemplateTier('v2');
        }
        return self::$V2;
    }
}