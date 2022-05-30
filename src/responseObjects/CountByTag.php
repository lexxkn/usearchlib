<?php

namespace Legeartis\UnifiedSearch\responseObjects;

use Legeartis\UnifiedSearch\responseObjects\Base;

class CountByTag extends Base
{
    /** @var int */
    protected $count;

    /** @var string */
    protected $tag;

    private const map = [
        'count' => 'int',
        'tag' => 'string',
    ];

    function __construct(array $data)
    {
        parent::__construct($data, self::map);
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }
}