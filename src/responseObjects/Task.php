<?php

namespace Legeartis\UnifiedSearch\responseObjects;

use DateTime;

class Task extends Base
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $sourceFile;

    /** @var boolean */
    protected $errorsExists;

    /** @var string */
    protected $status;

    /** @var int */
    protected $progressPercent;

    /** @var DateTime */
    protected $startAt;

    /** @var DateTime */
    protected $finishAt;

    /** @var string */
    protected $errorMessage;

    private const map = [
        'errorMessage' => 'string',
        'errorsExists' => 'bool',
        'startAt' => 'DateTime',
        'finishAt' => 'DateTime',
        'id' => 'int',
        'progressPercent' => 'int',
        'sourceFile' => 'string',
        'status' => 'string',
    ];

    function __construct(array $data)
    {
        parent::__construct($data, self::map);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getSourceFile(): ?string
    {
        return $this->sourceFile;
    }

    /**
     * @return bool
     */
    public function isErrorsExists(): bool
    {
        return $this->errorsExists;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getProgressPercent(): ?int
    {
        return $this->progressPercent;
    }

    /**
     * @return DateTime
     */
    public function getStartAt(): DateTime
    {
        return $this->startAt;
    }

    /**
     * @return DateTime
     */
    public function getFinishAt(): DateTime
    {
        return $this->finishAt;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }
}