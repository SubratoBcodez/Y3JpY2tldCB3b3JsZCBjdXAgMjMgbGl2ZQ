
 <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://jatiyatopic.xyz/live/blast.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>  Live Cast Your Own Channel:</title>
<script type="text/javascript" src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js">
</script> <script type="text/javascript" src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js"></script>
<style>.unmute {background: transparent;border: 2px solid #c2c2c2;padding: 5px;color: #ddd;width: 200px;}</style>
</head>
<body style="margin: 0px; background: #c60c20;"  oncontextmenu="return false">
    <div id="ad">
    <script type="text/javascript">
	atOptions = {
		'key' : '4aa41ce60bc4d8d026e0fe706b9221f3',
		'format' : 'iframe',
		'height' : 90,
		'width' : 728,
		'params' : {}
	};

</script></div>

<div id="player-wrapper"></div>
<script>
var playerElement = document.getElementById("player-wrapper");
var player = new Clappr.Player({
source: '//jatiyatopic.xyz/live/master.php?channel_id=asports',
mimeType: 'application/vnd.apple.mpegurl',

autoPlay: true,
height: '100vh',
width: '100%',
});
player.attachTo(playerElement);
player.play();
play();
</script>
<script>
function WSUnmute() {
        document.getElementById("UnMutePlayer").style.display="none";
        player.setVolume(70);
    }
</script>
<div id="UnMutePlayer" style="position: absolute; left: 20px; top: 15px; width: 250px; height: 45px; ">
<button  class="UnMute" onclick="WSUnmute()">CLICK UNMUTE STREAM</button>
</div>

<script type="text/javascript">
	atOptions = {
		'key' : 'f2ed7422b64a15c726c544c2ea4002ae',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};

</script>
