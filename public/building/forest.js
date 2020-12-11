function forest(climate,treeplacement,xloc,yloc) {
    //palm
    var treedistance = 75;
    if(climate =="desert" || climate =="desert_marshes"){

        if(xloc < -1750){
            if(treeplacement ==1){
                var palm1 = new Foresttree(xloc,0,yloc - treedistance,"palm");
                scene.add( palm1 );
                var palm2 = new Foresttree(xloc - treedistance,0,yloc - treedistance,"palm");
                scene.add( palm2 );
                var palm3 = new Foresttree(xloc - treedistance,0,yloc + treedistance,"palm");
                scene.add( palm3 );
            }
            else if(treeplacement ==2){
                var palm1 = new Foresttree(xloc,0,yloc + treedistance,"palm");
                scene.add( palm1 );
                var palm2 = new Foresttree(xloc + treedistance,0,yloc - treedistance,"palm");
                scene.add( palm2 );
                var palm3 = new Foresttree(xloc - treedistance,0,yloc + treedistance,"palm");
                scene.add( palm3 );
            }
            else if(treeplacement ==3){

                var palm1 = new Foresttree(xloc + treedistance,0,yloc,"palm");
                scene.add( palm1 );
                var palm2 = new Foresttree(xloc - treedistance,0,yloc - treedistance,"palm");
                scene.add( palm2 );
                var palm3 = new Foresttree(xloc - treedistance,0,yloc + treedistance,"palm");
                scene.add( palm3 );
            }
            else {
                var palm1 = new Foresttree(xloc,0,yloc,"palm");
                scene.add( palm1 );
                var palm2 = new Foresttree(xloc - treedistance,0,yloc - treedistance,"palm");
                scene.add( palm2 );
                var palm3 = new Foresttree(xloc - treedistance,0,yloc + treedistance,"palm");
                scene.add( palm3 );
            }
        }
        else {
            if(treeplacement ==1){
                var palm1 = new Foresttree(xloc + treedistance,0,yloc,"palm");
                scene.add( palm1 );
                var palm2 = new Foresttree(xloc - treedistance,0,yloc - treedistance,"palm");
                scene.add( palm2 );
                var palm3 = new Foresttree(xloc - treedistance,0,yloc + treedistance,"palm");
                scene.add( palm3 );
            }
            else if(treeplacement ==2){
                var palm1 = new Foresttree(xloc,0,yloc + treedistance,"palm");
                scene.add( palm1 );
                var palm2 = new Foresttree(xloc - treedistance,0,yloc - treedistance,"palm");
                scene.add( palm2 );
                var palm3 = new Foresttree(xloc - treedistance,0,yloc + treedistance,"palm");
                scene.add( palm3 );
            }
            else if(treeplacement ==3){
                var palm1 = new Foresttree(xloc,0,yloc - treedistance,"palm");
                scene.add( palm1 );
                var palm2 = new Foresttree(xloc - treedistance,0,yloc - treedistance,"palm");
                scene.add( palm2 );
                var palm3 = new Foresttree(xloc - treedistance,0,yloc + treedistance,"palm");
                scene.add( palm3 );
            }
            else {
                var palm1 = new Foresttree(xloc,0,yloc,"palm");
                scene.add( palm1 );
                var palm2 = new Foresttree(xloc - treedistance,0,yloc - treedistance,"palm");
                scene.add( palm2 );
                var palm3 = new Foresttree(xloc - treedistance,0,yloc + treedistance,"palm");
                scene.add( palm3 );
            }
        }
    }
    //oak
    else {

        if(xloc < -1750){
            if(treeplacement ==1){
                var oak1 = new Foresttree(xloc,0,yloc - treedistance,"oak");
                scene.add( oak1 );
                var oak2 = new Foresttree(xloc - treedistance,0,yloc - treedistance,"oak");
                scene.add( oak2 );
                var oak3 = new Foresttree(xloc - treedistance,0,yloc + treedistance,"oak");
                scene.add( oak3 );
                var oak4 = new Foresttree(xloc + treedistance,0,yloc + treedistance,"oak");
                scene.add( oak4 );
            }
            else if(treeplacement ==2){
                var oak1 = new Foresttree(xloc,0,yloc + treedistance,"oak");
                scene.add( oak1 );
                var oak2 = new Foresttree(xloc - treedistance,0,yloc - treedistance,"oak");
                scene.add( oak2 );
                var oak3 = new Foresttree(xloc - treedistance,0,yloc + treedistance,"oak");
                scene.add( oak3 );
                var oak4 = new Foresttree(xloc + treedistance,0,yloc + treedistance,"oak");
                scene.add( oak4 );
            }
            else if(treeplacement ==3){
                var oak1 = new Foresttree(xloc + treedistance,0,yloc,"oak");
                scene.add( oak1 );
                var oak2 = new Foresttree(xloc - treedistance,0,yloc - treedistance,"oak");
                scene.add( oak2 );
                var oak3 = new Foresttree(xloc + treedistance,0,yloc + treedistance,"oak");
                scene.add( oak3 );
                var oak4 = new Foresttree(xloc - treedistance,0,yloc + treedistance,"oak");
                scene.add( oak4 );
            }
            else {
                var oak1 = new Foresttree(xloc,0,yloc,"oak");
                scene.add( oak1 );
                var oak2 = new Foresttree(xloc - treedistance,0,yloc - treedistance,"oak");
                scene.add( oak2 );
                var oak3 = new Foresttree(xloc - treedistance,0,yloc + treedistance,"oak");
                scene.add( oak3 );
                var oak4 = new Foresttree(xloc + treedistance,0,yloc - treedistance,"oak");
                scene.add( oak4 );
            }
        }
        else {
            if(treeplacement ==1){
                var oak1 = new Foresttree(xloc + treedistance,0,yloc,"oak");
                scene.add( oak1 );
                var oak2 = new Foresttree(xloc - treedistance,0,yloc - treedistance,"oak");
                scene.add( oak2 );
                var oak3 = new Foresttree(xloc - treedistance,0,yloc + treedistance,"oak");
                scene.add( oak3 );
                var oak4 = new Foresttree(xloc + treedistance,0,yloc + treedistance,"oak");
                scene.add( oak4 );
            }
            else if(treeplacement ==2){
                var oak1 = new Foresttree(xloc,0,yloc + treedistance,"oak");
                scene.add( oak1 );
                var oak2 = new Foresttree(xloc - treedistance,0,yloc - treedistance,"oak");
                scene.add( oak2 );
                var oak3 = new Foresttree(xloc - treedistance,0,yloc + treedistance,"oak");
                scene.add( oak3 );
                var oak4 = new Foresttree(xloc + treedistance,0,yloc + treedistance,"oak");
                scene.add( oak4 );
            }
            else if(treeplacement ==3){
                var oak1 = new Foresttree(xloc,0,yloc - treedistance,"oak");
                scene.add( oak1 );
                var oak2 = new Foresttree(xloc - treedistance,0,yloc - treedistance,"oak");
                scene.add( oak2 );
                var oak3 = new Foresttree(xloc - treedistance,0,yloc + treedistance,"oak");
                scene.add( oak3 );
                var oak4 = new Foresttree(xloc + treedistance,0,yloc + treedistance,"oak");
                scene.add( oak4 );
            }
            else {
                var oak1 = new Foresttree(xloc,0,yloc,"oak");
                scene.add( oak1 );
                var oak2 = new Foresttree(xloc - treedistance,0,yloc - treedistance,"oak");
                scene.add( oak2 );
                var oak3 = new Foresttree(xloc - treedistance,0,yloc + treedistance,"oak");
                scene.add( oak3 );
                var oak4 = new Foresttree(xloc + treedistance,0,yloc + treedistance,"oak");
                scene.add( oak4 );
            }           
        }




    }

}