<?php

declare(strict_types=1);

namespace SceUrv\ParcelCatSdk\v1\DTO\Api\DownloadLabel;

use SceUrv\ParcelCatSdk\v1\DTO\Api\AbstractResponseDTO;

final class DownloadLabelResponseDTO extends AbstractResponseDTO
{
    private ?string $content = null;
    private ?string $filename = null;

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(?string $filename): void
    {
        $this->filename = $filename;
    }
}
