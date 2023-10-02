<?php

namespace App\Enums;

enum Category: int
{
    case LOGISTICS = 1;
    case TECH = 2;
    case SALES = 3;
    case HOSPITALITY = 4;
    case OTHERS = 5;

    public function label(): string
    {
        return match ($this) {
            static::LOGISTICS => 'Logistics',
            static::TECH => 'Tech',
            static::SALES => 'Sales',
            static::HOSPITALITY => 'Hospitality',
            static::OTHERS => 'Others',
        };
    }
}
