<?php

declare(strict_types=1);

namespace SceUrv\ParcelCatSdk\v1\DTO\Api\OrderLabel;

use SceUrv\ParcelCatSdk\v1\DTO\Api\AbstractResponseDTO;

final class OrderLabelResponseDTO extends AbstractResponseDTO
{
    private ?string $link = null;

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): void
    {
        $this->link = $link;
    }
}
