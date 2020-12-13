class Camel extends THREE.Group {

    init (){

        var dAnimal = this;
        loadOBJModel(assetBaseUrl +"animal/dromedary/","DromedaryCamels.obj",assetBaseUrl +"animal/dromedary/","DromedaryCamels.mtl", (mesh) => {
            mesh.scale.x = 1.7;
            mesh.scale.y = 1.7;
            mesh.scale.z = 1.7;
            dAnimal.position.x = this.pX;
            dAnimal.position.y = 0;
            dAnimal.position.z = this.pZ;
            dAnimal.rotation.y = Math.PI / 2;
            dAnimal.add(mesh);
            collidableMeshList.push(mesh);

        });
    }    
            
    constructor(pX,pZ){
        super();
        this.pX = pX;
        this.pZ = pZ;
        this.init();
    }
}