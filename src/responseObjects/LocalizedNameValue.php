<?php

namespace Legeartis\UnifiedSearch\responseObjects;

class LocalizedNameValue extends Base
{
    /** @var string */
    protected $localizedName;

    /** @var string */
    protected $value;

    private const map = [
        'localizedName' => 'string',
        'value' => 'string',
    ];

    function __construct(array $data)
    {
        parent::__construct($data, self::map);
    }

    /**
     * @return string
     */
    public function getLocalizedName(): ?string
    {
        return $this->localizedName;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
}