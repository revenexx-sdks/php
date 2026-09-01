<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PagesVocabularyName implements JsonSerializable
{
    private static PagesVocabularyName $EDITSTATESTATUSES;
    private static PagesVocabularyName $PAGESTATUSES;
    private static PagesVocabularyName $TRANSLATIONSTATUSES;

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

    public static function EDITSTATESTATUSES(): PagesVocabularyName
    {
        if (!isset(self::$EDITSTATESTATUSES)) {
            self::$EDITSTATESTATUSES = new PagesVocabularyName('edit-state-statuses');
        }
        return self::$EDITSTATESTATUSES;
    }
    public static function PAGESTATUSES(): PagesVocabularyName
    {
        if (!isset(self::$PAGESTATUSES)) {
            self::$PAGESTATUSES = new PagesVocabularyName('page-statuses');
        }
        return self::$PAGESTATUSES;
    }
    public static function TRANSLATIONSTATUSES(): PagesVocabularyName
    {
        if (!isset(self::$TRANSLATIONSTATUSES)) {
            self::$TRANSLATIONSTATUSES = new PagesVocabularyName('translation-statuses');
        }
        return self::$TRANSLATIONSTATUSES;
    }
}