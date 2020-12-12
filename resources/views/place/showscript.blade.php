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
//trees
var treesplacement = parseInt("{{$placedata->place_id}}") % 4;
//culture
var culture_name ="{{$cultural->culture_name}}";
var warrior_culture ="{{$cultural->warrior_culture}}";
var chivalry_culture ="{{$cultural->chivalry_culture}}";
var manorial_culture ="{{$cultural->manorial_culture}}";
var commercial_culture ="{{$cultural->commercial_culture}}";
//climate
var climate ="{{$region->climate}}";
//style
var styles ="{{$region->style}}";
//cycle
var cycles ="{{$region->cycle}}";
//regional livestock
var rides ="{{$region->ride}}";
var goat ="{{$region->goat}}";
var sheep ="{{$region->sheep}}";
var cattle ="{{$region->cattle}}";
var pigs = "{{$region->pigs}}";
var poultry ="{{$region->poultry}}";
//regional resources
var herbs ="{{$region->herb}}";
var fruit ="{{$region->fruit}}";
var grapes ="{{$region->wine}}";
var olives ="{{$region->oil}}";
var sweet ="{{$region->sweetener}}";
var dyes ="{{$region->dyes}}";
var grains ="{{$region->grain}}";
var mill ="{{$region->mill}}";
//place resources
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
//quarters filling
var quarters = [];
@foreach($quarters as $quarter)
	var quarter =[];
	quarter.push("{{$quarter->quarter_category}}"); //quarter category	
	quarter.push("{{$quarter->x}}"); //quarter x coordinate
	quarter.push("{{$quarter->y}}"); //quarter y coordinate	
	quarter.push("{{$quarter->quarter_rank}}"); // //quarter rank
	var buildings =[];
	@foreach($quarter->buildings as $building)
		buildings.push("{{$building->building_type}}"); //building type
	@endforeach
	quarter.push(buildings);
	quarters.push(quarter);
@endforeach
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
//city defenses
if(defense >=50 && defense <=199){
	var citywall ="earthwork";
}	
else if(defense >=200 && defense <=599)	{
	var citywall ="pallisade";
}
else if(defense >=600){
	var citywall ="stone";
}
else {
	var citywall ="none";
}
//skybox
var skyBox = new Skybox(environmentsize,environmentsize,environmentsize);
scene.add( skyBox );
//city gates, towers, walls
if (citywall =="stone"){
	wallmaker();	
}
else if(citywall =="pallisade"){
	pallisademaker();
}
else if(citywall =="earthwork"){
	rampartmaker();
}
//quarters and buildings generating
quarters.forEach(function(quarter) {
	QuarterGenerator(climate,treesplacement,quarter[0],quarter[1],quarter[2],quarter[3]);
	if(quarter[4]){
		quarter[4].forEach(function(building) {
			BuildingGenerator(quarter[0],quarter[1],quarter[2],building);	
		});
	}
});
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