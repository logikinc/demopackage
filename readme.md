[![Build Status](https://travis-ci.org/mikewazovzky/demopackage.svg?branch=master)](https://travis-ci.org/mikewazovzky/demopackage)

[![Coverage Status](https://coveralls.io/repos/github/mikewazovzky/demopackage/badge.svg?branch=master)](https://coveralls.io/github/mikewazovzky/demopackage?branch=master)

<h2 align="center">
	<img src="https://laravel.com/assets/img/components/logo-laravel.svg">
</h2>

### Project: 
mikewazovzky\demopackage
### Description
Laravel Package Template/Demo: Step-by-step Laravel Package creation  
#### Version: 0.0.1
#### Change log:  
0.0.1 initial project scaffolding
#### Documentation
See PHPDoc blocks in the code
#### Installation. 
- pull the package into Laravel project,  
```
	composer require mikewazovzky/demopackage
```
- update composer.json autoload section
```
    "psr-4": {
        "App\\": "app/",
		"Mikewazovzky\\Demopackage\\": "packages/Mikewazovzky/Demopackage/src/"
    }
```

- update config/app.php, add service provider 
```
	\Mikewazovzky\Demopackage\DemopackageServiceProvider::class
``` 
and Facade aliase     
```
	'Demopackage' => Mikewazovzky\Demopackage\DemoFacade::class
```


#### Testing package. 
Pull the package into [new] Laravel project, update composer.json, .env, and  config/app.php files
before_script:
```
	composer self-update
	composer create-project laravel/laravel
	cd ./laravel
	composer config repositories.[GITHUB_NAME] vcs https://github.com/[GITHUB_NAME]/[PACKAGE_NAME].git
	composer require [GITHUB_NAME]/[PACKAGE_NAME] dev-master
	composer update
	cp ./vendor/[GITHUB_NAME]/[PACKAGE_NAME]/tests/config/.env ./
	rm ./config/app.php
	cp ./vendor/[GITHUB_NAME]/[PACKAGE_NAME]/tests/config/app.php ./config
	php artisan vendor:publish
	mysql -e "create database IF NOT EXISTS test;" -uroot
	php artisan migrate
	cd ./vendor/[GITHUB_NAME]/[PACKAGE_NAME]
```
and run project PHPUnit from package folder to test it 
script:
```
	phpunit
```
alternatively run PHPUnit from  package development folder
```
	../../../laravel/5.4.x/vendor/bin/phpunit
```



