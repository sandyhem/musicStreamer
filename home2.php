<!DOCTYPE html>
<html>
<head>
  <title>Audio Player with Seek Slider</title>
</head>
<body>
  <audio id="audioPlayer" controls>
    <source src="aval.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>

  <input type="range" id="seekSlider" value="0" step="0.01">
</body>



<script>
  // Get references to the audio player and seek slider
  const audioPlayer = document.getElementById('audioPlayer');
  const seekSlider = document.getElementById('seekSlider');

  // Add an event listener to the audio player to update the seek slider as the song plays
  audioPlayer.addEventListener('timeupdate', function() {
    const currentTime = audioPlayer.currentTime;
    const duration = audioPlayer.duration;
    const seekPosition = (currentTime / duration) * 100;
    seekSlider.value = seekPosition;
  });

  // Add an event listener to the seek slider to update the song position when seeking
  seekSlider.addEventListener('input', function() {
    const seekTime = (audioPlayer.duration * (seekSlider.value / 100));
    audioPlayer.currentTime = seekTime;
  });
</script>


</html>
