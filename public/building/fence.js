class Fence extends THREE.Group {

    init (){

        var dFence = this;
        loadOBJModel(assetBaseUrl +"building/fence/","fence.obj",assetBaseUrl +"building/fence/","fence.mtl", (mesh) => {
            mesh.scale.x = 4.2;
            mesh.scale.y = 3.6;
            mesh.scale.z = 4.2;
            dFence.position.x = this.pX;
            dFence.position.y = this.pY;
            dFence.position.z = this.pZ;
            dFence.rotation.y = this.pYr;
            dFence.add(mesh);

        });
    }    
            
    constructor(pX,pY,pZ,pYr){
        super();
        this.pX = pX;
        this.pY = pY;
        this.pZ = pZ;
        this.pYr = pYr;
        this.init();
    }
}