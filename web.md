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

##Demo

* **Develoment** <>
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