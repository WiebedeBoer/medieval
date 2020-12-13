class Horse extends THREE.Group {

    init (){
		
		//hobelar
		if(this.bannier =="Scottish" || this.bannier =="Pictish"  || this.bannier =="Irish"){
			var flag_num ="Hobelar";
		}
		else if(this.bannier =="English" || this.bannier =="Breton" || this.bannier =="Welsh"){
			var flag_num ="Hobelar";
		}
		//andalusian
		else if(this.bannier =="Castillian" || this.bannier =="Leonese" || this.bannier =="Catalan" || this.bannier =="Aragonese" || this.bannier =="Navarrese" || this.bannier =="Galician"){
			var flag_num ="Andalusian";
        }
        else if(this.bannier =="Andalucian" || this.bannier =="Gharb"){
			var flag_num ="Andalusian";
        }
        //arab
		else if(this.bannier =="Turkish" || this.bannier =="Persian"){
			var flag_num ="Arab";
		}
		else if(this.bannier =="Maghreb" || this.bannier =="Ifriqiya" || this.bannier =="Misr" || this.bannier =="Mashriq" || this.bannier =="Hejaz" || this.bannier =="Najd"){
			var flag_num ="Arab";
        }
        //default friesian
        else {
            var flag_num ="Friesian";
        }

        var dAnimal = this;
        loadOBJModel(assetBaseUrl +"animal/horse/","Horse_"+flag_num+".obj",assetBaseUrl +"animal/horse/","Horse_"+flag_num+".mtl", (mesh) => {
            mesh.scale.x = 1.3;
            mesh.scale.y = 1.3;
            mesh.scale.z = 1.3;
            dAnimal.position.x = this.pX;
            dAnimal.position.y = 0;
            dAnimal.position.z = this.pZ;
            dAnimal.add(mesh);
            collidableMeshList.push(mesh);

        });
    }    
            
    constructor(pX,pY,pZ,bannier){
        super();
        this.pX = pX;
        this.pY = pY;
        this.pZ = pZ;
		this.bannier = bannier;
        this.init();
    }
}