<!DOCTYPE html>
<html>
<head>
	<title>教程 tutorial </title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.13/mediaelementplayer.min.css">
	<style type="text/css">
		body {
			margin: 0;
			padding: 0;
		}

		.video-container {
			display: flex;
			align-items: center;
			justify-content: center;
			height: 60vh;
			width: 70vw;
			margin: 0 auto;
		}

		video {
			max-width: 80%;
			max-height: 40%;
			display: flex;
			align-items: center;
			justify-content: center;
		}
	</style>
</head>
<body>
	<div class="video-wrapper">
		<video controls>
<source src="{{ asset('videos/nkcp.mp4')}}" autoplay type="video/mp4">
			<p>Your browser doesn't support HTML5 video. Here is a <a href="{{ asset('videos/nkcp.mp4')}}">link to the video</a> instead.</p>
		</video>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.13/mediaelement-and-player.min.js"></script>
	<script>
		$('video').mediaelementplayer();
	</script>
</body>
</html>
