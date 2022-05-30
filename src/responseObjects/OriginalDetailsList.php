<?php

namespace Legeartis\UnifiedSearch\responseObjects;

use Legeartis\UnifiedSearch\responseObjects\Base;
use Legeartis\UnifiedSearch\responseObjects\OriginalDetail;

class OriginalDetailsList extends Base
{
    /** @var int */
    protected $indexedAutoId;

    /** @var OriginalDetail[] */
    protected $originalDetails;

    private const map = [
        'indexedAutoId' => 'int',
        'originalDetails' => 'OriginalDetail[]',
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
     * @return OriginalDetail[]
     */
    public function getOriginalDetails(): array
    {
        return $this->originalDetails;
    }


}