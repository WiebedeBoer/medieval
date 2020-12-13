class Pheasant extends THREE.Group {

    init (){

        var dAnimal = this;
        loadOBJModel(assetBaseUrl +"animal/pheasant/","PheasantsRingNecked.obj",assetBaseUrl +"animal/pheasant/","PheasantsRingNecked.mtl", (mesh) => {
            mesh.scale.x = 0.3;
            mesh.scale.y = 0.3;
            mesh.scale.z = 0.3;
            dAnimal.position.x = this.pX;
            dAnimal.position.y = 1.0;
            dAnimal.position.z = this.pZ;
            dAnimal.add(mesh);
            collidableMeshList.push(mesh);

        });
    }    
            
    constructor(pX,pY,pZ){
        super();
        this.pX = pX;
        this.pY = pY;
        this.pZ = pZ;
        this.init();
    }
}