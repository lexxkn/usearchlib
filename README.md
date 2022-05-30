
# Legeartis.io Unified Search SDK v2.0
*Документация: [doc.legeartis.io](https://doc.legeartis.io)*

## Установка

Выполнить команду

    composer require legeartis/userchlib

## Использование

Необходимо импортировать классы Config и UnifiedSearchService. Например:

```php
use Legeartis\UnifiedSearch\Config;
use Legeartis\UnifiedSearch\UnifiedSearchService;

$service = new UnifiedSearchService(new Config(['login' => $login, 'password' => $password]));
```

Далее можно использовать методы экземпляра UnifiedSearchService для получения данных веб-сервиса:

```php
    print_r($service->getUserInfo());
    print_r($service->search('блок WAUZZZ4M0HD042149'));
```




