<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PagesVocabulariesGetName implements JsonSerializable
{
    private static PagesVocabulariesGetName $EDITSTATESTATUSES;
    private static PagesVocabulariesGetName $PAGESTATUSES;
    private static PagesVocabulariesGetName $TRANSLATIONSTATUSES;

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

    public static function EDITSTATESTATUSES(): PagesVocabulariesGetName
    {
        if (!isset(self::$EDITSTATESTATUSES)) {
            self::$EDITSTATESTATUSES = new PagesVocabulariesGetName('edit-state-statuses');
        }
        return self::$EDITSTATESTATUSES;
    }
    public static function PAGESTATUSES(): PagesVocabulariesGetName
    {
        if (!isset(self::$PAGESTATUSES)) {
            self::$PAGESTATUSES = new PagesVocabulariesGetName('page-statuses');
        }
        return self::$PAGESTATUSES;
    }
    public static function TRANSLATIONSTATUSES(): PagesVocabulariesGetName
    {
        if (!isset(self::$TRANSLATIONSTATUSES)) {
            self::$TRANSLATIONSTATUSES = new PagesVocabulariesGetName('translation-statuses');
        }
        return self::$TRANSLATIONSTATUSES;
    }
}