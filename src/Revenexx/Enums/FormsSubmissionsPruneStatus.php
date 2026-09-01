<?php

namespace Revenexx\Enums;

use JsonSerializable;

class FormsSubmissionsPruneStatus implements JsonSerializable
{
    private static FormsSubmissionsPruneStatus $NEW;
    private static FormsSubmissionsPruneStatus $READ;
    private static FormsSubmissionsPruneStatus $ARCHIVED;
    private static FormsSubmissionsPruneStatus $SPAM;

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

    public static function NEW(): FormsSubmissionsPruneStatus
    {
        if (!isset(self::$NEW)) {
            self::$NEW = new FormsSubmissionsPruneStatus('new');
        }
        return self::$NEW;
    }
    public static function READ(): FormsSubmissionsPruneStatus
    {
        if (!isset(self::$READ)) {
            self::$READ = new FormsSubmissionsPruneStatus('read');
        }
        return self::$READ;
    }
    public static function ARCHIVED(): FormsSubmissionsPruneStatus
    {
        if (!isset(self::$ARCHIVED)) {
            self::$ARCHIVED = new FormsSubmissionsPruneStatus('archived');
        }
        return self::$ARCHIVED;
    }
    public static function SPAM(): FormsSubmissionsPruneStatus
    {
        if (!isset(self::$SPAM)) {
            self::$SPAM = new FormsSubmissionsPruneStatus('spam');
        }
        return self::$SPAM;
    }
}