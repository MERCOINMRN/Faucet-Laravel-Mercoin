<p align="center"><img src="https://explorer.mercoin.org/images/logo.png"></p>

<p align="center">

## Acerca de Laravel

Laravel es un framework de aplicaciones web con una sintaxis expresiva y elegante. Creemos que el desarrollo debe ser una experiencia agradable y creativa para ser verdaderamente satisfactorio. Laravel intenta aliviar el dolor del desarrollo al facilitar las tareas comunes que se utilizan en la mayoría de los proyectos web, como:

- [Motor de enrutamiento simple y rápido](https://laravel.com/docs/routing).
- [Potente contenedor de inyección de dependencia](https://laravel.com/docs/container).
- Múltiples back-ends para [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expresivo, intuitivo [database ORM](https://laravel.com/docs/eloquent).
- Agnóstico de la base de datos [schema migrations](https://laravel.com/docs/migrations).
- [Procesamiento robusto del trabajo en segundo plano](https://laravel.com/docs/queues).
- [Transmisión de eventos en tiempo real](https://laravel.com/docs/broadcasting).

Laravel es accesible, pero potente, y proporciona herramientas necesarias para aplicaciones grandes y robustas.

## Instalación Faucet Mercoin Local

1. instalar Xampp o Wamp e iniciar los servicios de Apache y mysql (https://youtube.com/watch?v=AwGViHnNQw4)

2. acceder a la consola CMD

3. cd / 
   cd xampp
   cd htdocs

4 . git clone https://github.com/MERCOINMRN/Faucet-Laravel-Mercoin

5. php artisan serve

ya deberiais poder acceder a vuestra faucet MRN a traves de la url: http://127.0.0.1:8000/

## Instalación Faucet Mercoin Ubuntu 16.04 Live 

1. primero necesitaremos adquirir un servidor en https://www.vultr.com/?ref=7416047 podemos adquirirlo por 5$ al mes 

2. Creamos un nuevo servidor con Ubuntu 16.04 

Cómo instalar en Linux: Apache MariaDB y PHP (LAMP) 

###Como instalar Apache
Entraremos a nuestro servidor por SSH y ejecutaremos el siguiente comando:
```
apt-get install apache2
```
Podemos comprobar que Apache esté funcionado ejecutando:
```
service apache2 status
```
Deberíamos ver algo tipo:

● apache2.service – LSB: Apache2 web server
Loaded: loaded (/etc/init.d/apache2; bad; vendor preset: enabled)
Drop-In: /lib/systemd/system/apache2.service.d
└─apache2-systemd.conf
Active: active (running) since Fri xxxx-xx-xx xx:xx:xx CEST; 17s ago

Una vez instalado apache si entramos a la IP de nuestro servidor desde una navegador deberíamos ver la página demo de Apache 

###Como instalar MariaDB
Para instalar MariaDB ejecutaremos el siguiente comando:
```
apt-get install mariadb-server mariadb-client
```
Podemos comprobar que MariaDB esté funcionado ejecutando:
```
service mysql status
```
Deberíamos ver algo tipo:

● mysql.service – LSB: Start and stop the mysql database server daemon
Loaded: loaded (/etc/init.d/mysql; bad; vendor preset: enabled)
Active: active (running) Fri xxxx-xx-xx xx:xx:xx CEST; 17s ago

Ahora procederemos a configurar MariaDB ejecutando el código:
```
/usr/bin/mysql_secure_installation
```
En el primer paso nos preguntará por la contraseña de “root” para MariaDB, pulsaremos la tecla enter ya que no hay contraseña definida.
El siguiente paso nos preguntará si queremos asignar una contraseña para el usuario “root”. Es recomendable usar contraseña.
El siguiente paso nos preguntará si queremos eliminar usuario anónimo, aquí indicaremos que Sí queremos borrar los datos.
El siguiente paso nos preguntará si queremos desactivar que el usuario “root” se conecte remotamente, aquí indicaremos que Sí queremos desactivar acceso remoto para usuario “root”.
El siguiente paso nos preguntará si queremos eliminar la base de datos “test”, aquí indicaremos que Sí queremos borrar las base de datos “test”.
El siguiente paso nos preguntará si queremos recargar privilegios, aquí indicaremos que Sí.

###Como instalar PHP7
Para instalar PHP ejutaremos estos comandos:
```
apt install php php-cli php-mysql libapache2-mod-php
service apache2 restart
```

###Instalación de Composer y Faucet Mercoin en Ubuntu 16.04

Lo primero que haremos es actualizar los repositorios y instalar paquetes necesarios para instalar Composer correctamente:
```
apt update && apt upgrade
```
Instalamos las dependencias necesarias:
```
apt install php-mcrypt php-gd php-mbstring hhvm phpunit
```
###Instalación de Composer 
Para instalar Composer tan sólo debemos de ejecutar lo siguiente:
```
curl -sS https://getcomposer.org/installer | php
```
Una vez Composer está instalado, debemos de mover el ejecutable de Composer dentro de la ruta de nuestra máquina:
```
mv composer.phar /usr/local/bin/composer
```
Le añadimos los permisos de ejecución:
```
chmod +x /usr/local/bin/composer
```

### Instalación de la Faucet Mercoin

a instalación de la faucet la deberemos de hacer en la ruta que hemos configurado en nuestro VirtualHost, accederemos vía SSH hasta esa ruta y clonaremos el GIT de Laravel:
```
cd /var/www/html
git clone https://github.com/MERCOINMRN/Faucet-Laravel-Mercoin
cd Faucet-Laravel-Mercoin
```
Finalmente, instalaremos la Faucet usando Composer:
```
composer install
```
Una vez la instalación ha finalizado, pasamos a cambiar los permisos:
```
chown www-data: -R * && chown www-data: -R .*
```
Ahora creamos nuestra llave cifrada para nuestra aplicación de Laravel:
```
mv .env.example .env
php artisan key:generate
```
Esto tiene que dar un resultado similar a este:
```
Application key [base64:QGWUBiQkycaJCIEJRSl2gCxUyaVKvXkK+yL2MAow0iE=] set successfully.
```
Editamos el fichero .env y en el apartado de KEY lo dejamos así:
```
nano .env/

APP_KEY=base64:niMQBava+vxIwZwqt0Disqw9mZsDaA0Y0lNFGFgjnB8=
```
Ahora vamos a redirigir el sitio para que nos aparezca en la url correcta para ello : 
```
cd /etc/apache2/sites-available
sudo nano laravel.conf
```
Vamos a la configuracion de apache y creamos un nuevo archivo de configuración donde añadimos las siguientes lineas 
```
<VirtualHost *:80>
    ServerName yourdomain.tld

    ServerAdmin webmaster@localhost
    DocumentRoot /var/www/html/your-project/public

    <Directory /var/www/html/your-project>
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```
Ahora deshabilitamos el archivo de configuracion anterior y habilitamos el nuevo 
```
sudo a2dissite 000-default.conf
sudo a2ensite laravel.conf
sudo a2enmod rewrite
sudo service apache2 restart
```
Ya deberia aparecer algo similar a esto cuando buscas la direccion de tu servidor en un navegador :
<p align="center"><img src="https://i.gyazo.com/cad955e9376b7a44db4d04ebc7c55a5d.png"></p>
