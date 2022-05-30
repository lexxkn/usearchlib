<?php

namespace Legeartis\UnifiedSearch\responseObjects;

class OriginalDetail extends Base
{
    /** @var string */
    protected $brand;

    /** @var int */
    protected $id;

    /** @var string */
    protected $oem;

    /** @var Relation */
    protected $relation;

    private const map = [
        'brand' => 'string',
        'id' => 'int',
        'oem' => 'string',
        'relation' => 'Relation',
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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getOem(): string
    {
        return $this->oem;
    }

    /**
     * @return Relation
     */
    public function getRelation(): Relation
    {
        return $this->relation;
    }
}