<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AuthMfaChallengeRequestFactor implements JsonSerializable
{
    private static AuthMfaChallengeRequestFactor $EMAIL;

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

    public static function EMAIL(): AuthMfaChallengeRequestFactor
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new AuthMfaChallengeRequestFactor('email');
        }
        return self::$EMAIL;
    }
}