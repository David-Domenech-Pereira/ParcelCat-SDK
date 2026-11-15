<?php

declare(strict_types=1);

namespace SceUrv\ParcelCatSdk\v1\DTO\Api\CreateOrder;

use SceUrv\ParcelCatSdk\v1\DTO\Api\AbstractResponseDTO;
use SceUrv\ParcelCatSdk\v1\DTO\Entities\DeliveryOrderDTO;

final class CreateOrderResponseDTO extends AbstractResponseDTO
{
    private ?DeliveryOrderDTO $deliveryOrder = null;
    private ?string $id = null;

    public function getDeliveryOrder(): ?DeliveryOrderDTO
    {
        return $this->deliveryOrder;
    }

    public function setDeliveryOrder(?DeliveryOrderDTO $deliveryOrder): void
    {
        $this->deliveryOrder = $deliveryOrder;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }
}
