<?php

namespace Legeartis\UnifiedSearch\responseObjects;

class DetailsByOem extends Base
{
    /** @var DetailInfo[] */
    protected $details;

    /** @var string */
    protected $oem;

    private const map = [
        'details' => 'DetailInfo[]',
        'oem' => 'string',
    ];

    function __construct(array $data)
    {
        parent::__construct($data, self::map);
    }

    /**
     * @return DetailInfo[]
     */
    public function getDetails(): array
    {
        return $this->details;
    }

    /**
     * @return string
     */
    public function getOem(): string
    {
        return $this->oem;
    }
}