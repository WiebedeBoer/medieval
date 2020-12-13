class Chapel extends THREE.Group {

    init (){
	
		
		//CHRISTIAN
		//HRE, black yellow
		if(this.culture =="Frisian" || this.culture =="Franconian" || this.culture =="Saxon" || this.culture =="Bavarian" || this.culture =="Swabian" || this.culture =="Carinthian" || this.culture =="Flemish" || this.culture =="Tuscan" || this.culture =="Lombard"){
			var flag_num ="chapel";
			var scale_x = 5.5;
			var scale_y = 5.5;
			var scale_z = 5.5;
			var mintower =0;
        }
        else if(this.culture =="Bohemian"){
			var flag_num ="chapel";
			var scale_x = 5.5;
			var scale_y = 5.5;
			var scale_z = 5.5;
			var mintower =0;
        }
        //teutonic, black white
        else if(this.culture =="Livonian" || this.culture =="Prussian"){
			var flag_num ="chapel";
			var scale_x = 5.5;
			var scale_y = 5.5;
			var scale_z = 5.5;
			var mintower =0;
        }
		//france, blue yellow
		else if(this.culture =="Frankish" || this.culture =="Occitan" || this.culture =="Arpitan"){
			var flag_num ="chapel";
			var scale_x = 5.5;
			var scale_y = 5.5;
			var scale_z = 5.5;
			var mintower =0;
        }
		//scotland, blue white
		else if(this.culture =="Scottish" || this.culture =="Pictish"){
			var flag_num ="chapel";
			var scale_x = 5.5;
			var scale_y = 5.5;
			var scale_z = 5.5;
			var mintower =0;
        }
		else if(this.culture =="Irish"){
			var flag_num ="chapel";
			var scale_x = 5.5;
			var scale_y = 5.5;
			var scale_z = 5.5;
			var mintower =0;
		}
		//england, red white
		else if(this.culture =="English" || this.culture =="Breton" || this.culture =="Welsh"){
			var flag_num ="chapel";
			var scale_x = 5.5;
			var scale_y = 5.5;
			var scale_z = 5.5;
			var mintower =0;
        }
		else if(this.culture =="Hungarian"){
			var flag_num ="chapel";
			var scale_x = 5.5;
			var scale_y = 5.5;
			var scale_z = 5.5;
			var mintower =0;
        }
		//spain, red yellow
		else if(this.culture =="Castillian" || this.culture =="Leonese" || this.culture =="Galician"){
			var flag_num ="spain";
			var scale_x = 5.5;
			var scale_y = 5.5;
			var scale_z = 5.5;
			var mintower =0;
        }
		else if(this.culture =="Catalan" || this.culture =="Aragonese" || this.culture =="Navarrese"){
			var flag_num ="spain";
			var scale_x = 5.5;
			var scale_y = 5.5;
			var scale_z = 5.5;
			var mintower =0;
        }
		else if(this.culture =="Portuguese"){
			var flag_num ="spain";
			var scale_x = 5.5;
			var scale_y = 5.5;
			var scale_z = 5.5;
			var mintower =0;
		}
		else if(this.culture =="Croatian"){
			var flag_num ="spain";
			var scale_x = 5.5;
			var scale_y = 5.5;
			var scale_z = 5.5;
			var mintower =0;
        }
		else if(this.culture =="Neapolitan" || this.culture =="Sardinian" || this.culture =="Sicilian"){
			var flag_num ="spain";
			var scale_x = 5.5;
			var scale_y = 5.5;
			var scale_z = 5.5;
			var mintower =0;
		}
		//east, yellow blue
		else if(this.culture =="Danish" || this.culture =="Swedish" || this.culture =="Norwegian"){
			var flag_num ="russian";
			var scale_x = 5.5;
			var scale_y = 5.5;
			var scale_z = 5.5;
			var mintower =0;
		}
		else if(this.culture =="Polish" || this.culture =="Lithuanian"){
			var flag_num ="russian";
			var scale_x = 5.5;
			var scale_y = 5.5;
			var scale_z = 5.5;
			var mintower =0;
		}
		else if(this.culture =="Russian"){
			var flag_num ="russian";
			var scale_x = 5.5;
			var scale_y = 5.5;
			var scale_z = 5.5;
			var mintower =0;
		}
		//byzantine, purple yellow
		else if(this.culture =="Serbian" || this.culture =="Bulgarian" || this.culture =="Wallachian"){
			var flag_num ="byzantine";
			var scale_x = 5.5;
			var scale_y = 5.5;
			var scale_z = 5.5;
			var mintower =0;
		}
		else if(this.culture =="Byzantine" || this.culture =="Georgian" || this.culture =="Armenian"){
			var flag_num ="byzantine";
			var scale_x = 5.5;
			var scale_y = 5.5;
			var scale_z = 5.5;
			var mintower =0;
		}
		//ISLAMIC
		//andalucian, green white
		else if(this.culture =="Gharb" || this.culture =="Andalucian"){
			var flag_num ="minaret";
			var scale_x = 0.1;
			var scale_y = 0.1;
			var scale_z = 0.1;
			var mintower =8;
		}
		//arab, black green
		else if(this.culture =="Mashriq" || this.culture =="Najd" || this.culture =="Hejaz" || this.culture =="Misr" || this.culture =="Ifriqiya" || this.culture =="Maghreb"){
			var flag_num ="minaret";
			var scale_x = 0.1;
			var scale_y = 0.1;
			var scale_z = 0.1;
			var mintower =8;
		}
		//persian, white blue
		else if(this.culture =="Turkish" || this.culture =="Persian" || this.culture =="Mongol"){
			var flag_num ="minaret";
			var scale_x = 0.1;
			var scale_y = 0.1;
			var scale_z = 0.1;
			var mintower =8;
		}
		//DEFAULT
		else {
			var flag_num ="chapel";
			var scale_x = 5.5;
			var scale_y = 5.5;
			var scale_z = 5.5;
			var mintower =0;
		}

        var dChurch = this;
        loadOBJModel(assetBaseUrl +"building/chapel/","relic_"+flag_num+".obj",assetBaseUrl +"building/chapel/","relic_"+flag_num+".mtl", (mesh) => {
            mesh.scale.x = scale_x;
            mesh.scale.y = scale_y;
            mesh.scale.z = scale_z;
            dChurch.position.x = this.pX;
            dChurch.position.y = this.pY - mintower;
            dChurch.position.z = this.pZ;
            dChurch.rotation.y = this.yR;
            dChurch.add(mesh);
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