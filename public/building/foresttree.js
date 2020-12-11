class Foresttree extends THREE.Group {

    init (){

        if(this.climate =="palm"){
            var dTree = this;
            loadOBJModel(assetBaseUrl +"building/palmtree/","palmtree.obj",assetBaseUrl +"building/palmtree/","palmtree.mtl", (mesh) => {
                mesh.scale.x = 1.2;
                mesh.scale.y = 1.2;
                mesh.scale.z = 1.2;
                dTree.position.x = this.pX;
                dTree.position.y = this.pY;
                dTree.position.z = this.pZ;
                dTree.add(mesh);
                collidableMeshList.push(mesh);
            });
        }
        else {
            var dTree = this;
            loadOBJModel(assetBaseUrl +"building/oaktree/","oaktree.obj",assetBaseUrl +"building/oaktree/","oaktree.mtl", (mesh) => {
                mesh.scale.x = 4.0;
                mesh.scale.y = 4.0;
                mesh.scale.z = 4.0;
                dTree.position.x = this.pX;
                dTree.position.y = this.pY;
                dTree.position.z = this.pZ;
                dTree.add(mesh);
                collidableMeshList.push(mesh);
            });
        }

    }    
            
    constructor(pX,pY,pZ,climate){
        super();
        this.pX = pX;
        this.pY = pY;
        this.pZ = pZ;
        this.climate = climate;
        this.init();
    }
}