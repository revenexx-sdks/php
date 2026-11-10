<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CubesCreateVcsDeploymentType implements JsonSerializable
{
    private static CubesCreateVcsDeploymentType $BRANCH;
    private static CubesCreateVcsDeploymentType $COMMIT;
    private static CubesCreateVcsDeploymentType $TAG;

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

    public static function BRANCH(): CubesCreateVcsDeploymentType
    {
        if (!isset(self::$BRANCH)) {
            self::$BRANCH = new CubesCreateVcsDeploymentType('branch');
        }
        return self::$BRANCH;
    }
    public static function COMMIT(): CubesCreateVcsDeploymentType
    {
        if (!isset(self::$COMMIT)) {
            self::$COMMIT = new CubesCreateVcsDeploymentType('commit');
        }
        return self::$COMMIT;
    }
    public static function TAG(): CubesCreateVcsDeploymentType
    {
        if (!isset(self::$TAG)) {
            self::$TAG = new CubesCreateVcsDeploymentType('tag');
        }
        return self::$TAG;
    }
}
