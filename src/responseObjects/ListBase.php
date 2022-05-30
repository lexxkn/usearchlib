<?php
namespace Legeartis\UnifiedSearch\responseObjects;

class ListBase extends Base
{
    /** @var int */
    protected $total = 0;

    /** @var int */
    protected $limit = 0;

    /** @var int */
    protected $skip = 0;

    public function __construct(array $data, array $fields)
    {
        parent::__construct($data, array_merge($fields, [
            'total' => 'int',
            'limit' => 'int',
            'skip' => 'int',
        ]));
    }

    /**
     * @return int
     */
    public function getSkip(): int
    {
        return $this->skip;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }
}