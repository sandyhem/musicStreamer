<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>playlist 7 sense</title>
    <style>
       .songs p{
       cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="songs">
        <img src="7 sense.jpg"><br>
           <!--7sense-->
<button onclick='myaudio("song-1")'>this is song 1</button>
<audio id="song-1">
    <source src="Innum-Enna-Thozha.mp3" type="audio/mpeg">
    your browser doesnotthe audio.
</audio>

<button onclick='myaudio("song-2")'>this is song 2</button>
<audio id="song-2">
    <source src="Oh-Ringa-Ringa.mp3" type="audio/mpeg">
    your browser doesnotthe audio.
</audio>

<button onclick='myaudio("song-3")'>this is song 3</button>
<audio id="song-3">    
    <source src="Yellae-Lama.mp3" type="audio/mpeg">
    your browser doesnotthe audio.
</audio>

<button onclick='myaudio("song-4")'>this is song 4</button>
<audio id="song-4">
    <source src="Mun-Andhi.mp3" type="audio/mpeg">
    your browser doesnotthe audio.
</audio>

<button onclick='myaudio("song-5")'>this is song 5</button>
<audio id="song-5">
    <source src="The-Rise-of-Damo.mp3" type="audio/mpeg">
    your browser doesnotthe audio.
</audio>

<button onclick='myaudio("song-6")'>this is song 6</button>
<audio id="song-6">
    <source src="Yamma-Yamma.mp3" type="audio/mpeg">
    your browser doesnotthe audio.
</audio>
    </div>
    <script>
        function myaudio(audio){
song.pause();
let progress=document.getElementById("progress");
let song=document.getElementById(audio);
 let ctrl=document.getElementById("play");

 /*to go previous song*/
 function back(){
   if(song.play()){
      song.pause();
   }

   song=song.previousElementSibling;
   song.onloadedmetadata=function(){
   progress.max=song.duration;
   progress.value=song.currentTime; 
   }
   if(song.play()){
      setInterval(()=>{
          progress.value=song.currentTime;
      },500)}

      progress.onchange=function(){
         song.play();
         song.currentTime=progress.value;
         ctrl.classList.add("fa-pause");
         ctrl.classList.remove("fa-play");
      }
   

   pausePlay();

}

   /*to go to next song*/
   function next(){
   
      if(song.play()){
         song.pause();
      }
      
   song=song.nextElementSibling;
   song.onloadeddata=function(){
      progress.max=song.duration;
      progress.value=song.currentTime; 
   }
   if(song.play()){
      setInterval(()=>{
          progress.value=song.currentTime;
      },500)}
      progress.onchange=function(){
         song.play();
         song.currentTime=progress.value;
         ctrl.classList.add("fa-pause");
         ctrl.classList.remove("fa-play");
      }
    pausePlay();
    
  }

/*one*/
 song.onloadeddata=function(){
    progress.max=song.duration;
    progress.value=song.currentTime; 
 }/*set ranger and audio ranger is equal*/


 /*two*/
 function pausePlay(){
    if(ctrl.classList.contains("fa-pause")){
        song.pause();
        ctrl.classList.remove("fa-pause");
        ctrl.classList.add("fa-play");
    }
    else{
        song.play();
        ctrl.classList.remove("fa-play");
        ctrl.classList.add("fa-pause");
    }
 }
 /*if pause then change icon and play and viceversa.*/
 
 /*to work ranger as the audio ranger*/
 if(song.play()){
    setInterval(()=>{
        progress.value=song.currentTime;
    },500)
 }/*to upadate the range */
 
 /*if we need to make the change in range it need to work*/
 progress.onchange=function(){
    song.play();
    song.currentTime=progress.value;
    ctrl.classList.add("fa-pause");
    ctrl.classList.remove("fa-play");
 }

}
    </script>
</body>
</html>