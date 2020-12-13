class Trout extends THREE.Group {

    init (){

        var dAnimal = this;
        loadOBJModel(assetBaseUrl +"animal/trout/","NOVELO_TROUT.obj",assetBaseUrl +"animal/trout/","NOVELO_TROUT.mtl", (mesh) => {
            mesh.scale.set (0.01, 0.01, 0.01);
            dAnimal.position.x = this.pX;
            dAnimal.position.y = this.pY;
            dAnimal.position.z = this.pZ;
            dAnimal.rotation.x = this.pXr;
            dAnimal.rotation.y = this.pYr;
            dAnimal.rotation.z = this.pZr;
            dAnimal.add(mesh);

        });
    }    
            
    constructor(pX,pY,pZ,pXr,pYr,pZr){
        super();
        this.pX = pX;
        this.pY = pY;
        this.pZ = pZ;
        this.pXr = pXr;
        this.pYr = pYr;
        this.pZr = pZr;
        this.init();
    }
}