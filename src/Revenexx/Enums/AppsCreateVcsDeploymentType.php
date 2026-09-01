<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AppsCreateVcsDeploymentType implements JsonSerializable
{
    private static AppsCreateVcsDeploymentType $BRANCH;
    private static AppsCreateVcsDeploymentType $COMMIT;

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

    public static function BRANCH(): AppsCreateVcsDeploymentType
    {
        if (!isset(self::$BRANCH)) {
            self::$BRANCH = new AppsCreateVcsDeploymentType('branch');
        }
        return self::$BRANCH;
    }
    public static function COMMIT(): AppsCreateVcsDeploymentType
    {
        if (!isset(self::$COMMIT)) {
            self::$COMMIT = new AppsCreateVcsDeploymentType('commit');
        }
        return self::$COMMIT;
    }
}