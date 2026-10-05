<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SalesRepsVocabulariesGetName implements JsonSerializable
{
    private static SalesRepsVocabulariesGetName $ASSIGNMENTROLES;

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

    public static function ASSIGNMENTROLES(): SalesRepsVocabulariesGetName
    {
        if (!isset(self::$ASSIGNMENTROLES)) {
            self::$ASSIGNMENTROLES = new SalesRepsVocabulariesGetName('assignment-roles');
        }
        return self::$ASSIGNMENTROLES;
    }
}