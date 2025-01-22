# Norwich City Council: IT training

## Preparation

1. Log into Github and Gitpod
1. Fork this repository
1. [Create new Gitpod project](https://gitpod.io/new)

## Set up

* `ddev start`
* `ddev composer install`
* `ddev import-db --file=norwich.sql.gz`
* `ddev drush uli --uri=$(gp url 8080)`

## Check for updates

* `composer audit`

## Applying updates

* `ddev composer update drupal/* core-recommended  --with-dependencies`
* `ddev drush updb`
* `ddev composer update drupal/office_hours`

## Testing updates

* `ddev phpunit`

## Version conrol

* `git diff`
* `git add -p`
