class Duck extends THREE.Group {

    init (){

        var dAnimal = this;
        loadOBJModel(assetBaseUrl +"animal/mallard_duck/","MallardDuck.obj",assetBaseUrl +"animal/mallard_duck/","MallardDuck.mtl", (mesh) => {
            mesh.scale.x = 1.5;
            mesh.scale.y = 1.5;
            mesh.scale.z = 1.5;
            dAnimal.position.x = this.pX;
            dAnimal.position.y = 0.1;
            dAnimal.position.z = this.pZ;
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