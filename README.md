# Inception_42

Links:

https://medium.com/@ssterdev/inception-guide-42-project-part-i-7e3af15eb671

Asegurarse que se puede usafr latest en el dokerfile

Cambiar los ports en dokerfile linea 8 y 9

en volumenes y en www cambiar la home del device(por la home del dispositivo) echo $HOME


FROM debian:bullseye

añadir el vcodrean.42.fr en el fichero de etc/hosts de la raiz (sudo vim host)
127.0.0.1       vcodrean.42.fr


ngnex cambiar puertos a 443



docker stop $(docker ps -qa) && docker rm $(docker ps -qa) && docker rmi -f $(docker images -qa) && docker volume rm $(docker volume ls -q) && docker network rm $(docker network ls -q) 2>/dev/null

https://127.0.0.1/
https://127.0.0.1:443

see cetificates:  openssl s_client -connect 127.0.0.1:443    

MariaDB and its volume: 
1. Acceder al Contenedor y Conectarse a MariaDB

Puedes listar todos los contenedores en ejecución con:

docker ps


docker exec -it nombre_del_contenedor mysql -u usuario -p
docker exec -it mariadb mysql -u root -p


Aquí:

    nombre_del_contenedor es el nombre o ID de tu contenedor de MariaDB.
    usuario es el nombre de usuario que configuraste para MariaDB (puede ser root o cualquier otro usuario).

Este comando te pedirá la contraseña de usuario que configuraste. Una vez ingresada, accederás a la consola de MariaDB.
2. Verificar que la Base de Datos no esté Vacía

Una vez dentro de MariaDB, puedes listar todas las bases de datos para asegurarte de que hay datos en el servidor:

SHOW DATABASES;

Si ya sabes el nombre de la base de datos, puedes seleccionarla y revisar las tablas en su interior:

USE nombre_de_la_base_de_datos;
SHOW TABLES;

1. Ver el Contenido Completo de la Tabla

Para ver todo el contenido de la tabla, utiliza el siguiente comando:

SELECT * FROM nombre_de_la_tabla;

### Coreccion
 El proyecto trata de desplegar una infraestructura pequeña usando Docker y Docker Compose, donde cada servicio está en un contenedor diferente
 
# Mandatory part
1. Explicación de Docker y Docker Compose

    ¿Cómo funcionan Docker y Docker Compose?
        Docker es una plataforma que permite la creación, despliegue y ejecución de aplicaciones mediante contenedores. Un contenedor es una unidad ligera y portable que incluye todo el software necesario para ejecutar la aplicación (bibliotecas, dependencias, etc.).
        Docker Compose es una herramienta que permite definir y gestionar múltiples contenedores Docker como una sola aplicación. Esto se hace mediante un archivo docker-compose.yml, donde se especifican los servicios, redes y volúmenes necesarios. Docker Compose facilita el despliegue de entornos con múltiples servicios relacionados, ya que con un solo comando (docker-compose up) puedes levantar toda la infraestructura.

    ¿Diferencia entre una imagen Docker usada con Docker Compose y sin Docker Compose?
        Sin Docker Compose: Usar Docker directamente implica correr comandos individuales para cada contenedor, como docker run. Esto puede ser eficiente para una aplicación simple, pero se vuelve complicado para manejar múltiples contenedores que requieren configuraciones específicas, redes compartidas y volúmenes.
        Con Docker Compose: En lugar de ejecutar manualmente cada contenedor, Docker Compose usa un archivo YAML para definir todos los servicios. Es más eficiente y manejable, ya que con un solo comando (docker-compose up), todos los servicios se ejecutan y se conectan automáticamente según lo definido en el archivo docker-compose.yml.

    ¿Beneficios de Docker en comparación con máquinas virtuales (VMs)?
        Los contenedores de Docker son más ligeros que las VMs. Mientras que una VM incluye un sistema operativo completo, un contenedor comparte el kernel del sistema operativo anfitrión, lo cual reduce significativamente el uso de recursos.
        Docker permite un despliegue más rápido, ya que los contenedores se inician en cuestión de segundos en comparación con el tiempo que toma levantar una VM.
        La portabilidad es otro beneficio, ya que los contenedores Docker garantizan que las aplicaciones funcionarán de la misma manera en cualquier entorno que tenga Docker instalado.

    ¿Estructura de directorio requerida para el proyecto?
        La estructura del directorio debe seguir el ejemplo proporcionado en el PDF del proyecto. Todos los archivos relacionados con la configuración y el despliegue de los servicios deben estar en la carpeta srcs en la raíz del repositorio. La estructura del proyecto debe ser clara y organizada para que cada servicio tenga su propia configuración y Dockerfile.


# Simple setup
see cetificates:  openssl s_client -connect 127.0.0.1:443    


Docker Network es el sistema que Docker proporciona para la conectividad entre contenedores, y entre contenedores y el host. Básicamente, se refiere a las capacidades de red que Docker ofrece para conectar y permitir la comunicación entre los diferentes contenedores que tienes corriendo. Docker proporciona varios tipos de redes predeterminadas, y también permite la creación de redes personalizadas según las necesidades de cada aplicación.
En tu archivo docker-compose.yml, la red inception es una red de tipo bridge que se utiliza para interconectar los servicios nginx, wordpress y mariadb. Esto les permite comunicarse entre sí de manera segura y eficiente. La red ayuda a mantener el aislamiento de otros servicios que puedan estar ejecutándose en el host, y facilita la resolución de nombres para que los contenedores puedan interactuar directamente sin necesidad de configuración adicional.

    Nginx expone el puerto 443 para que los clientes externos puedan acceder a WordPress a través de HTTPS.
    WordPress y MariaDB están conectados a través de la red inception y comparten volúmenes para garantizar la persistencia de los datos.

Este tipo de configuración es muy útil en entornos de producción porque garantiza el aislamiento de los servicios, la persistencia de datos y la seguridad de las conexiones, siguiendo buenas prácticas para la implementación de aplicaciones web.
