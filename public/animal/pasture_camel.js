function pasture_camel(pasture_x,pasture_y){
    var camel1 = new Camel(pasture_x,pasture_y);
    scene.add( camel1 );
    var camel2 = new Camel(pasture_x,pasture_y + 45);
    scene.add( camel2 );
    
    var fence1 = new Fence(pasture_x,0,pasture_y,0);
    scene.add( fence1 );
}