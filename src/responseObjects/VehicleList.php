<?php
namespace Legeartis\UnifiedSearch\responseObjects;
use Legeartis\UnifiedSearch\responseObjects\Base;
use Legeartis\UnifiedSearch\responseObjects\Vehicle;

class VehicleList extends Base
{
    /**
     * @var Vehicle[]
     */
    protected $vehicles;

    private const map = [
        'vehicles' => 'Vehicle[]',
    ];

    function __construct(array $data)
    {
        parent::__construct($data, self::map);
    }

    /**
     * @return Vehicle[]
     */
    public function getVehicles(): array
    {
        return $this->vehicles;
    }
}