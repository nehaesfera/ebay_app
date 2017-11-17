<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Browse\Types;

/**
 *
 * @property boolean $includedInPrice
 * @property boolean $shippingAndHandlingTaxed
 * @property \DTS\eBaySDK\Browse\Types\TaxJurisdiction $taxJurisdiction
 * @property string $taxPercentage
 * @property \DTS\eBaySDK\Browse\Types\TaxType $taxType
 */
class Taxes extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'includedInPrice' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'includedInPrice'
        ],
        'shippingAndHandlingTaxed' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingAndHandlingTaxed'
        ],
        'taxJurisdiction' => [
            'type' => 'DTS\eBaySDK\Browse\Types\TaxJurisdiction',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'taxJurisdiction'
        ],
        'taxPercentage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'taxPercentage'
        ],
        'taxType' => [
            'type' => 'DTS\eBaySDK\Browse\Types\TaxType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'taxType'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
