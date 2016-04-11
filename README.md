#Video Box
---
##Objetivo
Video box se trata de una aplicación web simple en la que se pueden enviar videos, estos serán convertidos y servidos con el servidor de streaming Wowza mediante RTSP y/o MPEG-DASH.

##Requerimientos del servidor

* Servidor web apache
* PHP > v5.4
* Servidor de Streaming Wowza
* Base de datos MySql
* FFmpeg

##Instalación

* Instala la aplicación con git:
    `
    git clone https://github.com/Aibehn/videobox.git
    `
* Descarga el .zip:
 <https://github.com/Aibehn/videobox/archive/master.zip>

###Configuración
* **config/config.php** cambiar 'base_url' a la url del servidor
* **config/database.php** añadir información de la base de datos
    * **DDL base de datos Videos** :
    ```
    CREATE TABLE IF NOT EXISTS videos
    (
        id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
        title VARCHAR(128) NOT NULL,
        videoid VARCHAR(128) NOT NULL,
        text TEXT NOT NULL,
        name VARCHAR(128) NOT NULL,
        'mpeg-dash' TINYINT(1) DEFAULT '0' NOT NULL
    );
    CREATE INDEX videoid ON videos (videoid);
    ```
    * **Mantener sesion** :

    ```
    CREATE TABLE IF NOT EXISTS `ci_sessions` (
            `id` varchar(40) NOT NULL,
            `ip_address` varchar(45) NOT NULL,
            `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
            `data` blob NOT NULL,
            KEY `ci_sessions_timestamp` (`timestamp`)
    );
    ```
    * **Autentificación de usuarios** :
    Ejecutar el archivo en la BDD:
     `/application/third_party/ion-auth/sql/ion_auth.mssql.sql`

##Demo

* **Develoment** <http://videobox.azurewebsites.net/index.php>
* **Release** <>

##Tecnologías utilizadas
* **[CodeIgniter](https://codeigniter.com)** v3.0.6 - Framework PHP
* **[Bootstrap](http://getbootstrap.com)** v3.3.6 - HTML, CSS, and JS framework
* **[FontAwesome](http://fontawesome.io)** v4.5.0 - Font and CSS toolkit
* **[Wowza](https://www.wowza.com)** v4.4.1 - Streaming
* **[JwPlayer](http://www.jwplayer.com/)** v7.0 - Reproductor JS
* **[bitDash](http://www.dash-player.com/)** v4.3.1 - Reproductor MPEG-DASH

##Utilidades

* **Trello tareas:**  <https://trello.com/b/Pmmb0HwS/tareas>
* **Web Proyecto:** <http://aibehn.github.io/videobox>
