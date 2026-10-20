<?php

namespace Revenexx\Enums;

use JsonSerializable;

class JourneyStepKind implements JsonSerializable
{
    private static JourneyStepKind $WAITDURATION;
    private static JourneyStepKind $WAITUNTILTIME;
    private static JourneyStepKind $WAITFOREVENT;
    private static JourneyStepKind $BRANCHCONDITION;
    private static JourneyStepKind $BRANCHRANDOM;
    private static JourneyStepKind $SENDEMAIL;
    private static JourneyStepKind $SENDSMS;
    private static JourneyStepKind $SENDWHATSAPP;
    private static JourneyStepKind $CREATETASK;
    private static JourneyStepKind $SETLIFECYCLESTAGE;
    private static JourneyStepKind $ADDTOAUDIENCE;
    private static JourneyStepKind $UPDATEFIELD;
    private static JourneyStepKind $REQUESTREVIEW;
    private static JourneyStepKind $AWARDPOINTS;
    private static JourneyStepKind $WEBHOOK;
    private static JourneyStepKind $EXIT;

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

    public static function WAITDURATION(): JourneyStepKind
    {
        if (!isset(self::$WAITDURATION)) {
            self::$WAITDURATION = new JourneyStepKind('wait_duration');
        }
        return self::$WAITDURATION;
    }
    public static function WAITUNTILTIME(): JourneyStepKind
    {
        if (!isset(self::$WAITUNTILTIME)) {
            self::$WAITUNTILTIME = new JourneyStepKind('wait_until_time');
        }
        return self::$WAITUNTILTIME;
    }
    public static function WAITFOREVENT(): JourneyStepKind
    {
        if (!isset(self::$WAITFOREVENT)) {
            self::$WAITFOREVENT = new JourneyStepKind('wait_for_event');
        }
        return self::$WAITFOREVENT;
    }
    public static function BRANCHCONDITION(): JourneyStepKind
    {
        if (!isset(self::$BRANCHCONDITION)) {
            self::$BRANCHCONDITION = new JourneyStepKind('branch_condition');
        }
        return self::$BRANCHCONDITION;
    }
    public static function BRANCHRANDOM(): JourneyStepKind
    {
        if (!isset(self::$BRANCHRANDOM)) {
            self::$BRANCHRANDOM = new JourneyStepKind('branch_random');
        }
        return self::$BRANCHRANDOM;
    }
    public static function SENDEMAIL(): JourneyStepKind
    {
        if (!isset(self::$SENDEMAIL)) {
            self::$SENDEMAIL = new JourneyStepKind('send_email');
        }
        return self::$SENDEMAIL;
    }
    public static function SENDSMS(): JourneyStepKind
    {
        if (!isset(self::$SENDSMS)) {
            self::$SENDSMS = new JourneyStepKind('send_sms');
        }
        return self::$SENDSMS;
    }
    public static function SENDWHATSAPP(): JourneyStepKind
    {
        if (!isset(self::$SENDWHATSAPP)) {
            self::$SENDWHATSAPP = new JourneyStepKind('send_whatsapp');
        }
        return self::$SENDWHATSAPP;
    }
    public static function CREATETASK(): JourneyStepKind
    {
        if (!isset(self::$CREATETASK)) {
            self::$CREATETASK = new JourneyStepKind('create_task');
        }
        return self::$CREATETASK;
    }
    public static function SETLIFECYCLESTAGE(): JourneyStepKind
    {
        if (!isset(self::$SETLIFECYCLESTAGE)) {
            self::$SETLIFECYCLESTAGE = new JourneyStepKind('set_lifecycle_stage');
        }
        return self::$SETLIFECYCLESTAGE;
    }
    public static function ADDTOAUDIENCE(): JourneyStepKind
    {
        if (!isset(self::$ADDTOAUDIENCE)) {
            self::$ADDTOAUDIENCE = new JourneyStepKind('add_to_audience');
        }
        return self::$ADDTOAUDIENCE;
    }
    public static function UPDATEFIELD(): JourneyStepKind
    {
        if (!isset(self::$UPDATEFIELD)) {
            self::$UPDATEFIELD = new JourneyStepKind('update_field');
        }
        return self::$UPDATEFIELD;
    }
    public static function REQUESTREVIEW(): JourneyStepKind
    {
        if (!isset(self::$REQUESTREVIEW)) {
            self::$REQUESTREVIEW = new JourneyStepKind('request_review');
        }
        return self::$REQUESTREVIEW;
    }
    public static function AWARDPOINTS(): JourneyStepKind
    {
        if (!isset(self::$AWARDPOINTS)) {
            self::$AWARDPOINTS = new JourneyStepKind('award_points');
        }
        return self::$AWARDPOINTS;
    }
    public static function WEBHOOK(): JourneyStepKind
    {
        if (!isset(self::$WEBHOOK)) {
            self::$WEBHOOK = new JourneyStepKind('webhook');
        }
        return self::$WEBHOOK;
    }
    public static function EXIT(): JourneyStepKind
    {
        if (!isset(self::$EXIT)) {
            self::$EXIT = new JourneyStepKind('exit');
        }
        return self::$EXIT;
    }
}