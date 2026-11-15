<?php

declare(strict_types=1);

namespace SceUrv\ParcelCatSdk\v1\DTO\Api\OrderStatus;

use SceUrv\ParcelCatSdk\v1\DTO\Api\AbstractResponseDTO;
use SceUrv\ParcelCatSdk\v1\DTO\Entities\DeliveryOrderDTO;

final class OrderStatusResponseDTO extends AbstractResponseDTO
{
    private ?string $id = null;
    private ?DeliveryOrderDTO $deliveryOrder = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function getDeliveryOrder(): ?DeliveryOrderDTO
    {
        return $this->deliveryOrder;
    }

    public function setDeliveryOrder(?DeliveryOrderDTO $deliveryOrder): void
    {
        $this->deliveryOrder = $deliveryOrder;
    }
}
