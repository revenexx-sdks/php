<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class Permissions implements JsonSerializable
{
    private static Permissions $GEOLOCATION;
    private static Permissions $CAMERA;
    private static Permissions $MICROPHONE;
    private static Permissions $NOTIFICATIONS;
    private static Permissions $MIDI;
    private static Permissions $PUSH;
    private static Permissions $CLIPBOARDREAD;
    private static Permissions $CLIPBOARDWRITE;
    private static Permissions $PAYMENTHANDLER;
    private static Permissions $USB;
    private static Permissions $BLUETOOTH;
    private static Permissions $ACCELEROMETER;
    private static Permissions $GYROSCOPE;
    private static Permissions $MAGNETOMETER;
    private static Permissions $AMBIENTLIGHTSENSOR;
    private static Permissions $BACKGROUNDSYNC;
    private static Permissions $PERSISTENTSTORAGE;
    private static Permissions $SCREENWAKELOCK;
    private static Permissions $WEBSHARE;
    private static Permissions $XRSPATIALTRACKING;

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

    public static function GEOLOCATION(): Permissions
    {
        if (!isset(self::$GEOLOCATION)) {
            self::$GEOLOCATION = new Permissions('geolocation');
        }
        return self::$GEOLOCATION;
    }
    public static function CAMERA(): Permissions
    {
        if (!isset(self::$CAMERA)) {
            self::$CAMERA = new Permissions('camera');
        }
        return self::$CAMERA;
    }
    public static function MICROPHONE(): Permissions
    {
        if (!isset(self::$MICROPHONE)) {
            self::$MICROPHONE = new Permissions('microphone');
        }
        return self::$MICROPHONE;
    }
    public static function NOTIFICATIONS(): Permissions
    {
        if (!isset(self::$NOTIFICATIONS)) {
            self::$NOTIFICATIONS = new Permissions('notifications');
        }
        return self::$NOTIFICATIONS;
    }
    public static function MIDI(): Permissions
    {
        if (!isset(self::$MIDI)) {
            self::$MIDI = new Permissions('midi');
        }
        return self::$MIDI;
    }
    public static function PUSH(): Permissions
    {
        if (!isset(self::$PUSH)) {
            self::$PUSH = new Permissions('push');
        }
        return self::$PUSH;
    }
    public static function CLIPBOARDREAD(): Permissions
    {
        if (!isset(self::$CLIPBOARDREAD)) {
            self::$CLIPBOARDREAD = new Permissions('clipboard-read');
        }
        return self::$CLIPBOARDREAD;
    }
    public static function CLIPBOARDWRITE(): Permissions
    {
        if (!isset(self::$CLIPBOARDWRITE)) {
            self::$CLIPBOARDWRITE = new Permissions('clipboard-write');
        }
        return self::$CLIPBOARDWRITE;
    }
    public static function PAYMENTHANDLER(): Permissions
    {
        if (!isset(self::$PAYMENTHANDLER)) {
            self::$PAYMENTHANDLER = new Permissions('payment-handler');
        }
        return self::$PAYMENTHANDLER;
    }
    public static function USB(): Permissions
    {
        if (!isset(self::$USB)) {
            self::$USB = new Permissions('usb');
        }
        return self::$USB;
    }
    public static function BLUETOOTH(): Permissions
    {
        if (!isset(self::$BLUETOOTH)) {
            self::$BLUETOOTH = new Permissions('bluetooth');
        }
        return self::$BLUETOOTH;
    }
    public static function ACCELEROMETER(): Permissions
    {
        if (!isset(self::$ACCELEROMETER)) {
            self::$ACCELEROMETER = new Permissions('accelerometer');
        }
        return self::$ACCELEROMETER;
    }
    public static function GYROSCOPE(): Permissions
    {
        if (!isset(self::$GYROSCOPE)) {
            self::$GYROSCOPE = new Permissions('gyroscope');
        }
        return self::$GYROSCOPE;
    }
    public static function MAGNETOMETER(): Permissions
    {
        if (!isset(self::$MAGNETOMETER)) {
            self::$MAGNETOMETER = new Permissions('magnetometer');
        }
        return self::$MAGNETOMETER;
    }
    public static function AMBIENTLIGHTSENSOR(): Permissions
    {
        if (!isset(self::$AMBIENTLIGHTSENSOR)) {
            self::$AMBIENTLIGHTSENSOR = new Permissions('ambient-light-sensor');
        }
        return self::$AMBIENTLIGHTSENSOR;
    }
    public static function BACKGROUNDSYNC(): Permissions
    {
        if (!isset(self::$BACKGROUNDSYNC)) {
            self::$BACKGROUNDSYNC = new Permissions('background-sync');
        }
        return self::$BACKGROUNDSYNC;
    }
    public static function PERSISTENTSTORAGE(): Permissions
    {
        if (!isset(self::$PERSISTENTSTORAGE)) {
            self::$PERSISTENTSTORAGE = new Permissions('persistent-storage');
        }
        return self::$PERSISTENTSTORAGE;
    }
    public static function SCREENWAKELOCK(): Permissions
    {
        if (!isset(self::$SCREENWAKELOCK)) {
            self::$SCREENWAKELOCK = new Permissions('screen-wake-lock');
        }
        return self::$SCREENWAKELOCK;
    }
    public static function WEBSHARE(): Permissions
    {
        if (!isset(self::$WEBSHARE)) {
            self::$WEBSHARE = new Permissions('web-share');
        }
        return self::$WEBSHARE;
    }
    public static function XRSPATIALTRACKING(): Permissions
    {
        if (!isset(self::$XRSPATIALTRACKING)) {
            self::$XRSPATIALTRACKING = new Permissions('xr-spatial-tracking');
        }
        return self::$XRSPATIALTRACKING;
    }
}