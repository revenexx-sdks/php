<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PagesVocabularyIndexApp implements JsonSerializable
{
    private static PagesVocabularyIndexApp $PAGES;

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

    public static function PAGES(): PagesVocabularyIndexApp
    {
        if (!isset(self::$PAGES)) {
            self::$PAGES = new PagesVocabularyIndexApp('pages');
        }
        return self::$PAGES;
    }
}