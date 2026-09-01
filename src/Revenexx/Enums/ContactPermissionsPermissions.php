<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactPermissionsPermissions implements JsonSerializable
{
    private static ContactPermissionsPermissions $CATALOGREAD;
    private static ContactPermissionsPermissions $CARTSMANAGE;
    private static ContactPermissionsPermissions $ORDERSCREATE;
    private static ContactPermissionsPermissions $ORDERSREQUEST;
    private static ContactPermissionsPermissions $ORDERSAPPROVE;
    private static ContactPermissionsPermissions $ORDERSREAD;
    private static ContactPermissionsPermissions $ADDRESSESMANAGE;
    private static ContactPermissionsPermissions $CONTACTSREAD;
    private static ContactPermissionsPermissions $CONTACTSMANAGE;
    private static ContactPermissionsPermissions $ORGANIZATIONMANAGE;

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

    public static function CATALOGREAD(): ContactPermissionsPermissions
    {
        if (!isset(self::$CATALOGREAD)) {
            self::$CATALOGREAD = new ContactPermissionsPermissions('catalog.read');
        }
        return self::$CATALOGREAD;
    }
    public static function CARTSMANAGE(): ContactPermissionsPermissions
    {
        if (!isset(self::$CARTSMANAGE)) {
            self::$CARTSMANAGE = new ContactPermissionsPermissions('carts.manage');
        }
        return self::$CARTSMANAGE;
    }
    public static function ORDERSCREATE(): ContactPermissionsPermissions
    {
        if (!isset(self::$ORDERSCREATE)) {
            self::$ORDERSCREATE = new ContactPermissionsPermissions('orders.create');
        }
        return self::$ORDERSCREATE;
    }
    public static function ORDERSREQUEST(): ContactPermissionsPermissions
    {
        if (!isset(self::$ORDERSREQUEST)) {
            self::$ORDERSREQUEST = new ContactPermissionsPermissions('orders.request');
        }
        return self::$ORDERSREQUEST;
    }
    public static function ORDERSAPPROVE(): ContactPermissionsPermissions
    {
        if (!isset(self::$ORDERSAPPROVE)) {
            self::$ORDERSAPPROVE = new ContactPermissionsPermissions('orders.approve');
        }
        return self::$ORDERSAPPROVE;
    }
    public static function ORDERSREAD(): ContactPermissionsPermissions
    {
        if (!isset(self::$ORDERSREAD)) {
            self::$ORDERSREAD = new ContactPermissionsPermissions('orders.read');
        }
        return self::$ORDERSREAD;
    }
    public static function ADDRESSESMANAGE(): ContactPermissionsPermissions
    {
        if (!isset(self::$ADDRESSESMANAGE)) {
            self::$ADDRESSESMANAGE = new ContactPermissionsPermissions('addresses.manage');
        }
        return self::$ADDRESSESMANAGE;
    }
    public static function CONTACTSREAD(): ContactPermissionsPermissions
    {
        if (!isset(self::$CONTACTSREAD)) {
            self::$CONTACTSREAD = new ContactPermissionsPermissions('contacts.read');
        }
        return self::$CONTACTSREAD;
    }
    public static function CONTACTSMANAGE(): ContactPermissionsPermissions
    {
        if (!isset(self::$CONTACTSMANAGE)) {
            self::$CONTACTSMANAGE = new ContactPermissionsPermissions('contacts.manage');
        }
        return self::$CONTACTSMANAGE;
    }
    public static function ORGANIZATIONMANAGE(): ContactPermissionsPermissions
    {
        if (!isset(self::$ORGANIZATIONMANAGE)) {
            self::$ORGANIZATIONMANAGE = new ContactPermissionsPermissions('organization.manage');
        }
        return self::$ORGANIZATIONMANAGE;
    }
}