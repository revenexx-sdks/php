<?php

namespace Revenexx\Enums;

use JsonSerializable;

class RoleCatalogResponseSource implements JsonSerializable
{
    private static RoleCatalogResponseSource $TENANT;
    private static RoleCatalogResponseSource $DEFAULTS;

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

    public static function TENANT(): RoleCatalogResponseSource
    {
        if (!isset(self::$TENANT)) {
            self::$TENANT = new RoleCatalogResponseSource('tenant');
        }
        return self::$TENANT;
    }
    public static function DEFAULTS(): RoleCatalogResponseSource
    {
        if (!isset(self::$DEFAULTS)) {
            self::$DEFAULTS = new RoleCatalogResponseSource('defaults');
        }
        return self::$DEFAULTS;
    }
}