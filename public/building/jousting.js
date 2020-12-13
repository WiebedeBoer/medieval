class Jousting extends THREE.Group {

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
		//scotland, blue white
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
        //east, yellow blue
		else if(this.culture =="Danish" || this.culture =="Swedish" || this.culture =="Norwegian"){
			var flag_num ="yellow_blue";
        }
		else if(this.culture =="Polish" || this.culture =="Lithuanian"){
			var flag_num ="yellow_blue";
        }
		else if(this.culture =="Russian"){
			var flag_num ="yellow_blue";
        }
        //byzantine, purple yellow
		else if(this.culture =="Serbian" || this.culture =="Bulgarian" || this.culture =="Wallachian"){
			var flag_num ="purple_yellow";
        } 
		else if(this.culture =="Byzantine" || this.culture =="Georgian" || this.culture =="Armenian"){
			var flag_num ="purple_yellow";
        } 
		//spain, red yellow
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
        //andalucian, green white
		else if(this.culture =="Gharb" || this.culture =="Andalucian"){
			var flag_num ="green_white";
        }
        //arab, black green
		else if(this.culture =="Mashriq" || this.culture =="Najd" || this.culture =="Hejaz" || this.culture =="Misr" || this.culture =="Ifriqiya" || this.culture =="Maghreb"){
			var flag_num ="black_green";
        } 
        //persian, white blue
		else if(this.culture =="Turkish" || this.culture =="Persian" || this.culture =="Mongol"){
			var flag_num ="white_blue";
        }     
        //default red white
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
		this.culture = bannier;
        this.init();
       
    }
}