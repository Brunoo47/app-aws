<?php

namespace App\Domain\UseCases;


class UploadFile
{
    private $storage;

    public function __construct(\StorageInterface $storage)
    {
        $this->storage = $storage;
    }

    public function execute(
        string $name,
        string $content,
        string $path = 'uploads'
    ): string
    {
        return $this->storage->upload($name, $content, $path);
    }
}
