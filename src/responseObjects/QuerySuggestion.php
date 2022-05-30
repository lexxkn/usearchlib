<?php

namespace Legeartis\UnifiedSearch\responseObjects;

use Legeartis\UnifiedSearch\responseObjects\Base;

class QuerySuggestion extends Base
{
    /** @var string */
    protected $level;

    /** @var string */
    protected $payload;

    /** @var string */
    protected $type;

    private const map = [
        'level' => 'string',
        'payload' => 'string',
        'type' => 'string',
    ];

    function __construct(array $data)
    {
        parent::__construct($data, self::map);
    }

    /**
     * @return string
     */
    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * @return string
     */
    public function getPayload(): string
    {
        return $this->payload;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}