<!--
original: https://github.com/purpletheblaze/viewfinder-2005

the original repo got deleted so shotouts to kamtape for restoring it!
-->
<?php
$v = "";
if (!isset($_GET["v"])) {
	http_response_code(404);
	exit;
} else {
	$v = $_GET["v"];
}
?>
<link rel="stylesheet" href="player.css" />
<script src="player.js"></script>
<div class="player" id="playerBox">
	<div class="mainContainer">
		<div class="playerScreen">
			<div class="playbackArea">
				<div class="videoContainer">
					<video class="videoObject" id="video">
						<source src="" />
					</video>
				</div>
			</div>
			<div class="watermark">
				<img src="resource/watermark.png" height="35px" />
			</div>
		</div>
		<div class="controlBackground">
			<div class="controlContainer">
				<div class="lBtnContainer">
					<div class="button" id="playButton">
						<img src="resource/play.png" id="playIcon" class="" />
						<img src="resource/pause.png" class="hidden" id="pauseIcon" />
					</div>
				</div>
				<div class="centerContainer">
					<div class="seekbarElementContainer">
						<progress class="seekProgress" id="seekProgress" value="18" min="0" max="467"></progress>
					</div>
					<div class="seekbarElementContainer">
						<input class="seekHandle" id="seekHandle" value="0" min="0" step="1" type="range" max="467" />
					</div>
				</div>
				<div class="rBtnContainer">
					<div class="button" id="muteButton">
						<img src="resource/mute.png" id="muteIcon" />
						<img src="resource/unmute.png" class="hidden" id="unmuteIcon" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="aboutBox hidden" id="aboutBox">
		<div class="aboutBoxContent">
			<div class="aboutHeader">Viewfinder</div>
			<div class="aboutBody">
				<div>
					Version 1.0<br />
					<br />
					2005-Style HTML5 player<br />
					<br />
					by purpleblaze<br />
					preserved by lime360 for use in yt-2005-watch
				</div>
			</div>
			<button id="aboutCloseBtn">Close</button>
		</div>
	</div>
	<div class="contextMenu hidden" id="playerContextMenu" style="top: 452px; left: 504px; display: none;">
		<div class="contextItem" id="contextMute">
			<span>Mute</span>
			<div id="muteTick" class="tick hidden"></div>
		</div>
		<div class="contextItem" id="contextLoop">
			<span>Loop</span>
			<div id="loopTick" class="tick hidden"></div>
		</div>
		<div class="contextSeparator"></div>
		<div class="contextItem" id="contextAbout">About</div>
	</div>
</div>