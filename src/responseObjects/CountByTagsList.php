<?php

namespace Legeartis\UnifiedSearch\responseObjects;

use Legeartis\UnifiedSearch\responseObjects\Base;
use Legeartis\UnifiedSearch\responseObjects\CountByTag;

class CountByTagsList extends Base
{
    /** @var int */
    protected $indexedAutoId;

    /** @var CountByTag[] */
    protected $counts;

    private const map = [
        'indexedAutoId' => 'int',
        'counts' => 'CountByTag',
    ];

    function __construct(array $data)
    {
        parent::__construct($data, self::map);
    }

    /**
     * @return int
     */
    public function getIndexedAutoId(): int
    {
        return $this->indexedAutoId;
    }

    /**
     * @return CountByTag[]
     */
    public function getCounts(): array
    {
        return $this->counts;
    }
}