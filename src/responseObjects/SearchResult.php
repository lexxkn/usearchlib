<?php

namespace Legeartis\UnifiedSearch\responseObjects;

class SearchResult extends ListBase
{
    /** @var bool */
    protected $contextsMatched;

    /** @var DetailInfo[] */
    protected $details;

    /** @var string[] */
    protected $detectedBrands;

    /** @var string[] */
    protected $detectedOems;

    /** @var VehicleContext */
    protected $detectedVehicleContext;

    /** @var VehicleContext */
    protected $searchVehicleContext;

    /** @var QueryError */
    protected $errors;

    /** @var string[] */
    protected $suggestedQueries;

    /** @var QuerySuggestion[] */
    protected $suggestions;

    /** @var string[] */
    protected $undetectedTerms;

    private const map = [
        'contextsMatched' => 'bool',
        'details' => 'DetailInfo[]',
        'detectedBrands' => 'string[]',
        'detectedOems' => 'string[]',
        'detectedVehicleContext' => 'VehicleContext',
        'searchVehicleContext' => 'VehicleContext',
        'errors' => 'QueryError',
        'suggestedQueries' => 'string[]',
        'suggestions' => 'QuerySuggestion[]',
        'undetectedTerms' => 'string[]',
    ];

    function __construct(array $data)
    {
        parent::__construct($data, self::map);
    }

    /**
     * @return bool
     */
    public function isContextsMatched(): bool
    {
        return $this->contextsMatched;
    }

    /**
     * @return DetailInfo[]
     */
    public function getDetails(): array
    {
        return $this->details;
    }

    /**
     * @return string[]
     */
    public function getDetectedBrands(): array
    {
        return $this->detectedBrands;
    }

    /**
     * @return string[]
     */
    public function getDetectedOems(): array
    {
        return $this->detectedOems;
    }

    /**
     * @return VehicleContext
     */
    public function getDetectedVehicleContext(): ?VehicleContext
    {
        return $this->detectedVehicleContext;
    }

    /**
     * @return VehicleContext
     */
    public function getSearchVehicleContext(): ?VehicleContext
    {
        return $this->searchVehicleContext;
    }

    /**
     * @return QueryError
     */
    public function getErrors(): QueryError
    {
        return $this->errors;
    }

    /**
     * @return string[]
     */
    public function getSuggestedQueries(): array
    {
        return $this->suggestedQueries;
    }

    /**
     * @return QuerySuggestion[]
     */
    public function getSuggestions(): array
    {
        return $this->suggestions;
    }

    /**
     * @return string[]
     */
    public function getUndetectedTerms(): array
    {
        return $this->undetectedTerms;
    }


}