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

function uploadFile($file, $path, $exist_file = null): string
{
    $uploadPath = storage_path('app/public/' . $path . '/');
    if (isset($exist_file)) {
        $imagePath = $uploadPath . $exist_file;
        @unlink($imagePath);
    }
    $extension = $file->getClientOriginalExtension();
    $fileName = rand(11111, 99999) . '.' . $extension;
    $file->move($uploadPath, $fileName);
    return $fileName;
}

function getFileUrl($file_name, $path): string|\Illuminate\Contracts\Routing\UrlGenerator|\Illuminate\Contracts\Foundation\Application
{
    return url('storage/' . $path . '/' . $file_name);
}

function monthArray(): array
{
    return array(
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July ',
        'August',
        'September',
        'October',
        'November',
        'December',
    );
}
