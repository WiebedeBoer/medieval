class Chicken extends THREE.Group {

    init (){

        var dAnimal = this;
        loadOBJModel(assetBaseUrl +"animal/chicken/","Mesh_Hen.obj",assetBaseUrl +"animal/chicken/","Mesh_Hen.mtl", (mesh) => {
            mesh.scale.x = 0.05;
            mesh.scale.y = 0.05;
            mesh.scale.z = 0.05;
            dAnimal.position.x = this.pX;
            dAnimal.position.y = 2.0;
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