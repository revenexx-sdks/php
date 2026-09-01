<?php

namespace Revenexx\Enums;

use JsonSerializable;

class IoProfileResourceDirection implements JsonSerializable
{
    private static IoProfileResourceDirection $IMPORT;
    private static IoProfileResourceDirection $EXPORT;

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

    public static function IMPORT(): IoProfileResourceDirection
    {
        if (!isset(self::$IMPORT)) {
            self::$IMPORT = new IoProfileResourceDirection('import');
        }
        return self::$IMPORT;
    }
    public static function EXPORT(): IoProfileResourceDirection
    {
        if (!isset(self::$EXPORT)) {
            self::$EXPORT = new IoProfileResourceDirection('export');
        }
        return self::$EXPORT;
    }
}