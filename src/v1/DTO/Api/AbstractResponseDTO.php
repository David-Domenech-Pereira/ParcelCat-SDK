<?php

namespace SceUrv\ParcelCatSdk\v1\DTO\Api;

class AbstractResponseDTO
{
    public const ERROR_CODE_SUCCESS = 0;
    public const ERROR_ORDER_NOT_FOUND = -1;
    public const ERROR_INTERNAL_SERVER_ERROR = -99;
    private int $errorCode = self::ERROR_CODE_SUCCESS;
    private ?string $errorMessage = null;

    public function __construct(int $errorCode = self::ERROR_CODE_SUCCESS, ?string $errorMessage = null)
    {
        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMessage;
    }

    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    public function setErrorCode(int $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(?string $errorMessage): void
    {
        $this->errorMessage = $errorMessage;
    }
}