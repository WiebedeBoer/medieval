function pasture_duck(pasture_x,pasture_y){
    var duck1 = new Duck(pasture_x,pasture_y);
    scene.add( duck1 );
    var duck2 = new Duck(pasture_x - 30,pasture_y);
    scene.add( duck2 );
    var duck3 = new Duck(pasture_x,pasture_y - 30);
    scene.add( duck3 );
    var duck4 = new Duck(pasture_x - 30,pasture_y - 30);
    scene.add( duck4 );

    var fence3 = new Fence(pasture_x,0,pasture_y,0);
    scene.add( fence3 );
}