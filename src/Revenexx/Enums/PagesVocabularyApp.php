<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PagesVocabularyApp implements JsonSerializable
{
    private static PagesVocabularyApp $PAGES;

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

    public static function PAGES(): PagesVocabularyApp
    {
        if (!isset(self::$PAGES)) {
            self::$PAGES = new PagesVocabularyApp('pages');
        }
        return self::$PAGES;
    }
}