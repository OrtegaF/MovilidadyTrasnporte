# OpenStreetMap 
OpenStreetMap es un proyecto colaborativo para crear mapas editables y libres, para consumir.OpenStreetMap se apoya de la biblioteca Leaflet de JavaScript de código abierto el cual tiene mapas interactivos. Al encontrar esta biblioteca, react contiene una libreria llamada react-leaflet el cual este tiene componentes basados en leaflet para su manipulacion en react. 

# Leaflet-routing-machine
Leaflet Routing Machine es una forma fácil, flexible y extensible de agregar rutas a un mapa de Leaflet, a continuacion se coloca los link´s para consultar y ver algunos tutoriales para su ejecucion
* https://www.liedman.net/leaflet-routing-machine/
* https://www.liedman.net/leaflet-routing-machine/api/

#Codeigniter
Como nuestro proyecto es implementado con el lenguaje de PHP CodeIgniter es un framework para el desarrollo de aplicaciones en php, que utiliza el MVC, a lo cual nos permite una mejor estructuracion al momento de programar 

#AdminLTE
Este templete nos ayuda a diseñar bien nuestro frontend, este contiene diferentes componentes que se pueden reutilizar para nuestro proyecto utilizando varias tecnologías convinadas tales como HTML, Bootstrap, jQuery, etc.

# Clonar proyecto y instalacion
Debes de clonar el proyecto en la consola de git de la siguiente manera 
```
git clone https://github.com/OrtegaF/MovilidadyTrasnporte.git
```
Recordemos que este proyecto debe de estar adentro de la carpeta de xampp/htdocs para que podamos visualizar correctamente el proyecto


# Instalacion de react-leaflet, leaflet-routing-machine y leaflet-control-geocoder
Se deben de ejecutar los siguientes comandos en la carpeta de nuestro proyecto con la finalidad de instalar leaflet para utilizar los mapas, routing y geocoder para marcar las rutas:
```
npm install react react-dom leaflet
npm install react-leaflet
leaflet-routing-machine
npm install leaflet-control-geocoder
```

# Versiones (Configuración)
Para realizar este proyecto se utilizan las siguientes versiones: 
* "leaflet": "^1.9.4",
* "leaflet-control-geocoder": "^2.4.0",
* "leaflet-routing-machine": "^3.2.12",
* "react": "^18.2.0",
* "react-dom": "^18.2.0",
* "react-leaflet": "^4.2.1"

En el archivo head_view.php se debe de colocar las siguientes lineas para utilizar las hojas de estilo y funcionalidades de leaflet-routing-machine 
```
<!-- Leaflet y Leaflet Routing -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />

  <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

  <!-- Leaflet y Leaflet Routing -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
  <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
  <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
  <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
```
