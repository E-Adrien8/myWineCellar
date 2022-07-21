<?php

namespace App\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class RegionType extends AbstractEnumType
{
    final public const BORDEAUX = 'bordeaux';
    final public const SUD_OUEST = 'sud ouest';
    final public const VALLE_DE_LA_LOIRE = 'vallé de la loire';
    final public const LANGUEDOC_ROUSILLON = 'languedoc rousillon';
    final public const VALLEE_DU_RHONE = 'vallée du rhone';
    final public const PROVENCE = 'provence';
    final public const CORSE = 'corse';
    final public const SAVOIE = 'savoie';
    final public const BEAUJOLAIS = 'beaujolais';
    final public const BOURGOGNE = 'bourgogne';
    final public const JURA = 'jura';
    final public const ALSACE = 'alsace';

    protected static array $choices = [
        self::BORDEAUX => 'bordeaux',
        self::SUD_OUEST => 'sud ouest',
        self::VALLE_DE_LA_LOIRE => 'vallé de la loire',
        self::LANGUEDOC_ROUSILLON => 'languedoc rousillon',
        self::VALLEE_DU_RHONE => 'vallée du rhone',
        self::PROVENCE => 'provence',
        self::CORSE => 'corse',
        self::SAVOIE => 'savoie',
        self::BEAUJOLAIS => 'beaujolais',
        self::BOURGOGNE =>'bourgogne',
        self::JURA =>'jura',
        self::ALSACE => 'alsace',
    ];
}