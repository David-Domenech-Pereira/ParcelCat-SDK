<?php

declare(strict_types=1);

namespace SceUrv\ParcelCatSdk\v1\DTO\Api\CreateOrder;
use SceUrv\ParcelCatSdk\v1\DTO\CreateOrder\Company;

final class CreateOrderRequestDTO
{
    private ?string $token = null;
    private ?int $type = null;
    private string $pickupAddress;
    private string $pickupPostalCode;
    private string $pickupCity;
    private float $pickupLatitude;
    private float $pickupLongitude;
    private string $deliveryAddress;
    private string $deliveryPostalCode;
    private string $deliveryCity;
    private float $deliveryLatitude;
    private float $deliveryLongitude;
    private float $weight;
    private float $length;
    private float $width;
    private float $height;

    public function getCompany(): Company
    {
        return $this->company;
    }

    public function setCompany(Company $company): void
    {
        $this->company = $company;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): void
    {
        $this->token = $token;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): void
    {
        $this->type = $type;
    }

    public function getPickupAddress(): string
    {
        return $this->pickupAddress;
    }

    public function setPickupAddress(string $value): void
    {
        $this->pickupAddress = $value;
    }

    public function getPickupPostalCode(): string
    {
        return $this->pickupPostalCode;
    }

    public function setPickupPostalCode(string $value): void
    {
        $this->pickupPostalCode = $value;
    }

    public function getPickupCity(): string
    {
        return $this->pickupCity;
    }

    public function setPickupCity(string $value): void
    {
        $this->pickupCity = $value;
    }

    public function getPickupLatitude(): float
    {
        return $this->pickupLatitude;
    }

    public function setPickupLatitude(float $value): void
    {
        $this->pickupLatitude = $value;
    }

    public function getPickupLongitude(): float
    {
        return $this->pickupLongitude;
    }

    public function setPickupLongitude(float $value): void
    {
        $this->pickupLongitude = $value;
    }

    public function getDeliveryAddress(): string
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(string $value): void
    {
        $this->deliveryAddress = $value;
    }

    public function getDeliveryPostalCode(): string
    {
        return $this->deliveryPostalCode;
    }

    public function setDeliveryPostalCode(string $value): void
    {
        $this->deliveryPostalCode = $value;
    }

    public function getDeliveryCity(): string
    {
        return $this->deliveryCity;
    }

    public function setDeliveryCity(string $value): void
    {
        $this->deliveryCity = $value;
    }

    public function getDeliveryLatitude(): float
    {
        return $this->deliveryLatitude;
    }

    public function setDeliveryLatitude(float $value): void
    {
        $this->deliveryLatitude = $value;
    }

    public function getDeliveryLongitude(): float
    {
        return $this->deliveryLongitude;
    }

    public function setDeliveryLongitude(float $value): void
    {
        $this->deliveryLongitude = $value;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function setWeight(float $value): void
    {
        $this->weight = $value;
    }

    public function getLength(): float
    {
        return $this->length;
    }

    public function setLength(float $value): void
    {
        $this->length = $value;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function setWidth(float $value): void
    {
        $this->width = $value;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function setHeight(float $value): void
    {
        $this->height = $value;
    }
}
