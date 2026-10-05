<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AcceptResultStatus implements JsonSerializable
{
    private static AcceptResultStatus $REQUESTED;
    private static AcceptResultStatus $INREVIEW;
    private static AcceptResultStatus $QUOTED;
    private static AcceptResultStatus $ACCEPTED;
    private static AcceptResultStatus $PARTIALLYACCEPTED;
    private static AcceptResultStatus $DECLINED;
    private static AcceptResultStatus $REJECTED;
    private static AcceptResultStatus $EXPIRED;

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

    public static function REQUESTED(): AcceptResultStatus
    {
        if (!isset(self::$REQUESTED)) {
            self::$REQUESTED = new AcceptResultStatus('requested');
        }
        return self::$REQUESTED;
    }
    public static function INREVIEW(): AcceptResultStatus
    {
        if (!isset(self::$INREVIEW)) {
            self::$INREVIEW = new AcceptResultStatus('in_review');
        }
        return self::$INREVIEW;
    }
    public static function QUOTED(): AcceptResultStatus
    {
        if (!isset(self::$QUOTED)) {
            self::$QUOTED = new AcceptResultStatus('quoted');
        }
        return self::$QUOTED;
    }
    public static function ACCEPTED(): AcceptResultStatus
    {
        if (!isset(self::$ACCEPTED)) {
            self::$ACCEPTED = new AcceptResultStatus('accepted');
        }
        return self::$ACCEPTED;
    }
    public static function PARTIALLYACCEPTED(): AcceptResultStatus
    {
        if (!isset(self::$PARTIALLYACCEPTED)) {
            self::$PARTIALLYACCEPTED = new AcceptResultStatus('partially_accepted');
        }
        return self::$PARTIALLYACCEPTED;
    }
    public static function DECLINED(): AcceptResultStatus
    {
        if (!isset(self::$DECLINED)) {
            self::$DECLINED = new AcceptResultStatus('declined');
        }
        return self::$DECLINED;
    }
    public static function REJECTED(): AcceptResultStatus
    {
        if (!isset(self::$REJECTED)) {
            self::$REJECTED = new AcceptResultStatus('rejected');
        }
        return self::$REJECTED;
    }
    public static function EXPIRED(): AcceptResultStatus
    {
        if (!isset(self::$EXPIRED)) {
            self::$EXPIRED = new AcceptResultStatus('expired');
        }
        return self::$EXPIRED;
    }
}