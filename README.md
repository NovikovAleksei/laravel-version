# laravel-version
Shows laravel version in a project
## Installation

1. Run
   ```php   
   composer require novikovaleksei/laravel-version
   ```     
   
## Usage

2. Run:

```php
$version = app()->make(\NovikovAleksei\LaravelVersion\LaravelVersionFactory::class);
```


```php
$version->getVersion()
```
