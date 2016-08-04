<script language="JavaScript" type="text/javascript"> 
 document.write('<script language="JavaScript" src="http://www.myweather2.com/Plugins/weather/general.ashx?type=js&n=1&t=24&x=f1_day&inc=False&w=230&h=200&headerbgcolor=8F080E&headertextcolor=ffffff&temp_unit=2&windspeed_unit=1&puref=a1162017-00d8-49ec-8086-6a40cbe0b9fe&cb=' + Math.random() + '" type="text/javascript"><\/scr' + 'ipt>');
 </script><noscript><a href="http://www.myweather2.com/City-Town/United-States-Of-America/Hawaii/Honolulu.aspx" title="Honolulu">Honolulu weather forecast from Weather2</a></noscript>
 

<div id="demo"></div>
	<br>================
	<br>
	<div id="agent"></div>
	<br>================
	<br>
	<script>

	// var keys = Object.getOwnPropertyNames( window ), value;

	// for( var i = 0; i < keys.length; ++i ) {
	//     value = window[ keys[ i ] ];
	//     document.write( value );
	// }
	// document.write("/////////////////////////////////");


		var w = window.innerWidth
		document.documentElement.clientWidth
		document.body.clientWidth;

		var h = window.innerHeight
		document.documentElement.clientHeight
		document.body.clientHeight; 
		var x = document.getElementById("demo");
		x.innerHTML = "Browser inner window width: " + w + ", height: " + h + ".";

		var agent = "User-agent header sent: " + navigator.userAgent;
    	document.getElementById("agent").innerHTML = agent;


	</script>
	



<?php
   echo "==========REQUEST================================<br>";
   print_r($_REQUEST);

   // while (list($var,$value) = each ($_REQUEST)) {
   //    echo "$var => $value <br />";
   // }

   echo "==========SESSION================================<br>";
   //print_r($_SESSION);
 //   while (list($var,$value) = each ($_SESSION)) {
 //   		echo "$var => $value <br />";
	// }
   echo "=========ENVIRONMENT================================<br>";
   while (list($var,$value) = each ($_ENV)) {
      echo "$var => $value <br />";
   }
   echo "==========SERVER================================<br>";
   while (list($var,$value) = each ($_SERVER)) {
      echo "$var => $value <br />";
   }
   //echo "==========GLOBALS================================<br>";
   //print_r($GLOBALS);  //DON'T USE- Prints WAY too much
 
 
?>