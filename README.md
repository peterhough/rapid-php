Rapid PHP
=========

Slim Framework - http://www.slimframework.com  
RedBeanPHP - http://www.redbeanphp.com

A skeleton project for rapid PHP prototyping using the Slim framework and the RedBeanPHP ORM.

Installation
------------
    cd my/project/dir
    git clone git://github.com/peterhough/rapid-php.git .
    php composer.phar self-update
    php composer.phar install

Then point your VirtualHost at /public setting APPLICATION_ENV to development will enable debug mode in Slim

    <VirtualHost *:80>
        ServerName localhost
        DocumentRoot /path/to/my/project/dir/public
        SetEnv APPLICATION_ENV "development"
        <Directory /path/to/my/project/dir/public>
            DirectoryIndex index.php
            AllowOverride All
            Order allow,deny
            Allow from all
        </Directory>
    </VirtualHost>