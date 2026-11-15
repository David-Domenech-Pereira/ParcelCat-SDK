<?php

namespace SceUrv\ParcelCatSdk\v1\DTO\Entities;

enum OrderStatus: string
{
    case Pending = 'pending';
    case Sent = 'sent';
    case Delivered = 'delivered';
}
