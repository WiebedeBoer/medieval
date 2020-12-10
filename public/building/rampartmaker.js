function rampartmaker() {
    //towers
	var mincorner =-1750;
	var maxcorner =1750;
	var towerheight =40;
	var towerthickness =60;	
	var tower1 = new Praetorium("tower","lares_wood","tower_wood","tower_wood","lares_wood","roof3",towerheight,towerthickness,towerthickness,mincorner,mincorner); 
	scene.add( tower1 );
	var tower2 = new Praetorium("tower","tower_wood","lares_wood","tower_wood","lares_wood","roof3",towerheight,towerthickness,towerthickness,mincorner,maxcorner); 
	scene.add( tower2 );
	var tower3 = new Praetorium("tower","lares_wood","tower_wood","lares_wood","tower_wood","roof3",towerheight,towerthickness,towerthickness,maxcorner,mincorner); 
	scene.add( tower3 );
	var tower4 = new Praetorium("tower","tower_wood","lares_wood","lares_wood","tower_wood","roof3",towerheight,towerthickness,towerthickness,maxcorner,maxcorner); 
	scene.add( tower4 );

	var tower5 = new Praetorium("tower","tower_wood","lares_wood","lares_wood","lares_wood","roof3",towerheight,towerthickness,towerthickness,70,maxcorner + 60); 
	scene.add( tower5 );
	var tower6 = new Praetorium("tower","tower_wood","lares_wood","lares_wood","lares_wood","roof3",towerheight,towerthickness,towerthickness,230,maxcorner + 60); 
	scene.add( tower6 );
	//walls
	//northern walls
	var wallthickness =60;
	var wallheight =15;
	//height, width, depth, x, y
	var wallNorth1 = new CityWall("wallNS",wallheight,970,wallthickness,-1235,mincorner,"rampart"); 
	scene.add( wallNorth1 );
	var wallNorth2 = new CityWall("wallNS",wallheight,2350,wallthickness,545,mincorner,"rampart"); 
	scene.add( wallNorth2 );	
	//eastern walls
	var wallEast1 = new CityWall("wallEW",wallheight,wallthickness,970,maxcorner,-1235,"rampart");
	scene.add( wallEast1 );
	var wallEast2 = new CityWall("wallEW",wallheight,wallthickness,2350,maxcorner,545,"rampart");
	scene.add( wallEast2 );
	//southern walls
	var wallSouth1 = new CityWall("wallNS",wallheight,1820,wallthickness,-810,maxcorner,"rampart"); 
	scene.add( wallSouth1 );
	var wallSouth3 = new CityWall("wallNS",wallheight,430,wallthickness,415,maxcorner,"rampart"); 
	scene.add( wallSouth3 );
	var wallSouth2 = new CityWall("wallNS",wallheight,970,wallthickness,1235,maxcorner,"rampart"); 
	scene.add( wallSouth2 );
	//western walls
	var wallWest1 = new CityWall("wallEW",wallheight,wallthickness,1660,mincorner,890,"rampart");  
	scene.add( wallWest1 );
	var wallWest2 = new CityWall("wallEW",wallheight,wallthickness,1660,mincorner,-890,"rampart");  
	scene.add( wallWest2 );
	//gates
	var y_gate = -5;	
	//north gate = 3x,y2
	var gateNorthc = new RampartGate(-690,y_gate,mincorner,0); 
	scene.add( gateNorthc );
	//south gate = 5x,y6
	var gateSouthc = new RampartGate(690,y_gate,maxcorner,3.1415926); 
	scene.add( gateSouthc );
	//west gate = 2x,y4
	var gateWestc = new RampartGate(mincorner,y_gate,0,1.5707963); 
	scene.add( gateWestc );
	//east gate = 6x,y3
	var gateEastc = new RampartGate(maxcorner,y_gate,-690,4.7123889); 
	scene.add( gateEastc );
}