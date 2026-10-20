<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudiencePreviewRequestRuleMatch implements JsonSerializable
{
    private static AudiencePreviewRequestRuleMatch $ALL;
    private static AudiencePreviewRequestRuleMatch $ANY;

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

    public static function ALL(): AudiencePreviewRequestRuleMatch
    {
        if (!isset(self::$ALL)) {
            self::$ALL = new AudiencePreviewRequestRuleMatch('all');
        }
        return self::$ALL;
    }
    public static function ANY(): AudiencePreviewRequestRuleMatch
    {
        if (!isset(self::$ANY)) {
            self::$ANY = new AudiencePreviewRequestRuleMatch('any');
        }
        return self::$ANY;
    }
}