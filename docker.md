# Docker

## Ejercicio 1: Servidor Nginx en modo demonio

### Aqui tenemos como ejecutamos el contenedor ed nginx en segundo plano y vemos como funciona a partir de la pagina de localhost por el puerto 8080
![cap1](1.png)

### y asi veriamos el log 

![cap2](2.png)

## Ejercicio 2: Uso de volúmenes en Nginx

### Creamos un directorio y dentro de este un fichero html simple

![cap3](3.png)

### Despues creamos un contenedor que coga de referencia nuestra pagina web, habra que cambiar el puerto ya que el 8080 esta utilizandose, a no ser de que li cerremos, si cambiamos el fichero podemos ver como entrando al localhost lo vemos modificado

![cap4](4.png)

![cap5](5.png)

## Ejercicio 3: Construcción de una imagen con Dockerfile

### Creamos el docker file con este contenido

![cap6](6.png)

### Creamos la imagen de nginx y el fichero html correspondiente

![cap7](7.png)

### Ahora hacemos que se ejecute en segundo plano y entramos en el local host del puerto que hemos indicado, y nos sale el contenido del fichero html correspondiente

![cap8](8.png)

## Ejercicio 4: Orquestación básica con Docker Compose

### Creamos el archivo yml 

![cap9](9.png)

### Aqui comprobamos que funciona

![cap10](10.png)

## Ejercicio 5: Despliegue de Nextcloud

### Activamos el contenedor de cloud con el puerto 8099

![cap11](11.png)

### Aqui comprobamos que funciona

![cap12](12.png)

## DAVID MORENO RODRIGUEZ




