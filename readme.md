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
`composer require mikewazovzky/demopackage`
- update composer.json autoload section
- update config/app.php, add service provider 
`\Mikewazovzky\Demopackage\DemopackageServiceProvider::class` 
and Facade aliase     
`'Demopackage' => Mikewazovzky\Demopackage\DemoFacade::class`


#### Testing. 
Update laravel 
- composer.json, 
- .env, 
- config/app.php 
```
composer require mikewazovzky/demopackage
composer install
cp ./vendor/[GITHUB_NAME]/[PACKAGE_NAME]/tests/config/composer.json ./
composer dump-autoload
cp ./vendor/[GITHUB_NAME]/[PACKAGE_NAME]/tests/config/.env ./
cp ./vendor/[GITHUB_NAME]/[PACKAGE_NAME]/tests/config/app.php ./config
```
and run project PHPUnit from package folder to test it 
```
../../../laravel/5.4.x/vendor/bin/phpunit
```



