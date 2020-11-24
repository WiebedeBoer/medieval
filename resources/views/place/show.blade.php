@extends('layouts.place')
@section('title')
Game
@endsection
@section('content')

<!--audio-->
@if($user->audio ==1)
	<audio id="imperia" autoplay loop>
			<source id="parade" src="{{ asset('music/'.$culture->troubadour.'.mp3') }}" type="audio/mp3">
	</audio> 
@endif

                <div class="card-body">
				
				
	<div class="py-3">				
<div class="float-left ml-3">
<div class="crb">
<div class="inline-block"><a href="/culture/{{ $culture->culture_id }}">{{ $culture->culture_name }}</a></div>
@if($culture->manorial_culture ==5)
<div class="inline-block">
<a href="/religion/5"><img src="{{ asset('img/images/belief_islam.png') }}" width="48" height="48" alt="belief" title="Muslim"></a>
</div>
@elseif($culture->manorial_culture ==4)
<div class="inline-block">
<a href="/religion/4"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="48" height="48" alt="belief" title="Greek Orthodox"></a>
</div>
@elseif($culture->manorial_culture ==2)
<div class="inline-block">
<a href="/religion/2"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="48" height="48" alt="belief" title="Serbian Orthodox"></a>
</div>
@elseif($culture->manorial_culture ==3)
<div class="inline-block">
<a href="/religion/3"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="48" height="48" alt="belief" title="Russian Orthodox"></a>
</div>
@else
<div class="inline-block">
<a href="/religion/1"><img src="{{ asset('img/images/belief_catholic.png') }}" width="48" height="48" alt="belief" title="Catholic"></a>
</div>
@endif
</div>
</div>
</div>					
				
				
				
				

	<h1>{{ $placedata->place_name }}</h1>

	@if($placedata->description !=NULL)
	<div class="m-1">{{ $placedata->description }}</div>
	@endif

	@if($ktusers >=1)
	<div class="d-flex justify-content-center">
	<div class="m-1"><a href="/place/{{$id}}/edit">Edit</a></div>
	<div class="m-1"><a href="/place/{{$id}}/build">Build</a></div>
	</div>
	@endif

	<div class="container-fluid justify-content-center">
	<div class="py-5">
	<table class="table-striped tablesorter table">
	<tbody>
	<tr><th>Place</th><td class="pl" colspan="3">{{ $placedata->place_name }}</td></tr>
	<tr><th>Region</th><td class="pl" colspan="3"><a href="/region/{{ $placedata->region}}">{{ $placedata->regions->region_name }}</a></td></tr>

	<tr><th>Population</th><td class="pl" colspan="3">{{ $placedata->population }}</td></tr>	


	
	
	<tr><th>Fortification</th>
	@if($placedata->fortification =="mountain_castle")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/building_castle.png') }}" width="48" height="48" alt="fortification" title="castle"></td>
	@elseif($placedata->fortification =="water_castle")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/building_castle.png') }}" width="48" height="48" alt="fortification" title="castle"></td>
	@elseif($placedata->fortification =="bishop_palace")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/misc_incense_burner.png') }}" width="48" height="48" alt="fortification" title="city"></td>
	@elseif($placedata->fortification =="abbey_grange")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/misc_leadlight_window.png') }}" width="48" height="48" alt="fortification" title="abbey"></td>
	@elseif($placedata->fortification =="fortified_abbey")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/misc_leadlight_window.png') }}" width="48" height="48" alt="fortification" title="abbey"></td>
	@elseif($placedata->fortification =="abbey_scriptorium")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/misc_book.png') }}" width="48" height="48" alt="fortification" title="abbey"></td>			
	@elseif($placedata->fortification =="royal_court")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/misc_throne.png') }}" width="48" height="48" alt="fortification" title="royal court"></td>
	@elseif($placedata->fortification =="chancery")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/misc_throne.png') }}" width="48" height="48" alt="fortification" title="chancery"></td>
	@elseif($placedata->fortification =="burgh")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/shield_2.png') }}" width="48" height="48" alt="fortification" title="burgh"></td>
	@elseif($placedata->fortification =="town_hall")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/shield_2.png') }}" width="48" height="48" alt="fortification" title="burgh"></td>
	@elseif($placedata->fortification =="ducal_residence")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/shield_2.png') }}" width="48" height="48" alt="fortification" title="burgh"></td>
	@elseif($placedata->fortification =="roadside_inn")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/shield_2.png') }}" width="48" height="48" alt="fortification" title="burgh"></td>	
	@elseif($placedata->fortification =="none")
		<td class="pl" colspan="3">&nbsp;</td>	
	@else
		<td class="pl" colspan="3">{{ $placedata->fortification }}</td>
	@endif	
	</tr>
	
	<!--commerce-->
	<!--minerals-->
	<tr><th>Industries</th>
	@if($placedata->commerce =="lead")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/lead.png') }}" width="48" height="48" alt="trade good" title="lead"></td>
	@elseif($placedata->commerce =="gold")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/gold.png') }}" width="48" height="48" alt="trade good" title="gold"></td>	
	@elseif($placedata->commerce =="silver")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/silver.png') }}" width="48" height="48" alt="trade good" title="silver"></td>
	@elseif($placedata->commerce =="iron")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/iron.png') }}" width="48" height="48" alt="trade good" title="iron"></td>	
	@elseif($placedata->commerce =="tin")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/tin.png') }}" width="48" height="48" alt="trade good" title="tin"></td>
	<!--gems-->
	@elseif($placedata->commerce =="emeralds")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/emerald.png') }}" width="48" height="48" alt="trade good" title="emerald"></td>	
	@elseif($placedata->commerce =="sapphire")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/sapphire.png') }}" width="48" height="48" alt="trade good" title="sapphire"></td>	
	@elseif($placedata->commerce =="rubies")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/ruby.png') }}" width="48" height="48" alt="trade good" title="ruby"></td>		
	<!--foodstuff-->		
	@elseif($placedata->commerce =="grain")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/grains.png') }}" width="48" height="48" alt="trade good" title="grain"></td>
	@elseif($placedata->commerce =="cheese")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/cheese.png') }}" width="48" height="48" alt="trade good" title="cheese"></td>
	@elseif($placedata->commerce =="olive_oil")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/oil.png') }}" width="48" height="48" alt="trade good" title="olive oil"></td>
	@elseif($placedata->commerce =="fruit")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/fruits.png') }}" width="48" height="48" alt="trade good" title="fruit"></td>
	@elseif($placedata->commerce =="dates")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/dates.png') }}" width="48" height="48" alt="trade good" title="dates"></td>
	@elseif($placedata->commerce =="wine")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/wine.png') }}" width="48" height="48" alt="trade good" title="wine"></td>	
	<!--sweeeteners-->	
	@elseif($placedata->commerce =="sugar")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/sugar.png') }}" width="48" height="48" alt="trade good" title="sugar"></td>
	@elseif($placedata->commerce =="salt")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/salt.png') }}" width="48" height="48" alt="trade good" title="salt"></td>
	@elseif($placedata->commerce =="honey")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/honey.png') }}" width="48" height="48" alt="trade good" title="honey"></td>		
	<!--meats-->
	@elseif($placedata->commerce =="poultry")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/poultry.png') }}" width="48" height="48" alt="trade good" title="poultry"></td>
	@elseif($placedata->commerce =="pigs")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/pigs.png') }}" width="48" height="48" alt="trade good" title="pigs"></td>		
	@elseif($placedata->commerce =="duck")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/duck_meat.png') }}" width="48" height="48" alt="trade good" title="duck"></td>		
	<!--cloth-->	
	@elseif($placedata->commerce =="wool")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/wool.png') }}" width="48" height="48" alt="trade good" title="wool"></td>	
	@elseif($placedata->commerce =="silk")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/silk.png') }}" width="48" height="48" alt="trade good" title="silk"></td>
	@elseif($placedata->commerce =="flax")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/flax.png') }}" width="48" height="48" alt="trade good" title="flax"></td>
	@elseif($placedata->commerce =="none")
		<td class="pl">&nbsp;</td>	
	@else
		<td class="pl">{{ $placedata->commerce }}</td>
	@endif
	
	<!--factory-->

	@if($placedata->factory =="scriptorium")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/paper.png') }}" width="48" height="48" alt="trade good" title="scriptorium"></td>
	@elseif($placedata->factory =="windmill")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/flour.png') }}" width="48" height="48" alt="trade good" title="windmill"></td>	
	@elseif($placedata->factory =="fishery")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/fish.png') }}" width="48" height="48" alt="trade good" title="fishery"></td>	
	@elseif($placedata->factory =="granary")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/flour.png') }}" width="48" height="48" alt="trade good" title="granary"></td>	
	@elseif($placedata->factory =="tailor")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/fabrics.png') }}" width="48" height="48" alt="trade good" title="tailor"></td>	
	@elseif($placedata->factory =="leather")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/leather.png') }}" width="48" height="48" alt="trade good" title="leather"></td>	
	@elseif($placedata->factory =="soapmaker")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/soap.png') }}" width="48" height="48" alt="trade good" title="soap"></td>	
	@elseif($placedata->factory =="mint")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/coins.png') }}" width="48" height="48" alt="trade good" title="mint"></td>
	@elseif($placedata->factory =="cooper")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/barrel.png') }}" width="48" height="48" alt="trade good" title="cooper"></td>	
	<!--dyes-->	
	@elseif($placedata->factory =="madder")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/madder.png') }}" width="48" height="48" alt="trade good" title="madder"></td>	
	@elseif($placedata->factory =="woad")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/woad.png') }}" width="48" height="48" alt="trade good" title="woad"></td>	
	@elseif($placedata->factory =="potterer")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/pottery.png') }}" width="48" height="48" alt="trade good" title="potterer"></td>	
	@elseif($placedata->factory =="saffron")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/spices.png') }}" width="48" height="48" alt="trade good" title="saffron"></td>	
	@elseif($placedata->factory =="vintner")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/wine.png') }}" width="48" height="48" alt="trade good" title="wine"></td>	
	@elseif($placedata->factory =="fuller")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/wool.png') }}" width="48" height="48" alt="trade good" title="fuller"></td>	
	@elseif($placedata->factory =="fur")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/fur.png') }}" width="48" height="48" alt="trade good" title="furrier"></td>	
	@elseif($placedata->factory =="bookbinder")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/book_western.png') }}" width="48" height="48" alt="trade good" title="bookbinder"></td>	
	@elseif($placedata->factory =="watermill")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/flour.png') }}" width="48" height="48" alt="trade good" title="watermill"></td>	
	@elseif($placedata->factory =="glasswork")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/glasswork.png') }}" width="48" height="48" alt="trade good" title="glasswork"></td>	
	@elseif($placedata->factory =="ivory")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/ivory.png') }}" width="48" height="48" alt="trade good" title="ivory"></td>	
	@elseif($placedata->factory =="smithy")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/tools.png') }}" width="48" height="48" alt="trade good" title="smithy"></td>			
	@elseif($placedata->factory =="cloth")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/fabrics.png') }}" width="48" height="48" alt="trade good" title="clothier"></td>	
	@elseif($placedata->factory =="none")
		<td class="pl">&nbsp;</td>			
	@else
		<td class="pl">{{ $placedata->factory }}</td>
	@endif	
	
	<!--arms-->

	@if($placedata->arms =="smithy")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/sword.png') }}" width="48" height="48" alt="arms" title="smithy"></td>	
	@elseif($placedata->arms =="armorer")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/shield.png') }}" width="48" height="48" alt="arms" title="armorer"></td>
	@elseif($placedata->arms =="shipyard")
		<td class="pl"><img class="tbi" src="{{ asset('img/images/misc_anchor.png') }}" width="48" height="48" alt="arms" title="shipyard"></td>	
	@elseif($placedata->arms =="none")
		<td class="pl">&nbsp;</td>		
	@else
		<td class="pl">{{ $placedata->arms }}</td>
	@endif	
	</tr>
	
	<!--education-->
	<tr><th>Education</th>
	@if($placedata->education =="hospice")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/tradegoods/book_rare.png') }}" width="48" height="48" alt="education" title="hospice"></td>			
	@elseif($placedata->education =="library")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/tradegoods/paper.png') }}" width="48" height="48" alt="education" title="libary"></td>
	@elseif($placedata->education =="university")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/tradegoods/book_block.png') }}" width="48" height="48" alt="education" title="university"></td>	
	@elseif($placedata->education =="none")
		<td class="pl" colspan="3">&nbsp;</td>		
	@else
		<td class="pl" colspan="3">{{ $placedata->education }}</td>
	@endif	
	</tr>
	</tbody>
	</table>

	<div class="customcanvas" id="customcanvas" style="width:100%; height:800px; background-color: rgb(0, 76, 76);margin:auto;"></div>
	<div id="game" class="game"></div>
	


