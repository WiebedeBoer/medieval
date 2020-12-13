function factorymaker(factory,goat,grapes,climate,culture_name,generatedquarter_x,generatedquarter_y){
    var grid_offset = 175;
    //cloth
    if(factory =="cloth"){
        factory_cloth(grid_offset,culture_name,generatedquarter_x,generatedquarter_y);
    }
    //cooper
    else if(factory =="cooper"){
        factory_cooper(grid_offset,culture_name,generatedquarter_x,generatedquarter_y);
    }

    //tanner
    if(goat !="none"){
        factory_tanner(grid_offset,culture_name,generatedquarter_x,generatedquarter_y);
    }

    //vintner
    if(grapes =="wine"){
        factory_vintner(grid_offset,culture_name,generatedquarter_x,generatedquarter_y);
    }

    //potterer
    if(climate =="desert_marshes" || climate =="mediterranean_woodlands_marshes" || climate =="mediterranean_shrublands_marshes" || climate =="temperate_woodlands_marshes" || climate =="temperate_grasslands_marshes"){
        factory_potterer(grid_offset,culture_name,generatedquarter_x,generatedquarter_y);
    }

}

function factory_cloth(grid_offset,culture_name,generatedquarter_x,generatedquarter_y){
    var factory1 = new Factory(generatedquarter_x + grid_offset,0,generatedquarter_y - grid_offset,0,culture_name,"cloth");
    scene.add( factory1 );
}

function factory_cooper(grid_offset,culture_name,generatedquarter_x,generatedquarter_y){
    var factory1 = new Factory(generatedquarter_x + grid_offset,0,generatedquarter_y - grid_offset,0,culture_name,"vintner");
    scene.add( factory1 );  
}

function factory_tanner(grid_offset,culture_name,generatedquarter_x,generatedquarter_y){
    var factory2 = new Factory(generatedquarter_x + grid_offset,0,generatedquarter_y + grid_offset,0,culture_name,"tanner");
    scene.add( factory2 );
}

function factory_vintner(grid_offset,culture_name,generatedquarter_x,generatedquarter_y){
    var factory3 = new Factory(generatedquarter_x - grid_offset,0,generatedquarter_y - grid_offset,0,culture_name,"vintner");
    scene.add( factory3 );  
}

function factory_potterer(grid_offset,culture_name,generatedquarter_x,generatedquarter_y){
    var factory4 = new Factory(generatedquarter_x - grid_offset,0,generatedquarter_y + grid_offset,0,culture_name,"potterer");
    scene.add( factory4 );  
}