class RampartGate extends THREE.Group {

    init (){
		
		//var castle_num ="west";

        var dGate = this;
        loadOBJModel(assetBaseUrl +"building/castlegate/","rampartgate.obj",assetBaseUrl +"building/castlegate/","rampartgate.mtl", (mesh) => {
            mesh.scale.x = 36.0; 
            mesh.scale.y = 25.0; 
            mesh.scale.z = 80.0; 
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