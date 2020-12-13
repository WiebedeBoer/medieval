class Pig extends THREE.Group {

    init (){

        var dAnimal = this;
        loadOBJModel(assetBaseUrl +"animal/pig/","Mesh_Pig.obj",assetBaseUrl +"animal/pig/","Mesh_Pig.mtl", (mesh) => {
            mesh.scale.x = 0.08;
            mesh.scale.y = 0.08;
            mesh.scale.z = 0.08;
            dAnimal.position.x = this.pX;
            dAnimal.position.y = this.pY;
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