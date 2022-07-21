<?php

namespace App\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class ColorType extends AbstractEnumType
{
    final public const ROUGE = 'rouge';
    final public const BLANC = 'blanc';
    final public const ROSE = 'rosé';

    protected static array $choices = [
        self::ROUGE => 'rouge',
        self::BLANC => 'blanc',
        self::ROSE => 'rosé',
    ];
}