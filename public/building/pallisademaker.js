function pallisademaker() {
    //towers
	var mincorner =-1750;
	var maxcorner =1750;
	var towerheight =80;
	var towerthickness =60;	
	var tower1 = new Praetorium("tower","lares_wood","tower_wood","tower_wood","lares_wood","roof3",towerheight,towerthickness,towerthickness,mincorner,mincorner); 
	scene.add( tower1 );
	var tower2 = new Praetorium("tower","tower_wood","lares_wood","tower_wood","lares_wood","roof3",towerheight,towerthickness,towerthickness,mincorner,maxcorner); 
	scene.add( tower2 );
	var tower3 = new Praetorium("tower","lares_wood","tower_wood","lares_wood","tower_wood","roof3",towerheight,towerthickness,towerthickness,maxcorner,mincorner); 
	scene.add( tower3 );
	var tower4 = new Praetorium("tower","tower_wood","lares_wood","lares_wood","tower_wood","roof3",towerheight,towerthickness,towerthickness,maxcorner,maxcorner); 
	scene.add( tower4 );
	//walls
	//northern walls
	var wallthickness =60;
	var wallheight =30;
	//height, width, depth, x, y
	var wallNorth1 = new CityWall("wallNS",wallheight,970,wallthickness,-1235,mincorner,"pallisade"); 
	scene.add( wallNorth1 );
	var wallNorth2 = new CityWall("wallNS",wallheight,2350,wallthickness,545,mincorner,"pallisade"); 
	scene.add( wallNorth2 );
	//north gate = 3x,y2
	
	//eastern walls
	var wallEast1 = new CityWall("wallEW",wallheight,wallthickness,970,maxcorner,-1235,"pallisade");
	scene.add( wallEast1 );
	var wallEast2 = new CityWall("wallEW",wallheight,wallthickness,2350,maxcorner,545,"pallisade");
	scene.add( wallEast2 );
	//east gate = 6x,y3
	
	//southern walls
	var wallSouth1 = new CityWall("wallNS",wallheight,2350,wallthickness,-545,maxcorner,"pallisade"); 
	scene.add( wallSouth1 );
	var wallSouth2 = new CityWall("wallNS",wallheight,970,wallthickness,1235,maxcorner,"pallisade"); 
	scene.add( wallSouth2 );
	//south gate = 5x,y6
	
	//western walls
	var wallWest1 = new CityWall("wallEW",wallheight,wallthickness,1660,mincorner,890,"pallisade");  
	scene.add( wallWest1 );
	var wallWest2 = new CityWall("wallEW",wallheight,wallthickness,1660,mincorner,-890,"pallisade");  
	scene.add( wallWest2 );
	//west gate = 2x,y4
}