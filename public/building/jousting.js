class Jousting extends THREE.Group {

    init (){
		
		//HRE, black yellow
		if(this.bannier =="Saxon" || this.bannier =="Bavarian" || this.bannier =="Flemish" || this.bannier =="Tuscan"){
			var flag_num ="black_yellow";
		}
		//france, blue yellow
		else if(this.bannier =="Frankish" || this.bannier =="Occitan" || this.bannier =="Arpitan"){
			var flag_num ="blue_yellow";
		}
		//scotland blue white
		else if(this.bannier =="Scottish"){
			var flag_num ="blue_white";
		}
		//england, red white
		else if(this.bannier =="English"){
			var flag_num ="red_white";
		}
		//spain red yellow
		else if(this.bannier =="Castillian" || this.bannier =="Leonese"){
			var flag_num ="red_yellow";
		}
		else {
			var flag_num ="red_white";
		}


        var dTilt = this;
        loadOBJModel(assetBaseUrl +"building/tiltyard/","Platform_"+flag_num+".obj",assetBaseUrl +"building/tiltyard/","Platform_"+flag_num+".mtl", (mesh) => {
            mesh.scale.x = 7.0;
            mesh.scale.y = 7.0;
            mesh.scale.z = 7.0;
            dTilt.position.x = this.pX;
            dTilt.position.y = this.pY;
            dTilt.position.z = this.pZ;
            dTilt.rotation.y = this.yR;
            dTilt.add(mesh);
            collidableMeshList.push(mesh);

        });
    }    
            
    constructor(pX,pY,pZ,yR,bannier){
        super();
        this.pX = pX;
        this.pY = pY;
        this.pZ = pZ;
        this.yR = yR;
		this.bannier = bannier;
        this.init();
       
    }
}