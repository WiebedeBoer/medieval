function pasture_chicken(pasture_x,pasture_y){
    var chicken1 = new Chicken(pasture_x,0,pasture_y);
    scene.add( chicken1 );
    var rooster2 = new Rooster(pasture_x - 30,0,pasture_y);
    scene.add( rooster2 );
    var chicken3 = new Chicken(pasture_x,0,pasture_y - 30);
    scene.add( chicken3 );
    var chicken4 = new Chicken(pasture_x - 30,0,pasture_y - 30);
    scene.add( chicken4 );

    var fence3 = new Fence(pasture_x,0,pasture_y,0);
    scene.add( fence3 );
}