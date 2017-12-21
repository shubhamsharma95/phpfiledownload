<!DOCTYPE html>
<html>
<head>
    <title>html5 audio player on iPhone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
audio::-internal-media-controls-download-button {
    display:none;
}
audio::-webkit-media-controls-enclosure {
    overflow:hidden;
}
audio::-webkit-media-controls-panel {
    width: calc(100% + 33px);
}  
</style>
</head>
<body>
<audio controls preload="auto" style="width:100%;">
    <source src="seek.php?file=audio.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio><br />
</body>
</html>