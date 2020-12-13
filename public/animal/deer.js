class Deer extends THREE.Group {

    init (){

        var dAnimal = this;
        loadOBJModel(assetBaseUrl +"animal/deer/","deer.obj",assetBaseUrl +"animal/deer/","deer.mtl", (mesh) => {
            mesh.scale.x = 40.0;
            mesh.scale.y = 40.0;
            mesh.scale.z = 40.0;
            dAnimal.position.x = this.pX;
            dAnimal.position.y = 13;
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