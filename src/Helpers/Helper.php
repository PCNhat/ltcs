<?php

namespace App\Helpers;

trait Helper
{
    public static function productDescription($product, $productDetailId)
    {
        $description = $product->description->where('product_detail_id', $productDetailId)->first();
        if (!empty($description)) {
            return $description->description;
        }

        return '';
    }

    /**
     * is hide role action
     * @param $admin
     * @param $user
     * @return bool
     */
    public static function isHideRole($admin, $user): bool
    {
        if ($user->hasRole(PermissionConstant::ROLE_ADMIN)) {
            if ($admin->hasPermissionTo(PermissionConstant::PERMISSION_DELETE_ADMIN)) {
                return true;
            }
            return false;
        }

        if ($user->hasRole(PermissionConstant::ROLE_MEMBER)) {
            if ($admin->hasPermissionTo(PermissionConstant::PERMISSION_DELETE_MOD)) {
                return true;
            }
            return false;
        }

        if ($user->hasRole(PermissionConstant::ROLE_MOD)) {
            if ($admin->hasPermissionTo(PermissionConstant::PERMISSION_DELETE_MEMBER)) {
                return true;
            }
            return false;
        }

        return false;
    }
}
