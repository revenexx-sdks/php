<?php

namespace Revenexx\Enums;

use JsonSerializable;

class DocumentVocabularyName implements JsonSerializable
{
    private static DocumentVocabularyName $KINDS;
    private static DocumentVocabularyName $VISIBILITIES;

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

    public static function KINDS(): DocumentVocabularyName
    {
        if (!isset(self::$KINDS)) {
            self::$KINDS = new DocumentVocabularyName('kinds');
        }
        return self::$KINDS;
    }
    public static function VISIBILITIES(): DocumentVocabularyName
    {
        if (!isset(self::$VISIBILITIES)) {
            self::$VISIBILITIES = new DocumentVocabularyName('visibilities');
        }
        return self::$VISIBILITIES;
    }
}