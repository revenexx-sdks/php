<?php

namespace Revenexx\Enums;

use JsonSerializable;

class DocumentVocabularyPathName implements JsonSerializable
{
    private static DocumentVocabularyPathName $KINDS;
    private static DocumentVocabularyPathName $VISIBILITIES;

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

    public static function KINDS(): DocumentVocabularyPathName
    {
        if (!isset(self::$KINDS)) {
            self::$KINDS = new DocumentVocabularyPathName('kinds');
        }
        return self::$KINDS;
    }
    public static function VISIBILITIES(): DocumentVocabularyPathName
    {
        if (!isset(self::$VISIBILITIES)) {
            self::$VISIBILITIES = new DocumentVocabularyPathName('visibilities');
        }
        return self::$VISIBILITIES;
    }
}