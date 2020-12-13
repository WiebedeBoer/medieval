function pasture_sheep(pasture_x,pasture_y,sheep){
    var sheep1 = new Sheep(pasture_x,0,pasture_y,sheep);
    scene.add( sheep1 );
    var sheep2 = new Sheep(pasture_x,0,pasture_y + 30,sheep);
    scene.add( sheep2 );
    var sheep3 = new Sheep(pasture_x + 30,0,pasture_y,sheep);
    scene.add( sheep3 );

    var fence5 = new Fence(pasture_x,0,pasture_y,0);
    scene.add( fence5 );
}