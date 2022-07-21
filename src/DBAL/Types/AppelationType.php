<?php

namespace App\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class AppelationType extends AbstractEnumType
{
    final public const GRAVES = 'graves';
    final public const PESSAC = 'pessac';
    final public const MEDOC = 'médoc';
    final public const COTE_DE_BLAYE = 'cote de blaye';

    protected static array $choices = [
        self::GRAVES => 'graves',
        self::PESSAC => 'pessac',
        self::MEDOC => 'médoc',
        self:: COTE_DE_BLAYE => 'cote de blaye',
    ];
}