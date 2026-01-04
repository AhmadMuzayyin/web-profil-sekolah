<?php

namespace App\Helpers;

use App\Models\Setting;

class SettingHelper
{
    /**
     * Get a setting value by key
     */
    public static function get($key, $default = null)
    {
        return Setting::get($key, $default);
    }

    /**
     * Set a setting value
     */
    public static function set($key, $value, $type = 'text')
    {
        return Setting::set($key, $value, $type);
    }

    /**
     * Get school name
     */
    public static function schoolName()
    {
        return static::get('school_name', 'SDN Ketawang Karay');
    }

    /**
     * Get school address
     */
    public static function schoolAddress()
    {
        return static::get('school_address', '');
    }

    /**
     * Get school phone
     */
    public static function schoolPhone()
    {
        return static::get('school_phone', '');
    }

    /**
     * Get school email
     */
    public static function schoolEmail()
    {
        return static::get('school_email', '');
    }

    /**
     * Get school logo
     */
    public static function schoolLogo()
    {
        return static::get('school_logo', '');
    }
}
