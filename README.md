# JCL COMMERCE (ERP with POS)

An ERP with POS (panel of sell) system created in PHP language with MySQL database.

This project was developed utilizing external libraries to facilitate development work, including Bootstrap.

## Installation Method

- Download the project to your machine.
- Navigate to the "./Database" folder within the project.
- Create the database for the application by executing the "./test_database.sql" file in a program of your choice.
- open file config.php in "./app/config.php"
- define MYSQL credentials for:

```php
define("MYSQL_HOST", "localhost");
define("MYSQL_DATABASE", "db_jlccomercio");
define("MYSQL_USERNAME", "root");
define("MYSQL_PASSWORD", "");
```
- Run the project from the "./public" folder.
- Proceed with the login using the following test credentials:

### Credentials Table
| Username | Password |
|----------|----------|
| admin    | 123      |
| user1    | 321      |
| user2    | 132      |

