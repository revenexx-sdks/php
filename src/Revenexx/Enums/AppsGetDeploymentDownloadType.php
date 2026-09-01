<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AppsGetDeploymentDownloadType implements JsonSerializable
{
    private static AppsGetDeploymentDownloadType $SOURCE;
    private static AppsGetDeploymentDownloadType $OUTPUT;

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

    public static function SOURCE(): AppsGetDeploymentDownloadType
    {
        if (!isset(self::$SOURCE)) {
            self::$SOURCE = new AppsGetDeploymentDownloadType('source');
        }
        return self::$SOURCE;
    }
    public static function OUTPUT(): AppsGetDeploymentDownloadType
    {
        if (!isset(self::$OUTPUT)) {
            self::$OUTPUT = new AppsGetDeploymentDownloadType('output');
        }
        return self::$OUTPUT;
    }
}