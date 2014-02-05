doctrine-enum
=============

Using enum type for Doctrine2 as string type.

Example
-
Register DBAL extension with plain PHP:
```php
use \Doctrine\DBAL\Types\Type;
// ...

Type::addType('enum', 'Shmaltorhbooks\Doctrine\DBAL\Types\EnumType');
//...
// create conn options and doctrine config here
$em = EntityManager::create($connectionOptions, $config);
```

Register DBAL extension with symfony 2 framework:

your_app_folder/app/config/config.yml
```yml
doctrine:
  dbal:
    types:
      enum:
        class: Shmaltorhbooks\Doctrine\DBAL\Types\EnumType
        commented: false
  # ...
    connections:
      connection_name:
        # driver, port, pass, etc
        mapping_types:
          enum: string
          set: string
          varbinary: string
```