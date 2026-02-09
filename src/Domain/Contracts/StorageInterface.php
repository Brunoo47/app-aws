<?php

interface StorageInterface
{
    public function upload(
        string $fileName,
        string $content,
        string $path
    ): string;
}