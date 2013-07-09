Rapid PHP
=========

Slim Framework - http://www.slimframework.com  
RedBeanPHP - http://www.redbeanphp.com

A skeleton project for rapid prototyping using PHP, the Slim framework and the RedBeanPHP ORM.

Installation
------------
    cd my/project/dir
    git clone git://github.com/peterhough/rapid-php.git .
    php composer.phar self-update
    php composer.phar install

Point your VirtualHost at /public  
Setting APPLICATION_ENV to "development" will enable debug mode in Slim.

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
