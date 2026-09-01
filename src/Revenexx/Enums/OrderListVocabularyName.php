<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderListVocabularyName implements JsonSerializable
{
    private static OrderListVocabularyName $KINDS;

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

    public static function KINDS(): OrderListVocabularyName
    {
        if (!isset(self::$KINDS)) {
            self::$KINDS = new OrderListVocabularyName('kinds');
        }
        return self::$KINDS;
    }
}