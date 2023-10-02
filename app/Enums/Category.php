<?php

namespace App\Enums;

enum Category: int
{
    case LOGISTICS = 1;
    case TECH = 2;
    case SALES = 3;

    public function label(): string
    {
        return match ($this) {
            static::LOGISTICS => 'Logistic',
            static::TECH => 'Tech',
            static::SALES => 'Sales',
        };
    }

    public static function options(): ArrayObject
    {
        $optionsArray = [ '' => 'Select Status' ] + array_combine(self::typeValue(), self::type());

        return new ArrayObject($optionsArray);
    }

}
