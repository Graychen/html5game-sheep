<?php
/*
陈家辉制作
*/
if(substr_count($_SERVER['HTTP_ACCEPT_ENCODING'],'gzip')){
    ob_start('ob_gzhandler');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>绵羊快跑</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
<script type="text/javascript" src="js/game.js"></script>
<noscript><iframe scr="*.htm"></iframe></noscript>
<link rel="stylesheet" type="text/css" media="all" href="css/index.css" />
</head>
<body oncontextmenu="return false">
<div id="container">
      <div id="info">
        <div id="wolf">Wolfs:<span id="wolfCounter">0</span></div>
        <div id="scorer">&nbsp;<!--Score:<span id="scoreCounter">0</span>--></div>
     </div>
     <div id="content">
     <div id="mask"></div>
     <div id="option">
     <div id="result"></div>
         <ul id="menu">
            <li id="start"><span>Start Game</span></li>
            <li id="helpMe"><span >Help</span></li>
        </ul>
        <div id="help">
            <ol>
                <li>按键：W、S、A、D 分别控制 上、下、左、右。</li>
                <li>说明：通过控制绵羊向四周跑动，避开狼群的追捕。</li>
                <li>胜利条件：坚持时间越长，狼群出现的数量越多，得分越高。</li>
                <li>作者：Jamin</li>
            </ol>
        </div>
     </div>
     <canvas id="map" width="800" height="600">
         你的浏览器不支持HTML5！建议使用IE9+、Chrome、Opera、FireFox、Safari 等浏览器 
     </canvas>
     </div>
</div>
<div id="footer">
<script src="http://s22.cnzz.com/stat.php?id=3133128&web_id=3133128&show=pic" language="JavaScript"></script>
<a href="http://www.51.la/?4116055" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/4116055.asp" style="border:none" /></a>
</div>
</body>
</html>