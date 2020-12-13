class Cow extends THREE.Group {

    init (){
		
		if(this.bannier !="none"){
			var flag_num = this.bannier;
		}
		else {
			var flag_num ="Friesian";
		}

        var dAnimal = this;
        loadOBJModel(assetBaseUrl +"animal/cow/","Cow_"+flag_num+".obj",assetBaseUrl +"animal/cow/","Cow_"+flag_num+".mtl", (mesh) => {
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