<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderlistsVocabulariesGetName implements JsonSerializable
{
    private static OrderlistsVocabulariesGetName $KINDS;

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

    public static function KINDS(): OrderlistsVocabulariesGetName
    {
        if (!isset(self::$KINDS)) {
            self::$KINDS = new OrderlistsVocabulariesGetName('kinds');
        }
        return self::$KINDS;
    }
}