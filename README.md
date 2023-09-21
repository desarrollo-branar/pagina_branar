# pagina-branar
## Blog

>version de php: 8.1

- Importar base de datos:
Dirigete a la carpeta database dentro de src **/sr/database/** encontraras un archivo blog.sql e importalo desde la terminal con:
```sh
mysql -u root -p blog_db < blog.sql 
```
(Reemplaza root y blog_db con los nombres de tu usuario y base de datos a utilizar).

- Instalar dependencias:
Si ya cuentas con composer instalado, simplemente posicionate en la raiz del proyecto y ejecuta:

```sh
composer install
```
con esto instalaras todas las dependencias dentro del composer.json.

>**Y listo eso es toda la configuracion.**

Ahora simplemente dirigete a la ruta de tu configuracion apache, por ejemplo, http://localhost/pagina_branar/blog/ alli podras ver todo el contenido del blog

- Credenciales del usuario administrador:
username: ander.dev@gmail.com
password: v-123456