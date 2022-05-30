<?php

namespace Legeartis\UnifiedSearch\responseObjects;

use DateTime;

class Vehicle extends Base
{
    /** @var string */
    protected $brand;

    /** @var CatalogReference */
    protected $catalogReference;

    /** @var DateTime */
    protected $identificationDate;

    /** @var IndexationProgress */
    protected $indexationProgress;

    /** @var string */
    protected $localeCode;

    /** @var string */
    protected $name;

    /** @var LocalizedNameValue[] */
    protected $properties;

    /** @var string */
    protected $vin;

    private const map = [
        'brand' => 'string',
        'catalogReference' => 'CatalogReference',
        'identificationDate' => 'DateTime',
        'indexationProgress' => 'IndexationProgress',
        'localeCode' => 'string',
        'name' => 'string',
        'properties' => 'LocalizedNameValue[]',
        'vin' => 'string',
    ];

    function __construct(array $data)
    {
        parent::__construct($data, self::map);
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @return CatalogReference
     */
    public function getCatalogReference(): ?CatalogReference
    {
        return $this->catalogReference;
    }

    /**
     * @return DateTime
     */
    public function getIdentificationDate(): DateTime
    {
        return $this->identificationDate;
    }

    /**
     * @return IndexationProgress
     */
    public function getIndexationProgress(): ?IndexationProgress
    {
        return $this->indexationProgress;
    }

    /**
     * @return string
     */
    public function getLocaleCode(): string
    {
        return $this->localeCode;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return LocalizedNameValue[]
     */
    public function getProperties(): array
    {
        return $this->properties;
    }

    /**
     * @return string
     */
    public function getVin(): string
    {
        return $this->vin;
    }
}