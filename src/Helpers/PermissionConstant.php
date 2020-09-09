<?php

namespace App\Helpers;

interface PermissionConstant
{
//    Roles
    public const ROLE_ADMIN = 'ADMIN';
    public const ROLE_MOD = 'MOD';
    public const ROLE_MEMBER = 'MEMBER';

//    Permission
    public const PERMISSION_CREATE_MOD = 'mod.create';
    public const PERMISSION_UPDATE_MOD = 'mod.update';
    public const PERMISSION_DELETE_MOD = 'mod.delete';

    public const PERMISSION_UPDATE_MEMBER = 'member.update';
    public const PERMISSION_DELETE_MEMBER = 'member.delete';

    public const PERMISSION_CREATE_POST = 'post.create';
    public const PERMISSION_UPDATE_POST = 'post.update';
    public const PERMISSION_DELETE_POST = 'post.delete';

    public const PERMISSION_CREATE_PRODUCT = 'product.create';
    public const PERMISSION_UPDATE_PRODUCT = 'product.update';
    public const PERMISSION_DELETE_PRODUCT = 'product.delete';

    public const PERMISSION_VIEW_ADMIN_PAGE = 'admin_page.view';
}
