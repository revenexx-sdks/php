<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PunchoutVocabulariesGetName implements JsonSerializable
{
    private static PunchoutVocabulariesGetName $ENTRYPROBEOUTCOME;
    private static PunchoutVocabulariesGetName $MAPPINGMUTATORS;
    private static PunchoutVocabulariesGetName $MAPPINGSOURCES;

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

    public static function ENTRYPROBEOUTCOME(): PunchoutVocabulariesGetName
    {
        if (!isset(self::$ENTRYPROBEOUTCOME)) {
            self::$ENTRYPROBEOUTCOME = new PunchoutVocabulariesGetName('entry-probe-outcome');
        }
        return self::$ENTRYPROBEOUTCOME;
    }
    public static function MAPPINGMUTATORS(): PunchoutVocabulariesGetName
    {
        if (!isset(self::$MAPPINGMUTATORS)) {
            self::$MAPPINGMUTATORS = new PunchoutVocabulariesGetName('mapping-mutators');
        }
        return self::$MAPPINGMUTATORS;
    }
    public static function MAPPINGSOURCES(): PunchoutVocabulariesGetName
    {
        if (!isset(self::$MAPPINGSOURCES)) {
            self::$MAPPINGSOURCES = new PunchoutVocabulariesGetName('mapping-sources');
        }
        return self::$MAPPINGSOURCES;
    }
}