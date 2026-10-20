<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PagePopupFrequency implements JsonSerializable
{
    private static PagePopupFrequency $ONCEPERSESSION;
    private static PagePopupFrequency $ONCEPERDAY;
    private static PagePopupFrequency $EVERYPAGE;

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

    public static function ONCEPERSESSION(): PagePopupFrequency
    {
        if (!isset(self::$ONCEPERSESSION)) {
            self::$ONCEPERSESSION = new PagePopupFrequency('once_per_session');
        }
        return self::$ONCEPERSESSION;
    }
    public static function ONCEPERDAY(): PagePopupFrequency
    {
        if (!isset(self::$ONCEPERDAY)) {
            self::$ONCEPERDAY = new PagePopupFrequency('once_per_day');
        }
        return self::$ONCEPERDAY;
    }
    public static function EVERYPAGE(): PagePopupFrequency
    {
        if (!isset(self::$EVERYPAGE)) {
            self::$EVERYPAGE = new PagePopupFrequency('every_page');
        }
        return self::$EVERYPAGE;
    }
}