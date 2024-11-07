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