<?php

namespace App\Application\Services;

use App\Domain\UseCases\UploadFile;

class FileUploader
{
    private $useCase;

    public function __construct(UploadFile $useCase)
    {
        $this->useCase = $useCase;
    }

    public function upload(string $file)
    {
        $content = file_get_contents($file);

        return $this->useCase->execute(
            basename($file),
            $content
        );
    }
}
