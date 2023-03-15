<?php
if (!function_exists('is_super_admin')) {
    function is_super_admin()
    {
        return auth('admin')->user() ? auth('admin')->user()->isSuperAdminRole() : false;
    }
}
