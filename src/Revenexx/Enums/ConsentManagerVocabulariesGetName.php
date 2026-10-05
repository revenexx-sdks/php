<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConsentManagerVocabulariesGetName implements JsonSerializable
{
    private static ConsentManagerVocabulariesGetName $LEGALBASES;
    private static ConsentManagerVocabulariesGetName $COOKIEKINDS;
    private static ConsentManagerVocabulariesGetName $RECORDACTIONS;
    private static ConsentManagerVocabulariesGetName $RECORDSURFACES;
    private static ConsentManagerVocabulariesGetName $BANNERLAYOUTS;
    private static ConsentManagerVocabulariesGetName $GOOGLESIGNALS;

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

    public static function LEGALBASES(): ConsentManagerVocabulariesGetName
    {
        if (!isset(self::$LEGALBASES)) {
            self::$LEGALBASES = new ConsentManagerVocabulariesGetName('legal-bases');
        }
        return self::$LEGALBASES;
    }
    public static function COOKIEKINDS(): ConsentManagerVocabulariesGetName
    {
        if (!isset(self::$COOKIEKINDS)) {
            self::$COOKIEKINDS = new ConsentManagerVocabulariesGetName('cookie-kinds');
        }
        return self::$COOKIEKINDS;
    }
    public static function RECORDACTIONS(): ConsentManagerVocabulariesGetName
    {
        if (!isset(self::$RECORDACTIONS)) {
            self::$RECORDACTIONS = new ConsentManagerVocabulariesGetName('record-actions');
        }
        return self::$RECORDACTIONS;
    }
    public static function RECORDSURFACES(): ConsentManagerVocabulariesGetName
    {
        if (!isset(self::$RECORDSURFACES)) {
            self::$RECORDSURFACES = new ConsentManagerVocabulariesGetName('record-surfaces');
        }
        return self::$RECORDSURFACES;
    }
    public static function BANNERLAYOUTS(): ConsentManagerVocabulariesGetName
    {
        if (!isset(self::$BANNERLAYOUTS)) {
            self::$BANNERLAYOUTS = new ConsentManagerVocabulariesGetName('banner-layouts');
        }
        return self::$BANNERLAYOUTS;
    }
    public static function GOOGLESIGNALS(): ConsentManagerVocabulariesGetName
    {
        if (!isset(self::$GOOGLESIGNALS)) {
            self::$GOOGLESIGNALS = new ConsentManagerVocabulariesGetName('google-signals');
        }
        return self::$GOOGLESIGNALS;
    }
}