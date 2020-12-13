class Inn extends THREE.Group {

    init (){

		//HRE, black yellow
		if(this.culture =="Frisian" || this.culture =="Franconian" || this.culture =="Saxon" || this.culture =="Bavarian" || this.culture =="Swabian" || this.culture =="Carinthian" || this.culture =="Flemish" || this.culture =="Tuscan" || this.culture =="Lombard"){
			var flag_num ="black_yellow";
		}
		//france, blue yellow
		else if(this.culture =="Frankish" || this.culture =="Occitan" || this.culture =="Arpitan"){
			var flag_num ="blue_yellow";
		}
		//scotland blue white
		else if(this.culture =="Scottish" || this.culture =="Pictish"){
			var flag_num ="blue_white";
		}
		//england, red white
		else if(this.culture =="English" || this.culture =="Breton" || this.culture =="Welsh"){
			var flag_num ="red_white";
		}
		//spain red yellow
		else if(this.culture =="Castillian" || this.culture =="Leonese" || this.culture =="Catalan" || this.culture =="Aragonese" || this.culture =="Navarrese" || this.culture =="Galician"){
			var flag_num ="red_yellow";
        }
        //default red white
		else {
			var flag_num ="red_white";
		}

        var dInn = this;
        loadOBJModel(assetBaseUrl +"building/inn/","timberframedinn.obj",assetBaseUrl +"building/inn/","timberframedinn.mtl", (mesh) => {
            mesh.scale.x = 10.00;
            mesh.scale.y = 8.00;
            mesh.scale.z = 10.00;
            dInn.position.x = this.pX;
            dInn.position.y = this.pY;
            dInn.position.z = this.pZ;
            dInn.rotation.y = this.rY;
            dInn.add(mesh);

        });
    }    
            
    constructor(pX,pY,pZ,rY,culture){
        super();
        this.pX = pX;
        this.pY = pY;
        this.pZ = pZ;
        this.rY = rY;
        this.culture = culture;
        this.init();
       
    }
}