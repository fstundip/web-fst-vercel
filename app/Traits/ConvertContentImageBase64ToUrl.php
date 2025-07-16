<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait ConvertContentImageBase64ToUrl
{
    protected function convertContentImageBase64ToUrl($content)
    {
        // Ambil semua tag <img> dengan src base64
        $pattern = '/<img[^>]+src="data:image\/([^;]+);base64,([^"]+)"[^>]*>/i';
        preg_match_all($pattern, $content, $matches, PREG_SET_ORDER);

        foreach ($matches as $match) {
            $extension = $match[1];         // Contoh: png
            $base64Data = $match[2];        // Data base64 gambar
            $fullBase64 = 'data:image/' . $extension . ';base64,' . $base64Data;

            // Simpan gambar ke storage
            $fileName = uniqid() . '.' . $extension;
            Storage::disk('public')->put($fileName, base64_decode($base64Data));

            // Ganti src base64 dengan path URL
            $fileUrl = asset('storage/' . $fileName);
            $newTag = str_replace($fullBase64, $fileUrl, $match[0]);

            // Replace tag lama dengan tag baru
            $content = str_replace($match[0], $newTag, $content);
        }

        return $content;
    }

    public function setAttribute($key, $value)
    {
        if (isset($this->contentName) && $key === $this->contentName && is_string($value)) {
            $value = $this->convertContentImageBase64ToUrl($value);
        }

        return parent::setAttribute($key, $value);
    }
}
