class Inn extends THREE.Group {

    init (){

        if(this.culture =="west"){
            var marketColor ="west";
        }
        else {
            var marketColor ="east";
        }

        var dInn = this;
        loadOBJModel(assetBaseUrl +"building/inn/","timberframedinn.obj",assetBaseUrl +"building/inn/","timberframedinn.mtl", (mesh) => {
            mesh.scale.x = 10.00;
            mesh.scale.y = 8.00;
            mesh.scale.z = 10.00;
            dInn.position.x = this.pX;
            dInn.position.y = this.pY;
            dInn.position.z = this.pZ;
            dInn.rotation.y = this.rY;
            dInn.add(mesh);

        });
    }    
            
    constructor(pX,pY,pZ,rY,culture){
        super();
        this.pX = pX;
        this.pY = pY;
        this.pZ = pZ;
        this.rY = rY;
        this.culture = culture;
        this.init();
       
    }
}