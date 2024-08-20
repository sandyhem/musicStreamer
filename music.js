
let i=2;
const songlist=[{name:"santhosh",song:2},
{name:"santhosh3",song:3},
{name:"santhosh5",song:4},
{name:"santhosh6",song:5}
];
let song=document.getElementById(songlist[i].song);
console.log(song);
let progress=document.getElementById("progress");
let ctrl=document.getElementById("play");

/*to go previous song*/
function back(){
  if(song.play()){
     song.pause();
  }
  
  song=document.getElementById(songlist[--i].song);
  console.log(song);
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
     
  song=document.getElementById(songlist[++i].song);
  console.log(song);
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
song.onloadeddata=function (){
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
progress.onchange=function (){
   song.play();
   song.currentTime=progress.value;
   ctrl.classList.add("fa-pause");
   ctrl.classList.remove("fa-play");
}
