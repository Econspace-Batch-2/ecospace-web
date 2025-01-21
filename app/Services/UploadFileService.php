<?php

namespace App\Services;

use Illuminate\Http\Request;

class UploadFileService
{
    public function uploadToS3(Request $request, string $fileInput, string $path, String $fileName = null): string
    {
        // Upload file to aws
        $file = $request->file($fileInput);

        if (!$fileName) {
            $fileName = $file->getClientOriginalName();
        }
        
        $filePath = $file->storeAs("uploads/{$path}", $fileName, 's3');

        $url = env('AWS_URL') . $filePath;

        return $url;
    }
}
