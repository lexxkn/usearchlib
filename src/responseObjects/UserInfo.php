<?php
namespace Legeartis\UnifiedSearch\responseObjects;

class UserInfo extends Base
{
    /**
     * @var string
     */
    protected $login;

    /**
     * @var bool
     */
    protected $offersUploadAllowed;

    private const map = [
        'login' => 'string',
        'offersUploadAllowed' => 'bool',
    ];

    function __construct(array $data)
    {
        parent::__construct($data, self::map);
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @return bool
     */
    public function isOffersUploadAllowed(): bool
    {
        return $this->offersUploadAllowed;
    }
}