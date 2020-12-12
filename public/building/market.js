class Market extends THREE.Group {

    init (){
        
		//HRE, black yellow
		if(this.bannier =="Frisian" || this.bannier =="Franconian" || this.bannier =="Saxon" || this.bannier =="Bavarian" || this.bannier =="Swabian" || this.bannier =="Carinthian" || this.bannier =="Flemish" || this.bannier =="Tuscan" || this.bannier =="Lombard"){
			var flag_num ="black_yellow";
		}
		//france, blue yellow
		else if(this.bannier =="Frankish" || this.bannier =="Occitan" || this.bannier =="Arpitan"){
			var flag_num ="blue_yellow";
		}
		//scotland blue white
		else if(this.bannier =="Scottish" || this.bannier =="Pictish"){
			var flag_num ="blue_white";
		}
		//england, red white
		else if(this.bannier =="English" || this.bannier =="Breton" || this.bannier =="Welsh"){
			var flag_num ="red_white";
		}
		//spain red yellow
		else if(this.bannier =="Castillian" || this.bannier =="Leonese" || this.bannier =="Catalan" || this.bannier =="Aragonese" || this.bannier =="Navarrese" || this.bannier =="Galician"){
			var flag_num ="red_yellow";
        }
        //default red white
		else {
			var flag_num ="red_white";
		}
        

        var dMarket = this;
        loadOBJModel(assetBaseUrl +"building/market/","market_"+flag_num+".obj",assetBaseUrl +"building/market/","market_"+flag_num+".mtl", (mesh) => {
            mesh.scale.x = 10.00;
            mesh.scale.y = 10.00;
            mesh.scale.z = 10.00;
            dMarket.position.x = this.pX;
            dMarket.position.y = this.pY;
            dMarket.position.z = this.pZ;
            dMarket.rotation.y = this.rY;
            dMarket.add(mesh);

        });
    }    
            
    constructor(pX,pY,pZ,rY,culture){
        super();
        this.pX = pX;
        this.pY = pY;
        this.pZ = pZ;
        this.rY = rY;
        this.bannier = culture;
        this.init();
       
    }
}