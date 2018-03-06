<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>sskkeettcchh</title>
<style type="text/css">
<!--
body { background-color: #F3D8C3;}
div {position: absolute;}
-->
</style>
</head>
<body>


<?php
//An array with all images of the sufi stars
$sufi = array("images2/1_a.png", "images2/1_b.png", "images2/1_c.png", "images/8_b.png", "images/8_c.png","images/3_a.png", "images/3_b.png", "images/3_c.png", "images/8_a.png", "images/1_a.png", "images/1_b.png", "images/1_c.png", "images/2_a.png", "images/2_b.png", "images/2_c.png", "images/3_a.png", "images/3_b.png", "images/3_c.png",  "images/5_a.png", "images/5_b.png", "images/5_c.png", "images/6_a.png", "images/6_b.png", "images/6_c.png", "images/8_a.png", "images/8_b.png", "images/8_b.png", "images/8_b.png", "images/8_c.png", "images/9_a.png", "images/9_b.png", "images/9_c.png", "images/4_a.png", "images/4_b.png", "images/4_c.png", "images/10_a.png", "images/10_b.png");

//Count the array
$smax = (count($sufi)-1);

for ($i=0; $i <= 20; $i++){
echo "<div style=\"left: 300px; top: 200px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 200px; top: 300px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 300px; top: 300px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 400px; top: 300px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 100px; top: 400px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 200px; top: 400px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 300px; top: 400px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 400px; top: 400px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 500px; top: 400px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 200px; top: 500px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 300px; top: 500px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 400px; top: 500px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 300px; top: 600px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";

echo "<div style=\"left: 800px; top: 200px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 700px; top: 300px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 800px; top: 300px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 900px; top: 300px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 600px; top: 400px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 700px; top: 400px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 800px; top: 400px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 900px; top: 400px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 1000px; top: 400px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 700px; top: 500px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 800px; top: 500px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 900px; top: 500px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";
echo "<div style=\"left: 800px; top: 600px\"><img src=" . $sufi[rand(0,$smax)] . " style=\"z-index: 1\"></div>";

}

?>


</body>
</html>