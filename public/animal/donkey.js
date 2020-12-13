class Donkey extends THREE.Group {

    init (){

        var dAnimal = this;
        loadOBJModel(assetBaseUrl +"animal/donkey/","Donkey.obj",assetBaseUrl +"animal/donkey/","Donkey.mtl", (mesh) => {
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
            
    constructor(pX,pY,pZ){
        super();
        this.pX = pX;
        this.pY = pY;
        this.pZ = pZ;
        this.init();
    }
}