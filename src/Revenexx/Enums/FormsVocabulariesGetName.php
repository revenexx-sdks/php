<?php

namespace Revenexx\Enums;

use JsonSerializable;

class FormsVocabulariesGetName implements JsonSerializable
{
    private static FormsVocabulariesGetName $FORMSTATUSES;
    private static FormsVocabulariesGetName $SUBMISSIONSTATUSES;

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

    public static function FORMSTATUSES(): FormsVocabulariesGetName
    {
        if (!isset(self::$FORMSTATUSES)) {
            self::$FORMSTATUSES = new FormsVocabulariesGetName('form-statuses');
        }
        return self::$FORMSTATUSES;
    }
    public static function SUBMISSIONSTATUSES(): FormsVocabulariesGetName
    {
        if (!isset(self::$SUBMISSIONSTATUSES)) {
            self::$SUBMISSIONSTATUSES = new FormsVocabulariesGetName('submission-statuses');
        }
        return self::$SUBMISSIONSTATUSES;
    }
}