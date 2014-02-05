<?php

namespace Shmaltorhbooks\Doctrine\DBAL\Types;

namespace Hub\BaseBundle\DependencyInjection\Doctrine\Extensions\DBAL;

use Doctrine\DBAL\Platforms\AbstractPlatform,
    Doctrine\DBAL\Types\Type;

class EnumType extends Type
{
    const SUPPORTED_TYPE = 'enum';

    /**
     * {@inheritdoc}
     */
    public function getSqlDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        if (isset($fieldDeclaration['values']) && is_array($fieldDeclaration['values'])) {
            return "ENUM ('" . implode("','", $fieldDeclaration['values']) . "')";
        }
    }

    /**
     * {@inheritdoc}
     * Gets the name of this type.
     *
     * @return string
     */
    public function getName()
    {
        return self::SUPPORTED_TYPE;
    }

    /**
     * {@inheritdoc}
     */
    public function convertToDatabaseValue($value, \Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        return $value;
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return $value;
    }

}
