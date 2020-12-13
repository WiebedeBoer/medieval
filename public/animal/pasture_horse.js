function pasture_horse(pasture_x,pasture_y,culture_name){
    var horse1 = new Horse(pasture_x,0,pasture_y,culture_name);
    scene.add( horse1 );
    var horse2 = new Horse(pasture_x + 45,0,pasture_y + 45,culture_name);
    scene.add( horse2 );

    var fence1 = new Fence(pasture_x,0,pasture_y,0);
    scene.add( fence1 );
}