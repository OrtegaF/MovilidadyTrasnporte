<script type="text/javascript" src="./us-states-2.js"></script>
<script> 
    let corralones=<?php echo json_encode($corralones_r4);?>;
    let codigo = <?php echo $codigo; ?>;
    let nom_m = '<?php echo $nom_m; ?>';
    let direccion1 = '<?php echo $direccion1; ?>';
    let almacenes = <?php echo json_encode($dis_almacenes); ?>;
    console.log(almacenes);
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

     //marcadores

    //ubicaciones por regiones

    //region4

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
    

     /* coralones extraidos de base de datos */

    //declaracion para crear un icono para los nodos
    let greenIcon = L.icon({
        iconUrl: './node_modules/leaflet/dist/images/icon-coche.png', //direccion donde se encuentra la imagen
        iconSize:     [50, 50], // size of the icon
        popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
    });

    for (let i=0; corralones.length; i++) {
        L.marker([corralones[i].latitud , corralones[i].longitud],{icon: greenIcon}).addTo(map_puebla);        
    };

             
   
</script>