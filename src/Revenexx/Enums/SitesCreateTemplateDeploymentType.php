<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SitesCreateTemplateDeploymentType implements JsonSerializable
{
    private static SitesCreateTemplateDeploymentType $BRANCH;
    private static SitesCreateTemplateDeploymentType $COMMIT;
    private static SitesCreateTemplateDeploymentType $TAG;

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

    public static function BRANCH(): SitesCreateTemplateDeploymentType
    {
        if (!isset(self::$BRANCH)) {
            self::$BRANCH = new SitesCreateTemplateDeploymentType('branch');
        }
        return self::$BRANCH;
    }
    public static function COMMIT(): SitesCreateTemplateDeploymentType
    {
        if (!isset(self::$COMMIT)) {
            self::$COMMIT = new SitesCreateTemplateDeploymentType('commit');
        }
        return self::$COMMIT;
    }
    public static function TAG(): SitesCreateTemplateDeploymentType
    {
        if (!isset(self::$TAG)) {
            self::$TAG = new SitesCreateTemplateDeploymentType('tag');
        }
        return self::$TAG;
    }
}