<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ReleaseMode implements JsonSerializable
{
    private static ReleaseMode $DEPLOY;
    private static ReleaseMode $PREVIEW;

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

    public static function DEPLOY(): ReleaseMode
    {
        if (!isset(self::$DEPLOY)) {
            self::$DEPLOY = new ReleaseMode('deploy');
        }
        return self::$DEPLOY;
    }
    public static function PREVIEW(): ReleaseMode
    {
        if (!isset(self::$PREVIEW)) {
            self::$PREVIEW = new ReleaseMode('preview');
        }
        return self::$PREVIEW;
    }
}
