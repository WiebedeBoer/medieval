class Rooster extends THREE.Group {

    init (){

        var dAnimal = this;
        loadOBJModel(assetBaseUrl +"animal/rooster/","Rooster.obj",assetBaseUrl +"animal/rooster/","Rooster.mtl", (mesh) => {
            mesh.scale.x = 1.2;
            mesh.scale.y = 1.2;
            mesh.scale.z = 1.2;
            dAnimal.position.x = this.pX;
            dAnimal.position.y = 0.1;
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