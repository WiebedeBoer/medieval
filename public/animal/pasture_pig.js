function pasture_pig(pasture_x,pasture_y){
    var pig1 = new Pig(pasture_x,0,pasture_y);
    scene.add( pig1 );
    var pig2 = new Pig(pasture_x,0,pasture_y + 30);
    scene.add( pig2 );
    var pig3 = new Pig(pasture_x + 30,0,pasture_y);
    scene.add( pig3 );

    var fence6 = new Fence(pasture_x,0,pasture_y,0);
    scene.add( fence6 );
}