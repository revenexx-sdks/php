<?php

namespace Revenexx\Enums;

use JsonSerializable;

class FormSubmissionStatus implements JsonSerializable
{
    private static FormSubmissionStatus $NEW;
    private static FormSubmissionStatus $READ;
    private static FormSubmissionStatus $ARCHIVED;
    private static FormSubmissionStatus $SPAM;

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

    public static function NEW(): FormSubmissionStatus
    {
        if (!isset(self::$NEW)) {
            self::$NEW = new FormSubmissionStatus('new');
        }
        return self::$NEW;
    }
    public static function READ(): FormSubmissionStatus
    {
        if (!isset(self::$READ)) {
            self::$READ = new FormSubmissionStatus('read');
        }
        return self::$READ;
    }
    public static function ARCHIVED(): FormSubmissionStatus
    {
        if (!isset(self::$ARCHIVED)) {
            self::$ARCHIVED = new FormSubmissionStatus('archived');
        }
        return self::$ARCHIVED;
    }
    public static function SPAM(): FormSubmissionStatus
    {
        if (!isset(self::$SPAM)) {
            self::$SPAM = new FormSubmissionStatus('spam');
        }
        return self::$SPAM;
    }
}