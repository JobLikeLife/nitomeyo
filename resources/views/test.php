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
    <script type="text/javascript" src="https://webapi.amap.com/maps?v=2.0&key=0fdfb41960e9a53c219d45c776b77288&plugin=AMap.ToolBar"></script>

    <script type="text/javascript" >
    // ---地图初始化应该在地图容器div已经添加到DOM树之后
    var map = new AMap.Map('container', {
        zoom:18,//---级别
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
    
    /*/---实时路况图层
    var trafficLayer = new AMap.TileLayer.Traffic({
        zIndex: 10
    });
    map.add(trafficLayer);//添加图层到地图*/
    
    /*
    var marker = new AMap.Marker({
        position:[121.611276,31.077731]//---点标记 Marker位置
    })
    map.add(marker);//添加到地图*/

/*---添加折线
    var lineArr = [
        [116.368904, 39.913423],
        [116.382122, 39.901176],
        [116.387271, 39.912501],
        [116.398258, 39.904600]
    ];
    var polyline = new AMap.Polyline({
        path: lineArr,          //设置线覆盖物路径
        strokeColor: "#3366FF", //线颜色
        strokeWeight: 5,        //线宽
        strokeStyle: "solid",   //线样式
    });
    map.add(polyline);*/

/*---点标记绑定click事件来简单了解事件系统和信息窗体的基本使用
    var infoWindow = new AMap.InfoWindow({ //创建信息窗体
        isCustom: true,  //使用自定义窗体
        content:'<div>这里是鹤沙航城地铁站</div>', //信息窗体的内容可以是任意html片段
        offset: new AMap.Pixel(16, -45)
    });
    var onMarkerClick  =  function(e) {
        infoWindow.open(map, e.target.getPosition());//打开信息窗体
        //e.target就是被点击的Marker
    } 
    var marker = new AMap.Marker({
         position: [121.611276,31.077731]
    })
    map.add(marker);
    marker.on('click',onMarkerClick);//绑定click事件*/

    AMap.plugin('AMap.ToolBar',function(){//异步加载插件
        var toolbar = new AMap.ToolBar();
        map.addControl(toolbar);
    });

    var mapSize = map.getSize();//获取地图大小，返回的是地图容器的像素大小
  var width = mapSize.width;
  var height = mapSize.height;

  var marker = new AMap.Marker({
  position: [121.611276,31.077731],
        icon: new AMap.Icon({            
            size: new AMap.Size(40, 50),  //图标的大小
            image: "https://webapi.amap.com/theme/v1.3/images/newpc/way_btn2.png",
            imageOffset: new AMap.Pixel(0, -60)
        })        
  });
  map.add(marker)

  /*/根据覆盖物范围调整视野
// 创建一条折线覆盖物
var path = [
    new AMap.LngLat("116.368904","39.913423"),
    new AMap.LngLat("116.382122","39.901176"),
    new AMap.LngLat("116.387271","39.912501"),
    new AMap.LngLat("116.398258","39.904600")
];
var polyline = new AMap.Polyline({
    path: path,  
    borderWeight: 2, // 线条宽度，默认为 1
    strokeColor: 'red', // 线条颜色
    lineJoin: 'round' // 折线拐点连接处样式
});
map.add(polyline);

// 创建两个点标记
var marker1 = new AMap.Marker({
    position: new AMap.LngLat(117.39, 39.9),   // 经纬度对象，如 new AMap.LngLat(116.39, 39.9); 也可以是经纬度构成的一维数组[116.39, 39.9]
    title: '北京'
});
var marker2 = new AMap.Marker({
    position: new AMap.LngLat(118.39, 39.9),   // 经纬度对象，如 new AMap.LngLat(116.39, 39.9); 也可以是经纬度构成的一维数组[116.39, 39.9]
    title: '北京'
});
map.add(marker1);
map.add(marker2);

// 自动适配到合适视野范围
// 无参数，默认包括所有覆盖物的情况
map.setFitView();
// 传入覆盖物数组，仅包括polyline和marker1的情况
map.setFitView([marker1,marker2]);
 */


</script>
</body>
</html>