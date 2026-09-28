# practica-docker-adrian
 
## ¿Qué hace este proyecto?
 
El objetivo de esta práctica es montar un entorno web utilizando Docker en lugar de herramientas tradicionales como XAMPP.
 
La aplicación se compone de tres contenedores independientes:
 
- Un contenedor Nginx que recibe las peticiones web.
- Un contenedor PHP 8.3 que ejecuta el código de la aplicación.
- Un contenedor MySQL que almacena la información.
 
Los tres contenedores se comunican entre sí mediante Docker Compose.
 
## Estructura del proyecto
 
```text
practica-docker-adrian
│
├── docker-compose.yml
├── README.md
├── nginx
│ └── default.conf
├── php
│ └── Dockerfile
└── src
└── index.php
```
 
## Puesta en marcha
 
Para iniciar el proyecto:
 
```bash
docker compose up -d
```
 
Para comprobar que los contenedores están funcionando:
 
```bash
docker ps
```
 
## Resultado
 
Una vez arrancados los contenedores se puede acceder desde:
 
```text
http://localhost:8080
```
 
 
## ¿Por qué utilizar Docker?
 
Personalmente me parece una solución más profesional que instalar todo junto en el mismo equipo.
 
Separar Nginx, PHP y MySQL en distintos contenedores permite trabajar con cada servicio de forma independiente. Además, el entorno se puede reproducir fácilmente en cualquier ordenador que tenga Docker instalado.
 
La principal desventaja es que la configuración inicial es más compleja que utilizar herramientas como XAMPP, especialmente cuando se está empezando a trabajar con contenedores.
  
Adrián Hermida
