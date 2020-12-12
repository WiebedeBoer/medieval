function QuarterGenerator(climate,treesplacement,culture_name,quartercategory,pX,pY,quarterrank) {

	var generatedquartercategory = quartercategory;
	var generatedquarter_x = 700 * (pX - 4);
    var generatedquarter_y = 700 * (pY - 4);  
    
    //marke
    if(generatedquartercategory ==1){

        if(quarterrank =="wood"){
            if(pX ==1 && pY ==1){

                if(climate =="desert" || climate =="desert_marshes"){
                    forest(climate,treesplacement,generatedquarter_x - 350,generatedquarter_y);
                    forest(climate,treesplacement,generatedquarter_x,generatedquarter_y - 350);
                    forest(climate,treesplacement,generatedquarter_x,generatedquarter_y);  
                }
                else {
                    forest(climate,treesplacement,generatedquarter_x - 350,generatedquarter_y - 350); 
                    forest(climate,treesplacement,generatedquarter_x - 350,generatedquarter_y);
                    forest(climate,treesplacement,generatedquarter_x,generatedquarter_y - 350);
                    forest(climate,treesplacement,generatedquarter_x,generatedquarter_y);  
                }
  
            }
            else if(pY ==4){
                forest(climate,treesplacement,generatedquarter_x - 350,generatedquarter_y - 350);
                forest(climate,treesplacement,generatedquarter_x,generatedquarter_y - 350);
            }
            else if(pY ==7){
                forest(climate,treesplacement,generatedquarter_x - 350,generatedquarter_y);
            }
            else {
                forest(climate,treesplacement,generatedquarter_x - 350,generatedquarter_y - 350);
                forest(climate,treesplacement,generatedquarter_x - 350,generatedquarter_y);
            }    
        }     
    }
    //hospital
    else if(generatedquartercategory ==2){

    }
    //gateway
    else if(generatedquartercategory ==3){

    }
    //castellany
    else if(generatedquartercategory ==4){

    }
    //market
    else if(generatedquartercategory ==5){

    }
    //diocese
    else if(generatedquartercategory ==6){

    }
    //port
    else if(generatedquartercategory ==7){

    }
    //centre
    else if(generatedquartercategory ==8){

    }
    //university
    else if(generatedquartercategory ==9){

    }
    //tiltyard
    else if(generatedquartercategory ==10){

    }
    //industry
    else if(generatedquartercategory ==11){

    }
    //citadel
    else if(generatedquartercategory ==12){

    }
    //roadside inn
    else if(generatedquartercategory ==13){

    }
    //fortified abbey
    else if(generatedquartercategory ==14){

    }
    //abbey grange
    else if(generatedquartercategory ==15){

    }
    //abbey scriptorium
    else if(generatedquartercategory ==16){

    }
    //lordship
    else if(generatedquartercategory ==17){

    }
    //factory
    else if(generatedquartercategory ==18){

    }
    //inn
    else if(generatedquartercategory ==19){

    }
    //commandery
    else if(generatedquartercategory ==20){

    }
    //abbacy
    else if(generatedquartercategory ==21){

    }
    //parish
    else if(generatedquartercategory ==22){

    }
    //farmstead
    else if(generatedquartercategory ==23){

    }
    //hunting lodge
    else if(generatedquartercategory ==24){

    }
    
}