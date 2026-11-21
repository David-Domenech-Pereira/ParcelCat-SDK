<?php

declare(strict_types=1);

namespace SceUrv\ParcelCatSdk\v1\DTO\Entities;

class DeliveryOrderDTO
{
    private ?int $id = null;
    private ?float $price = null;
    private string $pickupAddress;
    private string $pickupPostalCode;
    private string $pickupCity;
    private string $pickupLatitude;
    private string $pickupLongitude;
    private string $deliveryAddress;
    private string $deliveryPostalCode;
    private string $deliveryCity;
    private string $deliveryLatitude;
    private string $deliveryLongitude;
    private string $weight;
    private string $length;
    private string $width;
    private string $height;
    private ?\DateTimeImmutable $cancelledAt = null;
    private ?bool $cancellationWasFree = null;
    private ?OrderStatus $status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): void
    {
        $this->price = $price;
    }

    public function getPickupAddress(): string
    {
        return $this->pickupAddress;
    }

    public function setPickupAddress(string $pickupAddress): void
    {
        $this->pickupAddress = $pickupAddress;
    }

    public function getPickupPostalCode(): string
    {
        return $this->pickupPostalCode;
    }

    public function setPickupPostalCode(string $pickupPostalCode): void
    {
        $this->pickupPostalCode = $pickupPostalCode;
    }

    public function getPickupCity(): string
    {
        return $this->pickupCity;
    }

    public function setPickupCity(string $pickupCity): void
    {
        $this->pickupCity = $pickupCity;
    }

    public function getPickupLatitude(): string
    {
        return $this->pickupLatitude;
    }

    public function setPickupLatitude(string $pickupLatitude): void
    {
        $this->pickupLatitude = $pickupLatitude;
    }

    public function getPickupLongitude(): string
    {
        return $this->pickupLongitude;
    }

    public function setPickupLongitude(string $pickupLongitude): void
    {
        $this->pickupLongitude = $pickupLongitude;
    }

    public function getDeliveryAddress(): string
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(string $deliveryAddress): void
    {
        $this->deliveryAddress = $deliveryAddress;
    }

    public function getDeliveryPostalCode(): string
    {
        return $this->deliveryPostalCode;
    }

    public function setDeliveryPostalCode(string $deliveryPostalCode): void
    {
        $this->deliveryPostalCode = $deliveryPostalCode;
    }

    public function getDeliveryCity(): string
    {
        return $this->deliveryCity;
    }

    public function setDeliveryCity(string $deliveryCity): void
    {
        $this->deliveryCity = $deliveryCity;
    }

    public function getDeliveryLatitude(): string
    {
        return $this->deliveryLatitude;
    }

    public function setDeliveryLatitude(string $deliveryLatitude): void
    {
        $this->deliveryLatitude = $deliveryLatitude;
    }

    public function getDeliveryLongitude(): string
    {
        return $this->deliveryLongitude;
    }

    public function setDeliveryLongitude(string $deliveryLongitude): void
    {
        $this->deliveryLongitude = $deliveryLongitude;
    }

    public function getWeight(): string
    {
        return $this->weight;
    }

    public function setWeight(string $weight): void
    {
        $this->weight = $weight;
    }

    public function getLength(): string
    {
        return $this->length;
    }

    public function setLength(string $length): void
    {
        $this->length = $length;
    }

    public function getWidth(): string
    {
        return $this->width;
    }

    public function setWidth(string $width): void
    {
        $this->width = $width;
    }

    public function getHeight(): string
    {
        return $this->height;
    }

    public function setHeight(string $height): void
    {
        $this->height = $height;
    }

    public function getCancelledAt(): ?\DateTimeImmutable
    {
        return $this->cancelledAt;
    }

    public function setCancelledAt(?\DateTimeImmutable $cancelledAt): void
    {
        $this->cancelledAt = $cancelledAt;
    }

    public function getCancellationWasFree(): ?bool
    {
        return $this->cancellationWasFree;
    }

    public function setCancellationWasFree(?bool $cancellationWasFree): void
    {
        $this->cancellationWasFree = $cancellationWasFree;
    }

    public function getStatus(): ?OrderStatus
    {
        return $this->status;
    }

    public function setStatus(?OrderStatus $status): void
    {
        $this->status = $status;
    }
}
