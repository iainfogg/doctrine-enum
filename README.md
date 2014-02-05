doctrine-enum
=============

Using enum type for Doctrine2 as string type.

Example
-
Register DBAL extension:
```php
use \Doctrine\DBAL\Types\Type;
// ...

Type::addType('enum', 'Shmaltorhbooks\Doctrine\DBAL\Types\EnumType');
//...
// create conn options and doctrine config here
$em = EntityManager::create($connectionOptions, $config);
```
