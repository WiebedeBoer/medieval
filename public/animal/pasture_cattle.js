function pasture_cattle(pasture_x,pasture_y,cattle){
    var cattle1 = new Cow(pasture_x,0,pasture_y,cattle);
    scene.add( cattle1 );
    var cattle2 = new Cow(pasture_x,0,pasture_y + 30,cattle);
    scene.add( cattle2 );
    var cattle3 = new Cow(pasture_x + 30,0,pasture_y,cattle);
    scene.add( cattle3 );

    var fence4 = new Fence(pasture_x,0,pasture_y,0);
    scene.add( fence4 );
}