<?php

namespace Legeartis\UnifiedSearch\responseObjects;

class CatalogReference extends Base
{
    /** @var string */
    protected $catalog;

    /** @var string */
    protected $ssd;

    /** @var string */
    protected $vehicleId;

    private const map = [
        'catalog' => 'string',
        'ssd' => 'string',
        'vehicleId' => 'string',
    ];

    function __construct(array $data)
    {
        parent::__construct($data, self::map);
    }

    /**
     * @return string
     */
    public function getCatalog(): string
    {
        return $this->catalog;
    }

    /**
     * @return string
     */
    public function getSsd(): string
    {
        return $this->ssd;
    }

    /**
     * @return string
     */
    public function getVehicleId(): string
    {
        return $this->vehicleId;
    }


}