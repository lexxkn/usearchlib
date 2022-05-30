<?php
namespace Legeartis\UnifiedSearch\responseObjects;


class TaskList extends ListBase
{
    /** @var Task[] */
    protected $data;

    private const map = [
        'data' => 'Task[]',
    ];

    function __construct(array $data)
    {
        parent::__construct($data, self::map);
    }

    /**
     * @return Task[]
     */
    public function getData(): array
    {
        return $this->data;
    }
}