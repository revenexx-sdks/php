<?php

namespace Revenexx\Enums;

use JsonSerializable;

class FormsVocabularySummaryName implements JsonSerializable
{
    private static FormsVocabularySummaryName $FORMSTATUSES;
    private static FormsVocabularySummaryName $SUBMISSIONSTATUSES;

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

    public static function FORMSTATUSES(): FormsVocabularySummaryName
    {
        if (!isset(self::$FORMSTATUSES)) {
            self::$FORMSTATUSES = new FormsVocabularySummaryName('form-statuses');
        }
        return self::$FORMSTATUSES;
    }
    public static function SUBMISSIONSTATUSES(): FormsVocabularySummaryName
    {
        if (!isset(self::$SUBMISSIONSTATUSES)) {
            self::$SUBMISSIONSTATUSES = new FormsVocabularySummaryName('submission-statuses');
        }
        return self::$SUBMISSIONSTATUSES;
    }
}