<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Audio Recorder Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1>Audio Recorder Online</h1>
    <b><a href="1.php">Click to view previous saved recordings</a></b>
    <div id="controls">
  	 <button id="recordButton">Record</button>
  	 <button id="pauseButton" disabled>Pause</button>
  	 <button id="stopButton" disabled>Stop</button>
    </div>
    <div id="formats">Format: .wav </div>
  	<h3>Recordings</h3>	
  	<ol id="recordingsList"></ol>
  	<script src="js/recorder.js"></script>
  	<script src="js/app.js"></script>
    
  </body>
</html>
