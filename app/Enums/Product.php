<?php

namespace App\Enums;

class Product
{
    const CX = 'Copper Express';
    const COT = 'Cordless One Temperature';
    const I = 'Impact';
    const OT = 'One Temperature';
    const PGR = 'Pearl Glide Rose';
    const PSU = 'Power Steam Ultra';
    const SG = 'Steam Genie';
    const QSS = 'Quiet Super Steam';
    const CCS = 'Colour Control Supreme';

    const ALL = [
        self::CX,
        self::COT,
        self::I,
        self::OT,
        self::PGR,
        self::PSU,
        self::SG,
        self::QSS,
        self::CCS
    ];
    public static function toSelect(): array
    {
        $temp = [];

        foreach(self::ALL as $value) {
            $tmp = [];
            $tmp['id'] = $value;
            $tmp['name'] = $value;
            $temp[] = (object) $tmp;
        }

        return $temp;
    }
}
