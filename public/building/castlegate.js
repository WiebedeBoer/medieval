class CastleGate extends THREE.Group {

    init (){
		
		//var castle_num ="west";

        var dGate = this;
        loadOBJModel(assetBaseUrl +"building/castlegate/","castlegate_west.obj",assetBaseUrl +"building/castlegate/","castlegate_west.mtl", (mesh) => {
            mesh.scale.x = 63.0; //33.5
            mesh.scale.y = 20.2; //23.2
            mesh.scale.z = 62.0; //62.0
            dGate.position.x = this.pX;
            dGate.position.y = this.pY;
            dGate.position.z = this.pZ;
            dGate.rotation.y = this.yR;
            dGate.add(mesh);
            collidableMeshList.push(mesh);

        });
    }    
            
    constructor(pX,pY,pZ,yR){
        super();
        this.pX = pX;
        this.pY = pY;
        this.pZ = pZ;
        this.yR = yR;
        this.init();
       
    }
}