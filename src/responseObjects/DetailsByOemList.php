<?php
namespace Legeartis\UnifiedSearch\responseObjects;

class DetailsByOemList extends Base
{
    /** @var DetailsByOem[] */
    protected $detailsByOem;

    /** @var int */
    protected $indexedAutoId;

    private const map = [
        'detailsByOem' => 'DetailsByOem[]',
        'indexedAutoId' => 'int',
    ];

    function __construct(array $data)
    {
        parent::__construct($data, self::map);
    }

    /**
     * @return DetailsByOem[]
     */
    public function getDetailsByOem(): array
    {
        return $this->detailsByOem;
    }

    /**
     * @return int
     */
    public function getIndexedAutoId(): int
    {
        return $this->indexedAutoId;
    }
}