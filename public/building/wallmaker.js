function wallmaker(){
    //towers
	var mincorner =-1750;
	var maxcorner =1750;
	var towerheight =80;
	var towerthickness =60;	
	var tower1 = new Praetorium("tower","city_tower","city_port","city_port","city_tower","roof3",towerheight,towerthickness,towerthickness,mincorner,mincorner); 
	scene.add( tower1 );
	var tower2 = new Praetorium("tower","city_port","city_tower","city_port","city_tower","roof3",towerheight,towerthickness,towerthickness,mincorner,maxcorner); 
	scene.add( tower2 );
	var tower3 = new Praetorium("tower","city_tower","city_port","city_tower","city_port","roof3",towerheight,towerthickness,towerthickness,maxcorner,mincorner); 
	scene.add( tower3 );
	var tower4 = new Praetorium("tower","city_port","city_tower","city_tower","city_port","roof3",towerheight,towerthickness,towerthickness,maxcorner,maxcorner); 
	scene.add( tower4 );
	//walls
	//northern walls
	var wallthickness =60;
	var wallheight =30;
	//height, width, depth, x, y
	var wallNorth1 = new CityWall("wallNS",wallheight,970,wallthickness,-1235,mincorner,"gold_wall"); 
	scene.add( wallNorth1 );
	var wallNorth2 = new CityWall("wallNS",wallheight,2350,wallthickness,545,mincorner,"gold_wall"); 
	scene.add( wallNorth2 );
	//north gate = 3x,y2
	
	//eastern walls
	var wallEast1 = new CityWall("wallEW",wallheight,wallthickness,970,maxcorner,-1235,"gold_wall");
	scene.add( wallEast1 );
	var wallEast2 = new CityWall("wallEW",wallheight,wallthickness,2350,maxcorner,545,"gold_wall");
	scene.add( wallEast2 );
	//east gate = 6x,y3
	
	//southern walls
	var wallSouth1 = new CityWall("wallNS",wallheight,1820,wallthickness,-810,maxcorner,"gold_wall"); 
	scene.add( wallSouth1 );
	var wallSouth3 = new CityWall("wallNS",wallheight,430,wallthickness,415,maxcorner,"gold_wall"); 
	scene.add( wallSouth3 );
	var wallSouth2 = new CityWall("wallNS",wallheight,970,wallthickness,1235,maxcorner,"gold_wall"); 
	scene.add( wallSouth2 );
	//south gate = 5x,y6
	
	//western walls
	var wallWest1 = new CityWall("wallEW",wallheight,wallthickness,1660,mincorner,890,"gold_wall");  
	scene.add( wallWest1 );
	var wallWest2 = new CityWall("wallEW",wallheight,wallthickness,1660,mincorner,-890,"gold_wall");  
	scene.add( wallWest2 );
	//west gate = 2x,y4

	//gates
	var y_gate = -215;
	var gate_x_offset = 830;
	var gate_z_offset = 350;
	
	var gateNorthc = new CastleGate(-690 + gate_x_offset,y_gate,mincorner + gate_z_offset,0); 
	scene.add( gateNorthc );
	var gateSouthc = new CastleGate(700 - gate_x_offset,y_gate,maxcorner - gate_z_offset,3.1415926); 
	scene.add( gateSouthc );

	var gateWestc = new CastleGate(mincorner + gate_z_offset,y_gate,0 - gate_x_offset,1.5707963); 
	scene.add( gateWestc );
	var gateEastc = new CastleGate(maxcorner - gate_z_offset,y_gate,-690 + gate_x_offset,4.7123889); 
	scene.add( gateEastc );

}