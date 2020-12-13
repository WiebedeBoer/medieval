class Factory extends THREE.Group {

    init (){

		//HRE, black yellow
		if(this.culture =="Frisian" || this.culture =="Franconian" || this.culture =="Saxon" || this.culture =="Bavarian" || this.culture =="Swabian" || this.culture =="Carinthian" || this.culture =="Flemish" || this.culture =="Tuscan" || this.culture =="Lombard"){
			var flag_num ="black_yellow";
        }
        else if(this.culture =="Bohemian"){
            var flag_num ="black_yellow";
        }
        //teutonic, black white
        else if(this.culture =="Livonian" || this.culture =="Prussian"){
            var flag_num ="black_white";
        }
		//france, blue yellow
		else if(this.culture =="Frankish" || this.culture =="Occitan" || this.culture =="Arpitan"){
			var flag_num ="blue_yellow";
        }
		//scotland blue white
		else if(this.culture =="Scottish" || this.culture =="Pictish"){
			var flag_num ="blue_white";
        }
		else if(this.culture =="Irish"){
			var flag_num ="blue_white";
		}
		//england, red white
		else if(this.culture =="English" || this.culture =="Breton" || this.culture =="Welsh"){
			var flag_num ="red_white";
        }
		else if(this.culture =="Hungarian"){
			var flag_num ="red_white";
        }
        //east
		else if(this.culture =="Danish" || this.culture =="Swedish" || this.culture =="Norwegian"){
			var flag_num ="red_white";
        }
		else if(this.culture =="Polish" || this.culture =="Lithuanian"){
			var flag_num ="red_white";
        }
		else if(this.culture =="Russian"){
			var flag_num ="red_white";
        }
        //byzantine
		else if(this.culture =="Serbian" || this.culture =="Bulgarian" || this.culture =="Wallachian"){
			var flag_num ="red_yellow";
        } 
		else if(this.culture =="Byzantine" || this.culture =="Georgian" || this.culture =="Armenian"){
			var flag_num ="red_yellow";
        } 
		//spain red yellow
		else if(this.culture =="Castillian" || this.culture =="Leonese" || this.culture =="Galician"){
			var flag_num ="red_yellow";
        }
		else if(this.culture =="Catalan" || this.culture =="Aragonese" || this.culture =="Navarrese"){
			var flag_num ="red_yellow";
        }
		else if(this.culture =="Portuguese"){
			var flag_num ="red_yellow";
		}
		else if(this.culture =="Croatian"){
			var flag_num ="red_yellow";
        }
		else if(this.culture =="Neapolitan" || this.culture =="Sardinian" || this.culture =="Sicilian"){
			var flag_num ="red_yellow";
		}
        //andalucian
		else if(this.culture =="Gharb" || this.culture =="Andalucian"){
			var flag_num ="red_white";
        }
        //arab
		else if(this.culture =="Mashriq" || this.culture =="Najd" || this.culture =="Hejaz" || this.culture =="Misr" || this.culture =="Ifriqiya" || this.culture =="Maghreb"){
			var flag_num ="red_white";
        } 
        //andalucian
		else if(this.culture =="Turkish" || this.culture =="Persian" || this.culture =="Mongol"){
			var flag_num ="red_white";
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