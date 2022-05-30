<?php

namespace Legeartis\UnifiedSearch\responseObjects;

use Legeartis\UnifiedSearch\responseObjects\Base;

class DetailInfo extends Base
{
    /** @var string[] */
    protected $brandAliases;

    /** @var int */
    protected $detailId;

    /** @var string[][] */
    protected $highlights;

    /** @var string[][] */
    protected $names;

    /** @var string */
    protected $oem;

    /** @var string[][] */
    protected $offers;

    /** @var string */
    protected $primaryBrand;

    /** @var string */
    protected $primaryName;

    /** @var float */
    protected $score;

    /** @var string[] */
    protected $tags;

    /** @var string[] */
    protected $vendorCodes;

    private const map = [
        'brandAliases' => 'string[]',
        'detailId' => 'int',
        'highlights' => 'string[][]',
        'names' => 'string[][]',
        'oem' => 'string',
        'offers' => 'string[][]',
        'primaryBrand' => 'string',
        'primaryName' => 'string',
        'score' => 'float',
        'tags' => 'array',
        'vendorCodes' => 'array',
    ];

    function __construct(array $data)
    {
        parent::__construct($data, self::map);
    }

    /**
     * @return string[]
     */
    public function getBrandAliases(): array
    {
        return $this->brandAliases;
    }

    /**
     * @return int
     */
    public function getDetailId(): int
    {
        return $this->detailId;
    }

    /**
     * @return string[][]
     */
    public function getHighlights(): array
    {
        return $this->highlights;
    }

    /**
     * @return string[][]
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @return string
     */
    public function getOem(): string
    {
        return $this->oem;
    }

    /**
     * @return string[][]
     */
    public function getOffers(): array
    {
        return $this->offers;
    }

    /**
     * @return string
     */
    public function getPrimaryBrand(): string
    {
        return $this->primaryBrand;
    }

    /**
     * @return string
     */
    public function getPrimaryName(): string
    {
        return $this->primaryName;
    }

    /**
     * @return float
     */
    public function getScore(): float
    {
        return $this->score;
    }

    /**
     * @return string[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @return string[]
     */
    public function getVendorCodes(): array
    {
        return $this->vendorCodes;
    }
}