<script>
var storagePath = "http://"+location.host+"/"; 
var assetBaseUrl = "{{ asset('') }}";
//collision vars
var MovingCube;
var collidableMeshList = [];
var collidableBulletMeshList = [];
//collidable props
var collidablePropMeshList = []; 
var propTypes = [];
// Bullets array
var bullets = [];
var bulletmeshes = []; 
//updater
var updateFcts = [];
//scene
var scene = new THREE.Scene();
//fog
scene.fog = new THREE.FogExp2( 0xd0e0f0, 0.0002 );
//renderer
var renderer = new THREE.WebGLRenderer( { antialias: false } );
//window
canvasWidth = window.innerWidth * 0.96;
canvasHeight = 800; 
renderer.setSize( canvasWidth, canvasHeight );      
//append object to it
document.getElementById("customcanvas").appendChild(renderer.domElement);
//camera
var camera = new THREE.PerspectiveCamera(45, canvasWidth / canvasHeight, 0.01, 7650);
camera.position.y = 12;
camera.position.z = -67;
camera.position.x = -21;
//resources
var culture ="{{$culture}}";
var climate ="{{$region->climate}}";
var herbs ="{{$region->herb}}";
var styles ="{{$region->style}}";
var rides ="{{$region->ride}}";
var cycles ="{{$region->cycle}}";
var goat ="{{$region->goat}}";
var sheep ="{{$region->sheep}}";
var cattle ="{{$region->cattle}}";
var population ="{{$placedata->population}}";
var fortification ="{{$placedata->fortification}}";
var commerce ="{{$placedata->commerce}}";
var feudal ="{{$placedata->feudal}}";
var church ="{{$placedata->church}}";
var civil ="{{$placedata->civil}}";
var monastic ="{{$placedata->monastic}}";
var factory ="{{$placedata->factory}}";
var arms ="{{$placedata->arms}}";
var education ="{{$placedata->education}}";
var agriculture ="{{$placedata->agr}}";
var commerce ="{{$placedata->com}}";
var defense ="{{$placedata->def}}";
var justice ="{{$placedata->jus}}";
var morale ="{{$placedata->mor}}";
var training ="{{$placedata->tra}}";
var soldiers ="{{$placedata->sol}}";
//environment
var environmentsize = 5100;
//plane
if(climate =="desert" || climate =="desert_marshes"){
	//planes
	var impluve =new PartPlane(environmentsize,environmentsize,"desert",0,0,0);
	scene.add( impluve );
}
else {
	//planes
	var impluve =new PartPlane(environmentsize,environmentsize,"ground",0,0,0);
	scene.add( impluve );
}
//placetypes
if(fortification =="fortified_abbey"){
	var placetype ="fortified_abbey";
}
else if(fortification =="abbey_grange"){
	var placetype ="abbey_grange";
}
else if(fortification =="abbey_scriptorium"){
	var placetype ="abbey_scriptorium";
}
else if(fortification =="roadside_inn"){
	var placetype ="roadside_inn";
}
else if(fortification =="bishop_palace" || fortification =="papal_palace"){
	var placetype ="city";
}
else if(fortification =="royal_court" || fortification =="chancery"){
	var placetype ="court";
}
else {
	var placetype ="burgh";
}


