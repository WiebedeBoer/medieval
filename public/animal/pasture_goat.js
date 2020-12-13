function pasture_goat(pasture_x,pasture_y,goat){
    var goat1 = new Goat(pasture_x,0,pasture_y,goat);
    scene.add( goat1 );
    var goat2 = new Goat(pasture_x,0,pasture_y + 30,goat);
    scene.add( goat2 );
    var goat3 = new Goat(pasture_x + 30,0,pasture_y,goat);
    scene.add( goat3 );

    var fence2 = new Fence(pasture_x,0,pasture_y,0);
    scene.add( fence2 );
}