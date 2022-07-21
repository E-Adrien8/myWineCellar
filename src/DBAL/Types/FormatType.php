<?php

namespace App\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class FormatType extends AbstractEnumType
{
    final public const BOUTEILLE = 'bouteille';
    final public const MAGNUM = 'magnum';
    final public const JEROBOAM = 'jéroboam';
    final public const REHOBOAM = 'réhoboam';
    final public const MATHUSALEM = 'mathusalem';
    final public const SALMANAZAR = 'salmanazar';
    final public const BALTHAZAR = 'balthazar';

    protected static array $choices = [
        self::BOUTEILLE => 'Bouteille',
        self::MAGNUM => 'Magnum',
        self::JEROBOAM => 'Jéroboam',
        self::REHOBOAM => 'Réhoboam',
        self::MATHUSALEM => 'Mathusalem',
        self::SALMANAZAR => 'Salmanazar',
        self::BALTHAZAR => 'Balthazar',

    ];
}