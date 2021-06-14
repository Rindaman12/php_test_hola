# Changelog

This repository is for a PHP Developer Test.

## Tecnologies & Methodologies Used.

- Language: PHP 7.3.
- Webserver: PHP Native Web Server in Symfony.
- Package Manager: Composer.
- Made in PHP Framework: Symfony 4.4.
- Persistence Layer: Mysql + Doctrine + Doctrine Migrations
- Coding style: PSR-2.

## SET UP.

- Run in your terminal.

```
composer install
```

- Modify the "DATABASE_URL" in the .env located in the folder directory using you own database credentials.

- After doing the next steps and if everything is correct, run in your terminal:.

```
bin/console doctrine:database:create

```

- Make a migration file, for doing this run in your terminal.

```
bin/console make:migration
bin/console doctrine:migrations:migrate

```

- If the later step didn't work, run in your terminal.

```
php bin/console doctrine:schema:update --force

```

- Now load the fixtures.

```
bin/console doctrine:fixtures:load

```

- Now you can just start the webserver by running in your terminal.

```
symfony server:start

```
## Routes

- RESTFUL API CRUD is located in /api.

- Page 1 is located in /page/1.

- Page 2 is located in /page/2.

## Testing

For avoiding problems with the Symfony 4.4 Framework, when creating or updating the roles (ADMIN, PAGE_1 or PAGE_2) must have the "ROLE_" before the role in question, example "ROLE_PAGE_1"
