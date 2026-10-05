<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConsentVocabularySource implements JsonSerializable
{
    private static ConsentVocabularySource $CODE;

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

    public static function CODE(): ConsentVocabularySource
    {
        if (!isset(self::$CODE)) {
            self::$CODE = new ConsentVocabularySource('code');
        }
        return self::$CODE;
    }
}