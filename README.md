doctrine-enum
=============

Using enum type for Doctrine2 as string type.

Example
-
Register DBAL extension:
```php
use Shmaltorhbooks\Doctrine\DBAL\Types\EnumType;
// ...

Type::addType('enum', 'DoctrineExtensions\DBAL\Types\EnumType');
//...
// create conn options and doctrine config here
$em = EntityManager::create($connectionOptions, $config);
```
