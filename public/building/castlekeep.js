class CastleKeep extends THREE.Group {

    init (){
        
        

		//CHRISTIAN
		//HRE, black yellow
		if(this.culture =="Frisian" || this.culture =="Franconian" || this.culture =="Saxon" || this.culture =="Bavarian" || this.culture =="Swabian" || this.culture =="Carinthian" || this.culture =="Flemish" || this.culture =="Tuscan" || this.culture =="Lombard"){
            var flag_num ="north";
            var build_width = 30;
            var build_height = 30;
            var height_offset = 10;
            var x_offset = 70;
            var y_offset = 95;
        }
        else if(this.culture =="Bohemian"){
            var flag_num ="north";
            var build_width = 30;
            var build_height = 30;
            var height_offset = 10;
            var x_offset = 70;
            var y_offset = 95;
        }
        //teutonic, black white
        else if(this.culture =="Livonian" || this.culture =="Prussian"){
            var flag_num ="north";
            var build_width = 30;
            var build_height = 30;
            var height_offset = 10;
            var x_offset = 70;
            var y_offset = 95;
        }
		//france, blue yellow
		else if(this.culture =="Frankish" || this.culture =="Occitan" || this.culture =="Arpitan"){
            var flag_num ="north";
            var build_width = 30;
            var build_height = 30;
            var height_offset = 10;
            var x_offset = 70;
            var y_offset = 95;
        }
		//scotland, blue white
		else if(this.culture =="Scottish" || this.culture =="Pictish"){
            var flag_num ="north";
            var build_width = 30;
            var build_height = 30;
            var height_offset = 10;
            var x_offset = 70;
            var y_offset = 95;
        }
		else if(this.culture =="Irish"){
            var flag_num ="north";
            var build_width = 30;
            var build_height = 30;
            var height_offset = 10;
            var x_offset = 70;
            var y_offset = 95;
		}
		//england, red white
		else if(this.culture =="English" || this.culture =="Breton" || this.culture =="Welsh"){
            var flag_num ="north";
            var build_width = 30;
            var build_height = 30;
            var height_offset = 10;
            var x_offset = 70;
            var y_offset = 95;
        }
		else if(this.culture =="Hungarian"){
            var flag_num ="north";
            var build_width = 30;
            var build_height = 30;
            var height_offset = 10;
            var x_offset = 70;
            var y_offset = 95;
        }
		//spain, red yellow
		else if(this.culture =="Castillian" || this.culture =="Leonese" || this.culture =="Galician"){
            var flag_num ="west";
            var build_width = 3.2;
            var build_height = 3.8;
            var height_offset = 0;
            var x_offset = 0;
            var y_offset = 0;
        }
		else if(this.culture =="Catalan" || this.culture =="Aragonese" || this.culture =="Navarrese"){
            var flag_num ="west";
            var build_width = 3.2;
            var build_height = 3.8;
            var height_offset = 0;
            var x_offset = 0;
            var y_offset = 0;
        }
		else if(this.culture =="Portuguese"){
            var flag_num ="west";
            var build_width = 3.2;
            var build_height = 3.8;
            var height_offset = 0;
            var x_offset = 0;
            var y_offset = 0;
		}
		else if(this.culture =="Croatian"){
            var flag_num ="west";
            var build_width = 3.2;
            var build_height = 3.8;
            var height_offset = 0;
            var x_offset = 0;
            var y_offset = 0;
        }
		else if(this.culture =="Neapolitan" || this.culture =="Sardinian" || this.culture =="Sicilian"){
            var flag_num ="west";
            var build_width = 3.2;
            var build_height = 3.8;
            var height_offset = 0;
            var x_offset = 0;
            var y_offset = 0;
		}
		//east, yellow blue
		else if(this.culture =="Danish" || this.culture =="Swedish" || this.culture =="Norwegian"){
            var flag_num ="north";
            var build_width = 30;
            var build_height = 30;
            var height_offset = 10;
            var x_offset = 70;
            var y_offset = 95;
		}
		else if(this.culture =="Polish" || this.culture =="Lithuanian"){
            var flag_num ="north";
            var build_width = 30;
            var build_height = 30;
            var height_offset = 10;
            var x_offset = 70;
            var y_offset = 95;
		}
		else if(this.culture =="Russian"){
            var flag_num ="north";
            var build_width = 30;
            var build_height = 30;
            var height_offset = 10;
            var x_offset = 70;
            var y_offset = 95;
		}
		//byzantine, purple yellow
		else if(this.culture =="Serbian" || this.culture =="Bulgarian" || this.culture =="Wallachian"){
            var flag_num ="west";
            var build_width = 3.2;
            var build_height = 3.8;
            var height_offset = 0;
            var x_offset = 0;
            var y_offset = 0;
		}
		else if(this.culture =="Byzantine" || this.culture =="Georgian" || this.culture =="Armenian"){
            var flag_num ="west";
            var build_width = 3.2;
            var build_height = 3.8;
            var height_offset = 0;
            var x_offset = 0;
            var y_offset = 0;
		}
		//ISLAMIC
		//andalucian, green white
		else if(this.culture =="Gharb" || this.culture =="Andalucian"){
            var flag_num ="west";
            var build_width = 3.2;
            var build_height = 3.8;
            var height_offset = 0;
            var x_offset = 0;
            var y_offset = 0;
		}
		//arab, black green
		else if(this.culture =="Mashriq" || this.culture =="Najd" || this.culture =="Hejaz" || this.culture =="Misr" || this.culture =="Ifriqiya" || this.culture =="Maghreb"){
            var flag_num ="east";
            var build_width = 3.2;
            var build_height = 3.8;
            var height_offset = 0;
            var x_offset = 0;
            var y_offset = 0;
		}
		//persian, white blue
		else if(this.culture =="Turkish" || this.culture =="Persian" || this.culture =="Mongol"){
            var flag_num ="east";
            var build_width = 3.2;
            var build_height = 3.8;
            var height_offset = 0;
            var x_offset = 0;
            var y_offset = 0;
		}
		//DEFAULT
		else {
            var flag_num ="north";
            var build_width = 30;
            var build_height = 30;
            var height_offset = 10;
            var x_offset = 70;
            var y_offset = 95;
		}

        var dKeep = this;
        loadOBJModel(assetBaseUrl +"building/castlekeep/","keep_"+flag_num+".obj",assetBaseUrl +"building/castlekeep/","keep_"+flag_num+".mtl", (mesh) => {
            mesh.scale.x = build_width;
            mesh.scale.y = build_height;
            mesh.scale.z = build_width;
            dKeep.position.x = this.pX + x_offset;
            dKeep.position.y = this.pY - height_offset;
            dKeep.position.z = this.pZ + y_offset;
            dKeep.rotation.y = this.yR;
            dKeep.add(mesh);
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