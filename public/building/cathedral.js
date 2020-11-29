class Cathedral extends THREE.Group {

    init (){
		
		//CHRISTIAN
		//holy roman empire
		if(this.bannier =="Saxon" || this.bannier =="Bavarian" || this.bannier =="Swabian" || this.bannier =="Franconian" || this.bannier =="Frisian" || this.bannier =="Flemish" || this.bannier =="Carinthian"){
			var flag_num ="west";
			var scale_x = 10.0;
			var scale_y = 11.0;
			var scale_z = 10.0;
			var rotate_palace = 0;
			var mintower =0;
			var xrepl =0;
		}
		//bohemia
		else if(this.bannier =="Bohemian"){
			var flag_num ="west";
			var scale_x = 10.0;
			var scale_y = 11.0;
			var scale_z = 10.0;
			var rotate_palace = 0;
			var mintower =0;
			var xrepl =0;
		}
		//northern italy
		else if(this.bannier =="Tuscan" || this.bannier =="Lombard"){
			var flag_num ="west";
			var scale_x = 10.0;
			var scale_y = 11.0;
			var scale_z = 10.0;
			var rotate_palace = 0;
			var mintower =0;
			var xrepl =0;
		}
		//france
		else if(this.bannier =="Frankish" || this.bannier =="Occitan" || this.bannier =="Arpitan" || this.bannier =="Breton"){
			var flag_num ="west";
			var scale_x = 10.0;
			var scale_y = 11.0;
			var scale_z = 10.0;
			var rotate_palace = 0;
			var mintower =0;
			var xrepl =0;
		}
		//british isles
		else if(this.bannier =="Scottish" || this.bannier =="Pictish" || this.bannier =="English" || this.bannier =="Welsh" || this.bannier =="Irish"){
			var flag_num ="west";
			var scale_x = 10.0;
			var scale_y = 11.0;
			var scale_z = 10.0;
			var rotate_palace = 0;
			var mintower =0;
			var xrepl =0;
		}
		//scandinanvian
		else if(this.bannier =="Norwegian" || this.bannier =="Danish" || this.bannier =="Swedish"){
			var flag_num ="west";
			var scale_x = 10.0;
			var scale_y = 11.0;
			var scale_z = 10.0;
			var rotate_palace = 0;
			var mintower =0;	
			var xrepl =0;
		}
		//baltic
		else if(this.bannier =="Prussian" || this.bannier =="Livonian"){
			var flag_num ="west";
			var scale_x = 10.0;
			var scale_y = 11.0;
			var scale_z = 10.0;
			var rotate_palace = 0;
			var mintower =0;	
			var xrepl =0;
		}
		//poland lithuania
		else if(this.bannier =="Polish" || this.bannier =="Lithuanian"){
			var flag_num ="west";
			var scale_x = 10.0;
			var scale_y = 11.0;
			var scale_z = 10.0;
			var rotate_palace = 0;
			var mintower =0;
			var xrepl =0;
		}	
		//hungary croatia
		else if(this.bannier =="Croatian" || this.bannier =="Hungarian"){
			var flag_num ="west";
			var scale_x = 10.0;
			var scale_y = 11.0;
			var scale_z = 10.0;
			var rotate_palace = 0;
			var mintower =0;
			var xrepl =0;
		}		
		//spanish
		else if(this.bannier =="Navarrese" || this.bannier =="Aragonese" || this.bannier =="Catalan" || this.bannier =="Leonese" || this.bannier =="Castillian" || this.bannier =="Galician"){
			var flag_num ="west";
			var scale_x = 10.0;
			var scale_y = 11.0;
			var scale_z = 10.0;
			var rotate_palace = 0;
			var mintower =0;
			var xrepl =0;
		}
		//portugal
		else if(this.bannier =="Portuguese"){
			var flag_num ="west";
			var scale_x = 10.0;
			var scale_y = 11.0;
			var scale_z = 10.0;
			var rotate_palace = 0;
			var mintower =0;
			var xrepl =0;
		}
		//napels
		else if(this.bannier =="Neapolitan" || this.bannier =="Sardinian" || this.bannier =="Sicilian"){
			var flag_num ="west";
			var scale_x = 10.0;
			var scale_y = 11.0;
			var scale_z = 10.0;
			var rotate_palace = 0;
			var mintower =0;
			var xrepl =0;
		}
		//eastern europe
		else if(this.bannier =="Wallachian" || this.bannier =="Bulgarian" || this.bannier =="Serbian"){
			var flag_num ="west";
			var scale_x = 10.0;
			var scale_y = 11.0;
			var scale_z = 10.0;
			var rotate_palace = 0;
			var mintower =0;
			var xrepl =0;
		}
		//byzantine
		else if(this.bannier =="Byzantine"){
			var flag_num ="byzantine";
			var scale_x = 10.0;
			var scale_y = 11.0;
			var scale_z = 10.0;
			var rotate_palace = 0;
			var mintower =0;
			var xrepl =0;
		}
		//russia
		else if(this.bannier =="Russian"){
			var flag_num ="russian";
			var scale_x = 10.0;
			var scale_y = 11.0;
			var scale_z = 10.0;
			var rotate_palace = 0;
			var mintower =0;
			var xrepl =0;
		}
		//georgia armenia
		else if(this.bannier =="Georgian" || this.bannier =="Armenian"){
			var flag_num ="byzantine";
			var scale_x = 10.0;
			var scale_y = 11.0;
			var scale_z = 10.0;
			var rotate_palace = 0;
			var mintower =0;
			var xrepl =0;
		}
		//ISLAMIC
		//andalucia
		else if(this.bannier =="Andalucian" || this.bannier =="Gharb"){
			var flag_num ="andalucian";
			var scale_x = 22.2;
			var scale_y = 18.2;
			var scale_z = 22.2;
			var rotate_palace = 0;
			var mintower =45;
			var xrepl =220;
		}
		//persian
		else if(this.bannier =="Turkish" || this.bannier =="Persian"){
			var flag_num ="sufi";
			var scale_x = 22.2;
			var scale_y = 18.2;
			var scale_z = 22.2;
			var rotate_palace = 0;
			var mintower =45;
			var xrepl =220;
		}
		//arab
		else if(this.bannier =="Maghreb" || this.bannier =="Ifriqiya" || this.bannier =="Misr" || this.bannier =="Mashriq" || this.bannier =="Hejaz" || this.bannier =="Najd"){
			var flag_num ="mosque";
			var scale_x = 22.2;
			var scale_y = 18.2;
			var scale_z = 22.2;
			var rotate_palace = 0;
			var mintower =45;
			var xrepl =220;
		}
		//DEFAULT
		else {
			var flag_num ="west";
			var scale_x = 10.0;
			var scale_y = 11.0;
			var scale_z = 10.0;
			var rotate_palace = 0;
			var mintower =0;
			var xrepl =0;
		}

        var dChurch = this;
        loadOBJModel(assetBaseUrl +"building/cathedral/","cathedral_"+flag_num+".obj",assetBaseUrl +"building/cathedral/","cathedral_"+flag_num+".mtl", (mesh) => {
            mesh.scale.x = scale_x;
            mesh.scale.y = scale_y;
            mesh.scale.z = scale_z;
            dChurch.position.x = this.pX + xrepl;
            dChurch.position.y = this.pY + mintower;
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
		this.bannier = bannier;
        this.init();
       
    }
}