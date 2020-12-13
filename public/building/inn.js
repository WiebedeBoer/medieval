class Inn extends THREE.Group {

    init (){

		//HRE, black yellow
		if(this.culture =="Frisian" || this.culture =="Franconian" || this.culture =="Saxon" || this.culture =="Bavarian" || this.culture =="Swabian" || this.culture =="Carinthian" || this.culture =="Flemish" || this.culture =="Tuscan" || this.culture =="Lombard"){
			var flag_num ="north";
        }
        else if(this.culture =="Bohemian"){
            var flag_num ="north";
        }
        //teutonic, black white
        else if(this.culture =="Livonian" || this.culture =="Prussian"){
            var flag_num ="north";
        }
		//france, blue yellow
		else if(this.culture =="Frankish" || this.culture =="Occitan" || this.culture =="Arpitan"){
			var flag_num ="north";
        }
		//scotland blue white
		else if(this.culture =="Scottish" || this.culture =="Pictish"){
			var flag_num ="north";
        }
		else if(this.culture =="Irish"){
			var flag_num ="north";
		}
		//england, red white
		else if(this.culture =="English" || this.culture =="Breton" || this.culture =="Welsh"){
			var flag_num ="north";
        }
		else if(this.culture =="Hungarian"){
			var flag_num ="north";
        }
        //east
		else if(this.culture =="Danish" || this.culture =="Swedish" || this.culture =="Norwegian"){
			var flag_num ="east";
        }
		else if(this.culture =="Polish" || this.culture =="Lithuanian"){
			var flag_num ="east";
        }
		else if(this.culture =="Russian"){
			var flag_num ="east";
        }
        //byzantine
		else if(this.culture =="Serbian" || this.culture =="Bulgarian" || this.culture =="Wallachian"){
			var flag_num ="byzantine";
        } 
		else if(this.culture =="Byzantine" || this.culture =="Georgian" || this.culture =="Armenian"){
			var flag_num ="byzantine";
        } 
		//spain red yellow
		else if(this.culture =="Castillian" || this.culture =="Leonese" || this.culture =="Galician"){
			var flag_num ="west";
        }
		else if(this.culture =="Catalan" || this.culture =="Aragonese" || this.culture =="Navarrese"){
			var flag_num ="west";
        }
		else if(this.culture =="Portuguese"){
			var flag_num ="west";
		}
		else if(this.culture =="Croatian"){
			var flag_num ="west";
        }
		else if(this.culture =="Neapolitan" || this.culture =="Sardinian" || this.culture =="Sicilian"){
			var flag_num ="west";
		}
        //andalucian
		else if(this.culture =="Gharb" || this.culture =="Andalucian"){
			var flag_num ="andalusian";
        }
        //arab
		else if(this.culture =="Mashriq" || this.culture =="Najd" || this.culture =="Hejaz" || this.culture =="Misr" || this.culture =="Ifriqiya" || this.culture =="Maghreb"){
			var flag_num ="arab";
        } 
        //andalucian
		else if(this.culture =="Turkish" || this.culture =="Persian" || this.culture =="Mongol"){
			var flag_num ="persian";
        }     
        //default red white
		else {
			var flag_num ="north";
		}

        var dInn = this;
        loadOBJModel(assetBaseUrl +"building/inn/","timberframedinn_"+flag_num+".obj",assetBaseUrl +"building/inn/","timberframedinn_"+flag_num+".mtl", (mesh) => {
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