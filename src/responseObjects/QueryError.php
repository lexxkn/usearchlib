<?php

namespace Legeartis\UnifiedSearch\responseObjects;

use Legeartis\UnifiedSearch\responseObjects\Base;

class QueryError extends Base
{
    /** @var string */
    protected $description;

    /** @var string */
    protected $payload;

    /** @var string */
    protected $type;

    private const map = [
        'description' => 'string',
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
    public function getDescription(): string
    {
        return $this->description;
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