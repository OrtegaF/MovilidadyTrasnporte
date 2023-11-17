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
#Controladores creados
*Administrador: En este controlador creamos metodos y llamamos a sus vistas correspondientes, donde hicimos formularios con CRUD para corralones y usuarios. Ademas un formulario en el cual recolectamos informacion del siniestro para asi poder marcar la ruta al corralon mas cercano y proporcionarle un costo aproximado, A continuacion se presentan imagenes de las vistas.
![WhatsApp Image 2023-11-17 at 11 33 43 AM](https://github.com/OrtegaF/MovilidadyTrasnporte/assets/105130659/9497c301-475b-45d8-aded-5e9f88ebdb80)
![WhatsApp Image 2023-11-17 at 11 32 27 AM (3)](https://github.com/OrtegaF/MovilidadyTrasnporte/assets/105130659/abd3a289-b8c7-4c31-823b-61dfd8282631)
![WhatsApp Image 2023-11-17 at 11 32 27 AM (2)](https://github.com/OrtegaF/MovilidadyTrasnporte/assets/105130659/7213b394-9214-40ef-b437-4af08ec7323c)
![WhatsApp Image 2023-11-17 at 11 32 27 AM (1)](https://github.com/OrtegaF/MovilidadyTrasnporte/assets/105130659/ef4f0ffe-e270-4c60-92c9-f3f4f564d625)
![WhatsApp Image 2023-11-17 at 11 32 27 AM](https://github.com/OrtegaF/MovilidadyTrasnporte/assets/105130659/a0214124-254e-426f-94dc-52425c475847)

*Corraloneros: En este controlador creamos metodos y llamamos a sus vistas correspondientes, donde hicimos formularios con CRUD para gruas y arrastres, A continuacion se presentan imagenes de las vistas.
![WhatsApp Image 2023-11-17 at 11 36 31 AM](https://github.com/OrtegaF/MovilidadyTrasnporte/assets/105130659/9333edbf-45f7-4dbc-8d67-998203031a6c)
![WhatsApp Image 2023-11-17 at 11 36 14 AM (1)](https://github.com/OrtegaF/MovilidadyTrasnporte/assets/105130659/efa8eadc-0c1c-4920-b827-e8a19af908f4)
![WhatsApp Image 2023-11-17 at 11 36 14 AM](https://github.com/OrtegaF/MovilidadyTrasnporte/assets/105130659/133f72c0-783b-4fa2-b554-729072d74e4f)

*Login: Ceamos metodos y llamamos a la vista de login, con la finalidad de que los usuarios se puedan logear, A continuacion se presenta la imagen de la vista.
![WhatsApp Image 2023-11-17 at 11 39 00 AM](https://github.com/OrtegaF/MovilidadyTrasnporte/assets/105130659/2eb71d49-9b12-4e05-88e6-f43bf0350a1f)

*Usuarios: En este controlador solamente llamamos a una vista en la cual un usuario que haya tenido el siniestro localice donde se encuentra su vehiculo, A continuacion se presenta la imagen de la vista. 
![WhatsApp Image 2023-11-17 at 11 42 03 AM](https://github.com/OrtegaF/MovilidadyTrasnporte/assets/105130659/5c6fc9ac-3aea-4bfd-8b4b-5f35aa90792a)

#Creación del mapa
1.- Para la creacion del mapa primero creamos lo que es un div que tiene un id que se llama map
2.- De ahi implementamos las fucniones para mostrar el mapa (siguiendo la documentacion de leaflet)
```
const map_puebla = L.map('map').setView([18.623, -98.09], 8);
    //derechos de autor de openstreetmap
    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map_puebla);
    /* fin de la creacion del mapa */
```

3.- Despues comsumimos un json en donde nos trae todos los municipios del estado de puebla, con la finalidad de marcar las regiones que tiene el estado, al consumir este json, creamos una funcion la cual nos ayudara a determinar el color por region, de ahi hacemos una funcion de estilos para que asignemos los colores donde accedemos al numero de region que tiene el json y agregamos al mapa
```
<script type="text/javascript" src="./us-states-2.js"></script>

//definicion de colores mediante la region a la que pertenecen
	function getColor(r) {
		return r == 1 ? '#780116' : //region 1
               r == 2 ? '#f6aa1c' : //region 2
               r == 3 ? '#5f0f40' : //region 3
               r == 4 ? '#0f4c5c' : //region 4
               r == 5 ? '#f48c06' : //region 5
               r == 6 ? '#403d39' : //region 6
               r == 7 ? '#007f5f' : //region 7
               r == 8 ? '#582f0e' : 
               r == 9 ? '#70e000' : 
               r == 10 ? '#ff6d00' : 
               r == 11 ? '#ff4d6d' : 
               r == 12 ? '#4cc9f0' : 
               r == 13 ? '#ffc300' : 
               r == 14 ? '#212529' : 
               r == 15 ? '#7f5539' : 
               r == 16 ? '#499f68' : 
               r == 17 ? '#bb9457' : 
               r == 18 ? '#50514f' : 
               r == 19 ? '#003e1f' : 
               r == 20 ? '#d90429' : 
               r == 21 ? '#00f5d4' : 
               r == 22 ? '#000000' : '#800026';
	}

    //mandamos a traer la funcion de estilos donde en este llamamos a la propiedad region que se encuentra en las propiedades del json
    function style(feature) {
		return {
            fillColor: getColor(feature.properties.region),
			weight: 2,
			opacity: 10,
			color: 'white',
			dashArray: '3',
			fillOpacity: 0.5
			
		};
	}

    /* global statesData */
    L.geoJson(statesData, {style: style}).addTo(map_puebla); 
```
4.- Implementamos ahora el marcado de rutas con leafletñ-routing-machine, donde nos taremos de nuestro controlador de administrador en el metodo mostrar_mapa algunos campos del formulario para asi mandar directamente las direcciones en los inputs que nos proporciona leaflet-routing, de ahi tambien extraemos lo que es los km y ahi empezamos hacer las operaciones correspondientes para calcular el costo aproximado de arrastre

```
 let corralones=<?php echo json_encode($corralones_r4);?>;
    let codigo = <?php echo $codigo; ?>;
    let nom_m = '<?php echo $nom_m; ?>';
    let direccion1 = '<?php echo $direccion1; ?>';
    let almacenes = <?php echo json_encode($dis_almacenes); ?>;

let guardar_lat;
    let guardar_long;
    let distancia = 38;
    let guardar_id;
    let guardar_contacto;
    let guardar_telefono;
    let guardar_nombre;
    let guardar_direccion;
    //let distance;
    for (let i=0; almacenes.length; i++) {
        const routingControl = L.Routing.control({
            waypoints: [
                L.Routing.waypoint(null, direccion1+ ', ' + nom_m + ', ' + 'Puebla, ' + codigo + ', ' + 'México'),
                L.latLng(almacenes[i].latitud, almacenes[i].longitud)
            ],
            routeWhileDragging: true,
            geocoder: L.Control.Geocoder.nominatim(),
            language: 'es',
        }).addTo(map_puebla);
       

        //extraemos la distancia
       
        
        routingControl.on('routesfound', function (e) {
            distance = e.routes[0].summary.totalDistance;
            console.log('distancia en km: ' + distance/1000);
            document.getElementById('km').value=distance/1000;
            document.getElementById('mt').value=distance;

            grua = document.getElementById("grua").value;
            km = document.getElementById("km").value;
            //mt = document.getElementById("mt").value;
             //alert(cost);
            let datos = {
                'grua' : grua,
                'km' : km,
                //'mt' : mt, 
            }
            $.ajax({
                type : 'POST',
                url : '<?= base_url('Administrador/costo_arrastre')?>',
                data : datos,
                success : function(data){
                    respuesta= JSON.parse(data);
                    //alert(respuesta.costo);
                $('#costo_arrastre').attr( 'value',respuesta.costo.toFixed()).val;
                }
            });


           

            /* Costo de arrastre */
            if(distance < distancia){
                guardar_lat = almacenes[i].latitud;
                guardar_long = almacenes[i].longitud;
                guardar_id = almacenes[i].id_almacen;
                guardar_contacto = almacenes[i].contacto;
                guardar_telefono = almacenes[i].telefono;
                guardar_nombre = almacenes[i].nombre;
                guardar_direccion = almacenes[i].direccion;
             }
        });    
            document.getElementById('region').value=almacenes[i].zona;
            document.getElementById('almacen').value=almacenes[i].nombre;
            document.getElementById('contacto').value=almacenes[i].contacto;
            document.getElementById('ubicacion_a').value=almacenes[i].direccion;
            document.getElementById('telefono').value=almacenes[i].telefono;
           
        distancia = distance;
        
    };
```
5.- De ahi creamos los marcadores, pero personalizamos el icono y de ahi hicimos una consulta en el metodo para tarernos los corralones que tenemos registrados en la base de datos
```
//declaracion para crear un icono para los nodos
    let greenIcon = L.icon({
        iconUrl: './node_modules/leaflet/dist/images/icon-coche.png', //direccion donde se encuentra la imagen
        iconSize:     [50, 50], // size of the icon
        popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
    });

    for (let i=0; corralones.length; i++) {
        L.marker([corralones[i].latitud , corralones[i].longitud],{icon: greenIcon}).addTo(map_puebla);        
    };
```

#Resultado final del marcado de rutas
![final_mapa](https://github.com/OrtegaF/MovilidadyTrasnporte/assets/105130659/d6639b64-daf0-4975-bd6e-51a8d37d9a79)

