<?php

declare(strict_types=1);

namespace SceUrv\ParcelCatSdk\v1\DTO\Api\AvailableOptions;

use SceUrv\ParcelCatSdk\v1\DTO\Api\AbstractResponseDTO;
use SceUrv\ParcelCatSdk\v1\DTO\Entities\AvailableOptionDTO;

final class AvailableOptionsResponseDTO extends AbstractResponseDTO
{
    /** @var AvailableOptionDTO[] */
    private array $options = [];

    /** @return AvailableOptionDTO[] */
    public function getOptions(): array
    {
        return $this->options;
    }

    /** @param AvailableOptionDTO[] $options */
    public function setOptions(array $options): void
    {
        $this->options = $options;
    }
}
