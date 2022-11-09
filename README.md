# laravel-version
Shows laravel version in a project

## Requirement

1. PHP >= 8.0
2. laravel/framework >= 9.0
3. novikovaleksei/laravel-version >=1.0


## Installation

1. Run
   ```php   
   composer require novikovaleksei/laravel-version
   ```     
   
## Usage

2. Add:

app.php add to providers
```php
NovikovAleksei\LaravelVersion\VersionServiceProvider::class
```

3. Run:

```php
$versionLaravel->getVersion()
```
