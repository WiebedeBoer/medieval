function BuildingGenerator(quartercategory,pX,pY,buildingtype,culture_name) {

    var generatedbuilding_quartercategory = quartercategory;
    var generatedbuilding_x = 700 * (pX - 4);
    var generatedbuilding_y = 700 * (pY - 4);  
    var generatedbuilding_type = buildingtype;  


    //marke
    if(generatedbuilding_quartercategory ==1){

    }
    //hospital
    else if(generatedbuilding_quartercategory ==2){

    }
    //gateway
    else if(generatedbuilding_quartercategory ==3){

        //2,4
        if(pX ==2 && pY ==4){
            var inn1 = new Inn(generatedbuilding_x,0,generatedbuilding_y - 115,1.5707963,culture_name);
            scene.add( inn1 );
        }
        //3,2
        else if(pX ==3 && pY ==2){
            var inn2 = new Inn(generatedbuilding_x - 100,0,generatedbuilding_y,3.1415926,culture_name);
            scene.add( inn2 );
        }
        //5,6
        else if(pX ==5 && pY ==6){
            var inn3 = new Inn(generatedbuilding_x + 100,0,generatedbuilding_y,0,culture_name);
            scene.add( inn3 );
        }
        //6,3
        else {
            var inn4 = new Inn(generatedbuilding_x,0,generatedbuilding_y - 100,1.5707963,culture_name);
            scene.add( inn4 );
        }

    }
    //castellany
    else if(generatedbuilding_quartercategory ==4){

    }
    //market
    else if(generatedbuilding_quartercategory ==5){
        var market = new Market(generatedbuilding_x,0,generatedbuilding_y + 25,1.5707963,culture_name);
        scene.add( market );
    }
    //diocese
    else if(generatedbuilding_quartercategory ==6){
        var diocese_offset = 150;
        //cathedral
        if(generatedbuilding_type ==100 || generatedbuilding_type ==101 || generatedbuilding_type ==102 || generatedbuilding_type ==103 || generatedbuilding_type ==104){
            var cathedral = new Cathedral(generatedbuilding_x - diocese_offset,-6,generatedbuilding_y - diocese_offset,1.5707963,culture_name);
            scene.add( cathedral );
        }
        //church
        else if(generatedbuilding_type ==85 || generatedbuilding_type ==86 || generatedbuilding_type ==87 || generatedbuilding_type ==88 || generatedbuilding_type ==89){
            var cathedral = new Chapel(generatedbuilding_x - diocese_offset,-6,generatedbuilding_y - diocese_offset,1.5707963,culture_name);
            scene.add( cathedral );
        }
    }
    //port
    else if(generatedbuilding_quartercategory ==7){

    }
    //centre
    else if(generatedbuilding_quartercategory ==8){

    }
    //university
    else if(generatedbuilding_quartercategory ==9){

    }
    //tiltyard
    else if(generatedbuilding_quartercategory ==10){
        //tiltyard
        if(generatedbuilding_type ==270){
            var tiltyardM = new Jousting(generatedbuilding_x,21,generatedbuilding_y,1.5707963,culture_name); 
            scene.add( tiltyardM );
        }
    }
    //industry
    else if(generatedbuilding_quartercategory ==11){

    }
    //citadel
    else if(generatedbuilding_quartercategory ==12){

    }
    //roadside inn
    else if(generatedbuilding_quartercategory ==13){
        var inn5 = new Inn(generatedbuilding_x,0,generatedbuilding_y,0,culture_name);
        scene.add( inn5 );
    }
    //fortified abbey
    else if(generatedbuilding_quartercategory ==14){

    }
    //abbey grange
    else if(generatedbuilding_quartercategory ==15){

    }
    //abbey scriptorium
    else if(generatedbuilding_quartercategory ==16){

    }
    //lordship
    else if(generatedbuilding_quartercategory ==17){

    }
    //factory
    else if(generatedbuilding_quartercategory ==18){

    }
    //inn
    else if(generatedbuilding_quartercategory ==19){
        var inn6 = new Inn(generatedbuilding_x,0,generatedbuilding_y,0,culture_name);
        scene.add( inn6 );
    }
    //commandery
    else if(generatedbuilding_quartercategory ==20){

    }
    //abbacy
    else if(generatedbuilding_quartercategory ==21){

    }
    //parish
    else if(generatedbuilding_quartercategory ==22){

    }
    //farmstead
    else if(generatedbuilding_quartercategory ==23){

    }
    //hunting lodge
    else if(generatedbuilding_quartercategory ==24){

    }
    
}    
            