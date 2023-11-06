<script type="text/javascript" src="./us-states-2.js"></script>
<script> 
    var corralones=<?php echo json_encode($corralones_r4);?>;
    console.log(corralones);
</script>

<script>
    const map_puebla = L.map('map').setView([18.623, -98.09], 8);

    //derechos de autor de openstreetmap
    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map_puebla);
    /* fin de la creacion del mapa */


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
    


    /* coralones extraidos de base de datos para colocarlos en nodos*/

    //declaracion para crear un icono para los nodos
    var greenIcon = L.icon({
        iconUrl: './node_modules/leaflet/dist/images/icon-coche.png', //direccion donde se encuentra la imagen
        iconSize:     [50, 50], // size of the icon
        popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
    });

    for (var i=0; corralones.length; i++) {
        L.marker([corralones[i].latitud , corralones[i].longitud],{icon: greenIcon}).addTo(map_puebla)
            .bindPopup('<b>'+'nombre: '+corralones[i].nombre+'</b>'+'<br />'+'telefono: '+corralones[i].telefono);
        
    };

    
   
</script>