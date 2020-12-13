class Factory extends THREE.Group {

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

        var dMerchant = this;
        if(this.type =="cloth"){
            loadOBJModel(assetBaseUrl +"building/business_clothier/","timberframedclothier_"+flag_num+".obj",assetBaseUrl +"building/business_clothier/","timberframedclothier_"+flag_num+".mtl", (mesh) => {
                mesh.scale.x = 10.00;
                mesh.scale.y = 8.00;
                mesh.scale.z = 10.00;
                dMerchant.position.x = this.pX;
                dMerchant.position.y = this.pY;
                dMerchant.position.z = this.pZ;
                dMerchant.rotation.y = this.rY;
                dMerchant.add(mesh);
            });
        }
        else if(this.type =="tanner"){
            loadOBJModel(assetBaseUrl +"building/business_tanner/","timberframedtanner_"+flag_num+".obj",assetBaseUrl +"building/business_tanner/","timberframedtanner_"+flag_num+".mtl", (mesh) => {
                mesh.scale.x = 10.00;
                mesh.scale.y = 8.00;
                mesh.scale.z = 10.00;
                dMerchant.position.x = this.pX;
                dMerchant.position.y = this.pY;
                dMerchant.position.z = this.pZ;
                dMerchant.rotation.y = this.rY;
                dMerchant.add(mesh);
            });
        }
        else if(this.type =="vintner"){
            loadOBJModel(assetBaseUrl +"building/business_vintner/","timberframedvintner_"+flag_num+".obj",assetBaseUrl +"building/business_vintner/","timberframedvintner_"+flag_num+".mtl", (mesh) => {
                mesh.scale.x = 10.00;
                mesh.scale.y = 8.00;
                mesh.scale.z = 10.00;
                dMerchant.position.x = this.pX;
                dMerchant.position.y = this.pY;
                dMerchant.position.z = this.pZ;
                dMerchant.rotation.y = this.rY;
                dMerchant.add(mesh);
            });
        }
        else if(this.type =="potterer"){
            loadOBJModel(assetBaseUrl +"building/business_potter/","timberframedpotter_"+flag_num+".obj",assetBaseUrl +"building/business_potter/","timberframedpotter_"+flag_num+".mtl", (mesh) => {
                mesh.scale.x = 10.00;
                mesh.scale.y = 8.00;
                mesh.scale.z = 10.00;
                dMerchant.position.x = this.pX;
                dMerchant.position.y = this.pY;
                dMerchant.position.z = this.pZ;
                dMerchant.rotation.y = this.rY;
                dMerchant.add(mesh);
            });
        }
        else {
            loadOBJModel(assetBaseUrl +"building/business_clothier/","timberframedclothier_"+flag_num+".obj",assetBaseUrl +"building/business_clothier/","timberframedclothier_"+flag_num+".mtl", (mesh) => {
                mesh.scale.x = 10.00;
                mesh.scale.y = 8.00;
                mesh.scale.z = 10.00;
                dMerchant.position.x = this.pX;
                dMerchant.position.y = this.pY;
                dMerchant.position.z = this.pZ;
                dMerchant.rotation.y = this.rY;
                dMerchant.add(mesh);
            });
        }

        

    }    
            
    constructor(pX,pY,pZ,rY,culture,type){
        super();
        this.pX = pX;
        this.pY = pY;
        this.pZ = pZ;
        this.rY = rY;
        this.culture = culture;
        this.type = type;
        this.init();
       
    }
}