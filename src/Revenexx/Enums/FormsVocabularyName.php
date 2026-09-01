<?php

namespace Revenexx\Enums;

use JsonSerializable;

class FormsVocabularyName implements JsonSerializable
{
    private static FormsVocabularyName $FORMSTATUSES;
    private static FormsVocabularyName $SUBMISSIONSTATUSES;

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

    public static function FORMSTATUSES(): FormsVocabularyName
    {
        if (!isset(self::$FORMSTATUSES)) {
            self::$FORMSTATUSES = new FormsVocabularyName('form-statuses');
        }
        return self::$FORMSTATUSES;
    }
    public static function SUBMISSIONSTATUSES(): FormsVocabularyName
    {
        if (!isset(self::$SUBMISSIONSTATUSES)) {
            self::$SUBMISSIONSTATUSES = new FormsVocabularyName('submission-statuses');
        }
        return self::$SUBMISSIONSTATUSES;
    }
}