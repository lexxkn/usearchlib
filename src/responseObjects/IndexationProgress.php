<?php
namespace Legeartis\UnifiedSearch\responseObjects;

use DateTime;

class IndexationProgress extends Base
{
    /** @var DateTime */
    protected $indexationDate;

    /** @var int */
    protected $indexationPercent;

    /** @var int */
    protected $indexedAutoId;

    /** @var string */
    protected $status;

    private const map = [
        'indexationDate' => 'DateTime',
        'indexationPercent' => 'int',
        'indexedAutoId' => 'int',
        'status' => 'string',
    ];

    function __construct(array $data)
    {
        parent::__construct($data, self::map);
    }

    /**
     * @return DateTime
     */
    public function getIndexationDate(): DateTime
    {
        return $this->indexationDate;
    }

    /**
     * @return int
     */
    public function getIndexationPercent(): int
    {
        return $this->indexationPercent;
    }

    /**
     * @return int
     */
    public function getIndexedAutoId(): int
    {
        return $this->indexedAutoId;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
}