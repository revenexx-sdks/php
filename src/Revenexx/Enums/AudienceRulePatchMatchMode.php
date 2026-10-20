<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudienceRulePatchMatchMode implements JsonSerializable
{
    private static AudienceRulePatchMatchMode $ALL;
    private static AudienceRulePatchMatchMode $ANY;

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

    public static function ALL(): AudienceRulePatchMatchMode
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new AudienceRulePatchMatchMode('all');
        }
        return self::$ALL;
    }
    public static function ANY(): AudienceRulePatchMatchMode
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new AudienceRulePatchMatchMode('any');
        }
        return self::$ANY;
    }
}