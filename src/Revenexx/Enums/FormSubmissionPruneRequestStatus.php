<?php

namespace Revenexx\Enums;

use JsonSerializable;

class FormSubmissionPruneRequestStatus implements JsonSerializable
{
    private static FormSubmissionPruneRequestStatus $NEW;
    private static FormSubmissionPruneRequestStatus $READ;
    private static FormSubmissionPruneRequestStatus $ARCHIVED;
    private static FormSubmissionPruneRequestStatus $SPAM;

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

    public static function NEW(): FormSubmissionPruneRequestStatus
    {
        if (!isset(self::$NEW)) {
            self::$NEW = new FormSubmissionPruneRequestStatus('new');
        }
        return self::$NEW;
    }
    public static function READ(): FormSubmissionPruneRequestStatus
    {
        if (!isset(self::$READ)) {
            self::$READ = new FormSubmissionPruneRequestStatus('read');
        }
        return self::$READ;
    }
    public static function ARCHIVED(): FormSubmissionPruneRequestStatus
    {
        if (!isset(self::$ARCHIVED)) {
            self::$ARCHIVED = new FormSubmissionPruneRequestStatus('archived');
        }
        return self::$ARCHIVED;
    }
    public static function SPAM(): FormSubmissionPruneRequestStatus
    {
        if (!isset(self::$SPAM)) {
            self::$SPAM = new FormSubmissionPruneRequestStatus('spam');
        }
        return self::$SPAM;
    }
}