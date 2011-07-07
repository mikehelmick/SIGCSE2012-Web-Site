<?php
 $title = "SIGCSE 2012 - Attendees";
 $onload = "pageLoad('attendees', 'attendeesGeneral');";
 include("../parts/top.php");
?>
<div class="SectionHeader"><div class="Full">
<h1>SIGCSE 2012 - Information for Attendees</h1>
</div></div>

<div class="GoodMessage">Information for SIGCSE 2012 attendees is being collected and will be published when we have details. Check back often!</div>

<table cellspacing="25px" width="99%">
<tr>
 <td valign="top" align="middle">
	             <script src="http://widgets.twimg.com/j/2/widget.js" type="text/javascript"></script>
	<script type="text/javascript">
	new TWTR.Widget({
	  version: 2,
	  type: 'profile',
	  rpp: 4,
	  interval: 6000,
	  width: 250,
	  height: 300,
	  theme: {
	    shell: {
	      background: '#333333',
	      color: '#ffffff'
	    },
	    tweets: {
	      background: '#000000',
	      color: '#ffffff',
	      links: '#4aed05'
	    }
	  },
	  features: {
	    scrollbar: true,
	    loop: false,
	    live: true,
	    hashtags: true,
	    timestamp: true,
	    avatars: true,
	    behavior: 'all'
	  }
	}).render().setUser('sigcse2012').start();
	</script>
 </td>
 <td valign="top" align="center">
<div style='width: 240px; height: 420px; background-image: url( http://vortex.accuweather.com/adcbin/netweather_v2/backgrounds/spring2_240x420_bg.jpg ); background-repeat: no-repeat; background-color: #607041;' ><div id='NetweatherContainer' style='height: 405px;' ><script src='http://netweather.accuweather.com/adcbin/netweather_v2/netweatherV2ex.asp?partner=netweather&tStyle=normal&logo=1&zipcode=27602&lang=eng&size=12&theme=spring2&metric=0&target=_self'></script></div><div style='text-align: center; font-family: arial, helvetica, verdana, sans-serif; font-size: 10px; line-height: 15px; color: #FDEA11;' ><a style='font-size: 10px; color: #FDEA11' href='http://www.accuweather.com/us/nc/raleigh/27602/city-weather-forecast.asp?partner=accuweather' >Weather Forecast</a> | <a style='color: #FDEA11' href='http://www.accuweather.com/maps-satellite.asp' >Weather Maps</a> | <a style='color: #FDEA11' href='http://www.accuweather.com/index-radar.asp?partner=accuweather&zipcode=27602' >Weather Radar</a></div></div>
 </td>
</tr>
</table>

<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>