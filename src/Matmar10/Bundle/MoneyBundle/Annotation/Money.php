<?php

namespace Matmar10\Bundle\MoneyBundle\Annotation;

use InvalidArgumentException;
use Matmar10\Bundle\MoneyBundle\Annotation\BaseMappedPropertyAnnotation;
use Matmar10\Bundle\MoneyBundle\Annotation\MappedPropertyAnnotationInterface;

/**
 * Money
 *
 * @bundle matmar10-money-bundle
 *
 * @Annotation
 * @Target({"PROPERTY"})
 */
class Money extends BaseMappedPropertyAnnotation implements MappedPropertyAnnotationInterface
{
    /**
     * {inheritDoc}
     */
    public function getClass()
    {
        return '\\Matmar10\\Money\\Entity\\Money';
    }

    /**
     * {inheritDoc}
     */
    public function getRequiredProperties()
    {
        return array(
            'currencyCode',
            'amountInteger',
        );
    }

    /**
     * {inheritDoc}
     */
    public function getMappedProperties()
    {
        return array(
            'fromCurrencyCode',
            'toCurrencyCode',
            'multiplier',
        );
    }
}
