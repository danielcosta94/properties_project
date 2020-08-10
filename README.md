# Properties Project

### Installation

Linux/MacOS (UNIX)

Install the following packages

```sh
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e5325b19b381bfd88ce90a5ddb7823406b2a38cff6bb704b0acc289a09c8128d4a8ce2bbafcd1fcbdc38666422fe2806') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
apt-get install php
mv composer.phar /usr/local/bin/composer
wget https://get.symfony.com/cli/installer -O - | bash
cd <path_to_project>/properties_project
composer install
npm install
scss public/scss/style.scss public/css/style.css
```

### Usage

To run this application locally on localhost

```sh
symfony serve
```

### Tests
To run tests suite:
```sh
bin/phpunit 
```