//skybox
var skyBox = new Skybox(environmentsize,environmentsize,environmentsize);
scene.add( skyBox );
//lighting 
worldLighter();
//moving cube
var cubeGeometry = new THREE.CylinderGeometry(5,5,20,4);
var wireMaterial = new THREE.MeshBasicMaterial( { color: 0xff0000, wireframe:true, visible:false } );
MovingCube = new THREE.Mesh( cubeGeometry, wireMaterial );
MovingCube.position.set(camera.position.x, camera.position.y, camera.position.z);
scene.add( MovingCube );  
//Camera Controls
var controls = new THREE.FirstPersonControls( camera );
controls.lookSpeed = 0.05;
controls.lookVertical = false; //if true vertical look on mousemovement
/*
//Locking the pointer to the game
document.getElementById("parent").addEventListener( 'click', function ( event ) {
        lock();
}, false );
function lock(rawr) {
        document.getElementById("parent").requestPointerLock();
} 
*/

//hit registration collision
function clearText()
{   document.getElementById('message').innerHTML = '...';}
function appendText(txt)
{   document.getElementById('message').innerHTML += txt;}
//collision vars
var collisionX;
var collisionZ;	
//onload loop
function GameLoop(){

//update function
updateFcts.push(function(delta,now){
		//controls update
		controls.update( delta ); 
		//render the scene
		renderer.render( scene, camera );
		//moving cube position and rotation
		MovingCube.position.x = camera.position.x;
		MovingCube.position.y = camera.position.y;
		MovingCube.position.z = camera.position.z;
		MovingCube.rotation.y = camera.rotation.y;                             
})

//loop runner
var lastTimeMsec= null
requestAnimationFrame(function animate(nowMsec){
		// keep looping
		requestAnimationFrame( animate );
		// measure time
		lastTimeMsec = lastTimeMsec || nowMsec-1000/60
		var deltaMsec = Math.min(200, nowMsec - lastTimeMsec)
		lastTimeMsec = nowMsec
		// call each update function
		updateFcts.forEach(function(updateFn){
				updateFn(deltaMsec/1000, nowMsec/1000)
		})
})

}

</script>

        <!--message-->
        <div id="message" class="ce"></div>
        <!--minimap-->
        <div id="minimap" class="ce">
                <canvas id="myCanvas" width="40" height="40" style="border:1px solid #d3d3d3;">Your browser does not support the HTML5 canvas tag.</canvas>
        </div>

		</div>      
    </div>	
	
</div>	

@endsection