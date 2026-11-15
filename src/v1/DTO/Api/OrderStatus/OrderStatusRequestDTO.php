<?php

declare(strict_types=1);

namespace SceUrv\ParcelCatSdk\v1\DTO\Api\OrderStatus;
final class OrderStatusRequestDTO
{
    private string $id;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }
}
