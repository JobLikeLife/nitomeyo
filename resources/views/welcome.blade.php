<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, , initial-scale=1.0, user-scalable=no">
    <title>地图测试</title>

    
<style>
    #container {width:1000px; height: 600px; }
    </style>

</head>
<body>
    <!--地图容器-style="width:1000px; height:600px"-->
    <div id="container" ></div> 

    <div id="containerOne" style="width:500px; height:300px"></div>
    <div id="containerTwo" style="width:700px; height:300px"></div>


    <script type="text/javascript" src="https://webapi.amap.com/maps?v=2.0&key=0fdfb41960e9a53c219d45c776b77288&plugin=AMap.ToolBar"></script>

    

    <script type="text/javascript" >
    // ---地图初始化应该在地图容器div已经添加到DOM树之后
    var map = new AMap.Map('container', {
        mapStyle: 'amap://styles/2cb21694260c4351866be7e3360eb54f', //设置自定义地图的显示样式
        zoom:3.3,//---级别
        center: [121.611276,31.077731],//---中心点坐标
        //viewMode:'3D'//---使用3D视图
        //viewMode: '2D',  //设置地图模式
       /* 
        layers: [//---在地图初始化的时候通过layers属性为地图设置多个图层
            new AMap.TileLayer.Satellite(),
            new AMap.TileLayer.RoadNet()
        ],
       // zooms: [3,20],//---设置地图级别范围*/
        
    
    
        });

      /*/ 构造官方卫星、路网图层
        var layer1 = new AMap.TileLayer.Satellite();
        var layer2 =  new AMap.TileLayer.RoadNet();
        var layers = [
        layer1,
        layer2
        ]
    // 添加到地图上
        map.add(layers);*/


    </script>

    

</body>
</html>