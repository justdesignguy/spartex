<?php

function getCurrentAdmin(): ?\Illuminate\Contracts\Auth\Authenticatable
{
    if (auth()->guard('admins')->check()) {
        return auth()->guard('admins')->user();
    }
}

if (!function_exists('formatDate')) {
    function formatDate($date, $format = 'd M, Y h:i A'): ?string
    {
        if ($date != null) {
            return Carbon\Carbon::parse($date)->format($format);
        }
        return null;
    }
}

function showProductImage($image_name): string|\Illuminate\Contracts\Routing\UrlGenerator|\Illuminate\Contracts\Foundation\Application
{
    return url(\App\Models\Product::IMG_URL . $image_name);
}
