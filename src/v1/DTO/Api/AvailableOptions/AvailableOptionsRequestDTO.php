<?php

declare(strict_types=1);

namespace SceUrv\ParcelCatSdk\v1\DTO\Api\AvailableOptions;

use SceUrv\ParcelCatSdk\v1\DTO\AvailableOptions\Company;

final class AvailableOptionsRequestDTO
{
    private float $weight;
    private float $length;
    private float $width;
    private float $height;
    private float $pickupLatitude;
    private float $pickupLongitude;
    private float $deliveryLatitude;
    private float $deliveryLongitude;

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    public function getLength(): float
    {
        return $this->length;
    }

    public function setLength(float $length): void
    {
        $this->length = $length;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    public function getPickupLatitude(): float
    {
        return $this->pickupLatitude;
    }

    public function setPickupLatitude(float $pickupLatitude): void
    {
        $this->pickupLatitude = $pickupLatitude;
    }

    public function getPickupLongitude(): float
    {
        return $this->pickupLongitude;
    }

    public function setPickupLongitude(float $pickupLongitude): void
    {
        $this->pickupLongitude = $pickupLongitude;
    }

    public function getDeliveryLatitude(): float
    {
        return $this->deliveryLatitude;
    }

    public function setDeliveryLatitude(float $deliveryLatitude): void
    {
        $this->deliveryLatitude = $deliveryLatitude;
    }

    public function getDeliveryLongitude(): float
    {
        return $this->deliveryLongitude;
    }

    public function setDeliveryLongitude(float $deliveryLongitude): void
    {
        $this->deliveryLongitude = $deliveryLongitude;
    }
}
