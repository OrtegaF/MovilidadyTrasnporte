<script type="text/javascript" src="./us-states-2.js"></script>

<script>
    /* inicio de la creacion del mapa */
    const map_puebla = L.map('map').setView([18.623, -98.09], 8).fitWorld();

    //derechos de autor de openstreetmap
	const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map_puebla);
    /* fin de la creacion del mapa */

    
    //definicion de colores mediante la region a la que pertenecen
	function getColor(r) {
		return r == 1 ? '#780116' : //region 1
               r == 2 ? '#bb9457' : //region 2
               r == 3 ? '#50514f' : //region 3
               r == 4 ? '#780116' : //region 4
               r == 5 ? '#50514f' : //region 5
               r == 6 ? '#bb9457' : //region 6
               r == 7 ? '#780116' : '#800026'; //region 7
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

    //localizacion actual
    function onLocationFound(e) {
		const radius = e.accuracy / 2;

		const locationMarker = L.marker(e.latlng).addTo(map_puebla)
            .bindPopup("Esta es su ubicacion actual").openPopup();
	}

    map_puebla.on('locationfound', onLocationFound);

    map_puebla.locate({setView: true, maxZoom: 16});


    //marcadores

    //ubicaciones por regiones

    //region4
    corralones_r4 = [
        { 'latitud': 19.058392, 'longitud': -98.1545258 },
        { 'latitud': 19.06556, 'longitud': -98.17693 },
        { 'latitud': 19.04308, 'longitud': -98.19801 },
        { 'latitud': 19.09676, 'longitud': -98.23289 },
        { 'latitud': 19.0811535, 'longitud': -98.1116468 }
    ];


    //declaracion para crear un icono para los nodos
    var greenIcon = L.icon({
        iconUrl: './node_modules/leaflet/dist/images/icon-coche.png', //direccion donde se encuentra la imagen
        iconSize:     [50, 50], // size of the icon
        popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
    });

    for (var i=0; corralones_r4.length; i++) {
        L.marker([corralones_r4[i].latitud, corralones_r4[i].longitud],{icon: greenIcon}).addTo(map_puebla);        
    };


	
    

</script>