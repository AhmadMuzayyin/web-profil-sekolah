<?php

namespace App\Helpers;

class SeoHelper
{
    /**
     * Generate meta title
     */
    public static function metaTitle($title, $includeSiteName = true)
    {
        if ($includeSiteName) {
            $siteName = SettingHelper::schoolName();
            return $title . ' - ' . $siteName;
        }
        return $title;
    }

    /**
     * Generate meta description
     */
    public static function metaDescription($description = null)
    {
        return $description ?? SettingHelper::get('meta_description', 'SDN Ketawang Karay - Sekolah Dasar Negeri berkualitas');
    }

    /**
     * Generate meta keywords
     */
    public static function metaKeywords($keywords = null)
    {
        return $keywords ?? SettingHelper::get('meta_keywords', 'SDN Ketawang Karay, Sekolah Dasar, Pendidikan');
    }

    /**
     * Generate canonical URL
     */
    public static function canonicalUrl($url = null)
    {
        return $url ?? request()->url();
    }

    /**
     * Generate Open Graph meta tags array
     */
    public static function ogTags($title, $description, $image = null, $type = 'website')
    {
        return [
            'og:title' => static::metaTitle($title, false),
            'og:description' => static::metaDescription($description),
            'og:type' => $type,
            'og:url' => static::canonicalUrl(),
            'og:image' => $image ?? asset('images/default-og-image.jpg'),
            'og:site_name' => SettingHelper::schoolName(),
        ];
    }
}
