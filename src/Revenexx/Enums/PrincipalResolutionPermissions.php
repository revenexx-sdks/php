<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PrincipalResolutionPermissions implements JsonSerializable
{
    private static PrincipalResolutionPermissions $CATALOGREAD;
    private static PrincipalResolutionPermissions $CARTSMANAGE;
    private static PrincipalResolutionPermissions $ORDERSCREATE;
    private static PrincipalResolutionPermissions $ORDERSREQUEST;
    private static PrincipalResolutionPermissions $ORDERSAPPROVE;
    private static PrincipalResolutionPermissions $ORDERSREAD;
    private static PrincipalResolutionPermissions $ADDRESSESMANAGE;
    private static PrincipalResolutionPermissions $CONTACTSREAD;
    private static PrincipalResolutionPermissions $CONTACTSMANAGE;
    private static PrincipalResolutionPermissions $ORGANIZATIONMANAGE;

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

    public static function CATALOGREAD(): PrincipalResolutionPermissions
    {
        if (!isset(self::$CATALOGREAD)) {
            self::$CATALOGREAD = new PrincipalResolutionPermissions('catalog.read');
        }
        return self::$CATALOGREAD;
    }
    public static function CARTSMANAGE(): PrincipalResolutionPermissions
    {
        if (!isset(self::$CARTSMANAGE)) {
            self::$CARTSMANAGE = new PrincipalResolutionPermissions('carts.manage');
        }
        return self::$CARTSMANAGE;
    }
    public static function ORDERSCREATE(): PrincipalResolutionPermissions
    {
        if (!isset(self::$ORDERSCREATE)) {
            self::$ORDERSCREATE = new PrincipalResolutionPermissions('orders.create');
        }
        return self::$ORDERSCREATE;
    }
    public static function ORDERSREQUEST(): PrincipalResolutionPermissions
    {
        if (!isset(self::$ORDERSREQUEST)) {
            self::$ORDERSREQUEST = new PrincipalResolutionPermissions('orders.request');
        }
        return self::$ORDERSREQUEST;
    }
    public static function ORDERSAPPROVE(): PrincipalResolutionPermissions
    {
        if (!isset(self::$ORDERSAPPROVE)) {
            self::$ORDERSAPPROVE = new PrincipalResolutionPermissions('orders.approve');
        }
        return self::$ORDERSAPPROVE;
    }
    public static function ORDERSREAD(): PrincipalResolutionPermissions
    {
        if (!isset(self::$ORDERSREAD)) {
            self::$ORDERSREAD = new PrincipalResolutionPermissions('orders.read');
        }
        return self::$ORDERSREAD;
    }
    public static function ADDRESSESMANAGE(): PrincipalResolutionPermissions
    {
        if (!isset(self::$ADDRESSESMANAGE)) {
            self::$ADDRESSESMANAGE = new PrincipalResolutionPermissions('addresses.manage');
        }
        return self::$ADDRESSESMANAGE;
    }
    public static function CONTACTSREAD(): PrincipalResolutionPermissions
    {
        if (!isset(self::$CONTACTSREAD)) {
            self::$CONTACTSREAD = new PrincipalResolutionPermissions('contacts.read');
        }
        return self::$CONTACTSREAD;
    }
    public static function CONTACTSMANAGE(): PrincipalResolutionPermissions
    {
        if (!isset(self::$CONTACTSMANAGE)) {
            self::$CONTACTSMANAGE = new PrincipalResolutionPermissions('contacts.manage');
        }
        return self::$CONTACTSMANAGE;
    }
    public static function ORGANIZATIONMANAGE(): PrincipalResolutionPermissions
    {
        if (!isset(self::$ORGANIZATIONMANAGE)) {
            self::$ORGANIZATIONMANAGE = new PrincipalResolutionPermissions('organization.manage');
        }
        return self::$ORGANIZATIONMANAGE;
    }
}