<?php

namespace Legeartis\UnifiedSearch\responseObjects;

use Legeartis\UnifiedSearch\responseObjects\Base;

class QueryCompletions extends Base
{
    /** @var string[] */
    protected $automakers;

    /** @var string[] */
    protected $brands;

    /** @var string[] */
    protected $completions;

    /** @var string[] */
    protected $queryCompletions;

    /** @var string */
    protected $detectedVin;

    /** @var string[] */
    protected $frames;

    /** @var string[] */
    protected $oems;

    private const map = [
        'automakers' => 'string[]',
        'brands' => 'string[]',
        'completions' => 'string[]',
        'detectedVin' => 'string',
        'frames' => 'string[]',
        'oems' => 'string[]',
    ];

    function __construct(array $data)
    {
        parent::__construct($data, self::map);
    }

    /**
     * @return string[]
     */
    public function getAutomakers(): array
    {
        return $this->automakers;
    }

    /**
     * @return string[]
     */
    public function getBrands(): array
    {
        return $this->brands;
    }

    /**
     * @return string[]
     */
    public function getCompletions(): array
    {
        return $this->completions;
    }

    /**
     * @return string[]
     */
    public function getQueryCompletions(): array
    {
        return $this->queryCompletions;
    }

    /**
     * @return string
     */
    public function getDetectedVin(): string
    {
        return $this->detectedVin;
    }

    /**
     * @return string[]
     */
    public function getFrames(): array
    {
        return $this->frames;
    }

    /**
     * @return string[]
     */
    public function getOems(): array
    {
        return $this->oems;
    }
}