<?php

namespace Legeartis\UnifiedSearch\responseObjects;

use Legeartis\UnifiedSearch\responseObjects\Base;

class Relation extends Base
{
    /** @var string */
    protected $direction;

    /** @var string */
    protected $type;

    private const map = [
        'direction' => 'string',
        'type' => 'int',
    ];

    function __construct(array $data)
    {
        parent::__construct($data, self::map);
    }

    /**
     * @return string
     */
    public function getDirection(): string
    {
        return $this->direction;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}