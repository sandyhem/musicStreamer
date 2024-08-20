<!DOCTYPE html>
<html lang="en">
    <?php
    include("connect.php");
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7SERIES</title>
    <link rel="stylesheet" href="liked.css">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href=
     "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
      
         <!-- Bootstrap Font Icon CSS -->
         <link rel="stylesheet" href=
     "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
     <script src="https://kit.fontawesome.com/8cef4fe53d.js" crossorigin="anonymous"></script>
<style>
    input{
        color:black;
    }
</style>


</head>
<body>
    <div class="cont">
    <div class="sidebar">
        <div class="bar1">
           <a href="home.php"><li><i class="bi bi-house-fill"></i></li></a> <br>
            <a href="Mysearch.php"><li><i class="bi bi-search"></li></i></a>
        </div>
        <div class="bar2">
            <div class="bar21">
            <a href="Mylibrary.php"><li><i class="bi bi-layers-fill"></i></li></a><br>
                <a href="Myliked.php"><li> <i class="bi bi-heart-fill"></i></li></a><br>
                <a href="MYqueue.php"><li> <i class="fa-solid fa-guitar" style="color: #dbf5f1"></i></li></a>
            </div>
            
            <div class="recents" id="recents"><!--for songs recents-->
                
            </div>
       
        </div>
     
    </div>
    <div class="mainbar">
        <div class="head">
        <div class="heart">
            <div class="box">
            <i class="bi bi-house-fill"></i>
            </div>
        </div>
        <div class="liked">
            <h4>Welcome to MELOMIX</h4>
            <h1>HOME</h1>
        </div>
     
        </div>
        <div class="body">
            <div class="boxes" id="loc">
            <?php

$sql = "SELECT id, path, image, artist, name FROM gallery";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<div class='box'>
          <div class='img'><img src='" . $row["image"] . "'></div>
          <h5>" . $row["name"] . "</h5>
          <p onclick='playmysong(\"" . $row["id"] . "\")'><i class='fa-solid fa-music'></i></p>
          <p onclick='addtoqueue(\"" . $row["id"] . "\")'><i class='fa-solid fa-list'></i></p>
          <p onclick='likedsongs(\"" . $row["id"] . "\")'><i class='fa-solid fa-heart'></i></p>
          <p onclick='playlist(\"" . $row["id"] . "\")'><i class='fa-solid fa-folder-open'></i></p>
        </div>";
  }
} else {
  echo "0 results";
}

mysqli_close($connect);
?>
        </div>
        </div>
        <div class="bottomplayer">
            <div class="mlogo">
                <div class="line"></div><!--this is transition-->
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="img">
                <div class="photo"> <img src="topmix3.jpg" id="pimage" alt="img1"></div>
                <div class="name" id="pname">
                    <p>the song goes here</p>
                </div>
                <div class="like" id="plike"> <i class="fa-solid fa-heart"></i></div>
            </div>
            <div class="range">
                <div class="controls">
                    <div class="queue"><i class="fa-solid fa-align-justify" id="queue" onclick="setter()"></i></div>
                    <div class="back"> <i class="fa-solid fa-backward-step" id="back" onclick="back1()"></i></div>
                    <div class="play"> <i class="fa-solid fa-play" id="play" onclick="pausePlay()"></i></div>
                    <div class="next"><i class="fa-solid fa-forward-step" id="next" onclick="next1()"></i></div>
                    <div class="loop" > <i class="fa-solid fa-arrow-rotate-left" id="loop" onclick="loop()"></i>
                    </div>
                </div>
                <!-- Seek slider -->
                <div class="seek-slider">
        <input type="range" id="seek" min="0" step="1" value="0">
        <span id="curtime">0:00</span> <!-- Display current time -->
        <span id="duration">0:00</span> <!-- Display total duration -->
    </div>
        <!-- Volume slider -->
        <div class="volume-slider">
            <i class="bi bi-volume-down"></i>
            <input type="range" id="volume" min="0" max="1" step="0.01" value="1">
            <i class="bi bi-volume-up"></i>
        </div>
    </div>
            </div>
            <div class="others">
            </div>
        </div>
    </div>
    </div>
         
<script>
    const songlist=[
    /*here starts the manithan*/
    {
        id:0,
        path:"Kondattam.mp3",
        image:"mani.jpg",
        artist:"santhoshnarayanan",
        name:"Kondattam"
    },
    
    {
        id:1,
        path:"Mun-Sellada.mp3",
        image:"mani.jpg",
        artist:"santhoshnarayanan",
        name:"Mun-Sellada"
    },
    
    {
        id:2,
        path:"Poi-Vazhva.mp3",
        image:"mani.jpg",
        artist:"santhoshnarayanan",
        name:"Poi-Vazhva"
    },
    {
        id:3,
        path:"Aval.mp3",
        image:"mani.jpg",
        artist:"santhoshnarayanan",
        name:"Aval"
    },
    {
        id:4,
        path:"Adho-Manithan-Theme.mp3",
        image:"mani.jpg",
        artist:"santhoshnarayanan",
        name:"Adho-Manithan"
    },
    
    //vaaranam aayiram
    {
        id:5,
        path:"Adiyae-Kolluthey-MassTamilan.com.mp3",
        image:"va.jpg",
        artist:"Harris Jayaraj",
        name:"Adiyae-Kolluthey"
    },
    {
        id:6,
        path:"Annul-Maelae-MassTamilan.com.mp3",
        image:"va.jpg",
        artist:"Harris Jayaraj",
        name:"Annul-Maelae"
    },
    {
        id:7,
        path:"Ava-Enna-Enna-MassTamilan.com.mp3",
        image:"va.jpg",
        artist:"Harris Jayaraj",
        name:"Ava-Enna-Enna"
    },
    {
        id:8,
        path:"Mundhinam-Parthene-MassTamilan.com.mp3",
        image:"va.jpg",
        artist:"Harris Jayaraj",
        name:"Mundhinam-Parthene"
    },
    {
        id:9,
        path:"Nenjukkul-Peidhidum-MassTamilan.com.mp3",
        image:"va.jpg",
        artist:"Harris Jayaraj",
        name:"Nenjukkul-Peidhidum"
    },
    {
        id:10,
        path:"Oh-Shanthi-Shanthi-MassTamilan.com.mp3",
        image:"va.jpg",
        artist:"Harris Jayaraj",
        name:"Oh-Shanthi-Shanthi"
    },
    {
        id:11,
        path:"Ragasiyam-MassTamilan.com.mp3",
        image:"va.jpg",
        artist:"Harris Jayaraj",
        name:"Ragasiyam"
    },
    {
        id:12,
        path:"Yethi-Yethi-MassTamilan.com.mp3",
        image:"va.jpg",
        artist:"Harris Jayaraj",
        name:"Yethi-Yethi"
    },
    
    //7 aum arivu
    {
        id:13,
        path:"Innum-Enna-Thozha.mp3",
        image:"7.jpg",
        artist:"Harris Jayaraj",
        name:"Innum-Enna-Thozha"
    },
    {
        id:14,
        path:"Mun-Andhi.mp3",
        image:"7.jpg",
        artist:"Harris Jayaraj",
        name:"Mun-Andhi.mp3"
    },
    {
        id:15,
        path:"Oh-Ringa-Ringa.mp3",
        image:"7.jpg",
        artist:"Harris Jayaraj",
        name:"Oh-Ringa-Ringa"
    },
    {
        id:16,
        path:"The-Rise-of-Damo.mp3",
        image:"7.jpg",
        artist:"Harris Jayaraj",
        name:"The-Rise-of-Damo"
    },
    {
        id:17,
        path:"Yamma-Yamma.mp3",
        image:"7.jpg",
        artist:"Harris Jayaraj",
        name:"Yamma-Yamma"
    },
    {
        id:18,
        path:"Yellae-Lama.mp3",
        image:"7.jpg",
        artist:"Harris Jayaraj",
        name:"Yellae-Lama"
    },
    
    //aadukalam
    {
        id:19,
        path:"A-Love-Blossoms-Instrumental.mp3",
        image:"aadu.jpg",
        artist:"G.V.Prakash Kumar",
        name:"A-Love-Blossoms-Instrumental"
    },
    {
        id:20,
        path:"Ayyayo-Nenju.mp3",
        image:"aadu.jpg",
        artist:"G.V.Prakash Kumar",
        name:"Ayyayo-Nenju"
    },
    {
        id:21,
        path:"En-Vennilave.mp3",
        image:"aadu.jpg",
        artist:"G.V.Prakash Kumar",
        name:"En-Vennilave"
    },
    {
        id:22,
        path:"Otha-Sollaala.mp3",
        image:"aadu.jpg",
        artist:"G.V.Prakash Kumar",
        name:"Otha-Sollaala"
    },
    {
        id:23,
        path:"Porkkalam-Tamil-Rap.mp3",
        image:"aadu.jpg",
        artist:"G.V.Prakash Kumar",
        name:"Porkkalam-Tamil-Rap"
    },{
        id:24,
        path:"Warriors-English-Rap.mp3",
        image:"aadu.jpg",
        artist:"G.V.Prakash Kumar",
        name:"Warriors-English-Rap"
    },
    {
        id:25,
        path:"Yathe-Yathe.mp3",
        image:"aadu.jpg",
        artist:"G.V.Prakash Kumar",
        name:"Yathe-Yathe"
    },
    
    //AO
    {
        id:26,
        path:"Atho-Antha-Paravai-Remix.mp3",
        image:"ao.jpg",
        artist:"G.V.Prakash Kumar",
        name:"Atho-Antha-Paravai-Remix"
    },
    {
        id:27,
        path:"Celebration-of-Life.mp3",
        image:"ao.jpg",
        artist:"G.V.Prakash Kumar",
        name:"Celebration-of-Life"
    },
    {
        id:28,
        path:"Indha-Paadhai.mp3",
        image:"ao.jpg",
        artist:"G.V.Prakash Kumar",
        name:"Indha-Paadhai"
    },
    {
        id:29,
        path:"Maalai-Neram.mp3",
        image:"ao.jpg",
        artist:"G.V.Prakash Kumar",
        name:"Maalai-Neram"
    },
    {
        id:30,
        path:"Oh-Eesa.mp3",
        image:"ao.jpg",
        artist:"G.V.Prakash Kumar",
        name:"Oh-Eesa"
    },
    {
        id:31,
        path:"Oh-Eesa-mix.mp3",
        image:"ao.jpg",
        artist:"G.V.Prakash Kumar",
        name:"Oh-Eesa-mix"
    },
    {
        id:32,
        path:"Pemmanae.mp3",
        image:"ao.jpg",
        artist:"G.V.Prakash Kumar",
        name:"Pemmanae"
    },
    {
        id:33,
        path:"Thaai-Thindra-Mannae.mp3",
        image:"ao.jpg",
        artist:"G.V.Prakash Kumar",
        name:"Thaai-Thindra-Mannae"
    },
    {
        id:34,
        path:"Thaai-Thindra-Manne.mp3",
        image:"ao.jpg",
        artist:"G.V.Prakash Kumar",
        name:"Thaai-Thindra-Manne"
    },
    {
        id:35,
        path:"The-King-Arrives.mp3",
        image:"ao.jpg",
        artist:"G.V.Prakash Kumar",
        name:"The-King-Arrives"
    },
    {
        id:36,
        path:"Un-Mela-Aasadhaan.mp3",
        image:"ao.jpg",
        artist:"G.V.Prakash Kumar",
        name:"Un-Mela-Aasadhaan"
    },
    //endrendrum punnagai
    {
        id:37,
        path:"Enai-Saaithaalae.mp3",
        image:"ep.jpg",
        artist:"Harris Jayaraj",
        name:"Enai-Saaithaalae"
    },
    {
        id:38,
        path:"Yaelae-Yealae-Dhosthu-Da.mp3",
        image:"ep.jpg",
        artist:"Harris Jayaraj",
        name:"Yaelae-Yealae-Dhosthu-Da"
    },
    {
        id:39,
        path:"Vaan-Engum-Nee-Minna.mp3",
        image:"ep.jpg",
        artist:"Harris Jayaraj",
        name:"Vaan-Engum-Nee-Minna"
    },
    {
        id:40,
        path:"Othayilae.mp3",
        image:"ep.jpg",
        artist:"Harris Jayaraj",
        name:"Othayilae"
    },
    {
        id:41,
        path:"Kadal-Naan-Thaan.mp3",
        image:"ep.jpg",
        artist:"Harris Jayaraj",
        name:"Kadal-Naan-Thaan"
    },
    {
        id:42,
        path:"Ennatha-Solla.mp3",
        image:"ep.jpg",
        artist:"Harris Jayaraj",
        name:"Ennatha-Solla"
    },
    //geetha govintham
    {
        id:43,
        path:"Inkem-Inkem-Inkem-Kaavaale-MassTamilan.com.mp3",
        image:"gg.jpg",
        artist:"Gopi Sundar",
        name:"Inkem-Inkem-Inkem-Kaavaale"
    },
    {
        id:44,
        path:"Kanureppala-Kaalam",
        image:"gg.jpg",
        artist:"Gopi Sundar",
        name:"Kanureppala-Kaalam"
    },
    {
        id:45,
        path:"Tanemandhe-Tanemandhe",
        image:"gg.jpg",
        artist:"Gopi Sundar",
        name:"Tanemandhe-Tanemandhe"
    },
    {
        id:46,
        path:"Vachindamma-Vachindamma-MassTamilan.com.mp3",
        image:"gg.jpg",
        artist:"Gopi Sundar",
        name:"Vachindamma-Vachindamma"
    },
    {
        id:47,
        path:"What-The-F-MassTamilan.com.mp3",
        image:"gg.jpg",
        artist:"Gopi Sundar",
        name:"What-The-F"
    },
    {
        id:48,
        path:"What-The-Life-MassTamilan.com.mp3",
        image:"gg.jpg",
        artist:"Gopi Sundar",
        name:"What-The-Life"
    },
    {
        id:49,
        path:"Yenti-Yenti-MassTamilan.com.mp3",
        image:"gg.jpg",
        artist:"Gopi Sundar",
        name:"Yenti-Yenti"
    },
    
];  
let length=[];

for(let i=0;i<songlist.length;i++){
    length[i]=i;
}
localStorage.setItem("length", JSON.stringify(length));
    
let isPlaying=false;
let song_index=0;
let myplaylist=[];
let myqueue=[];
let i=0;
let k=0;
let likes=[];
let l=0;

let audio=document.createElement("AUDIO");

function playmysong(s_index){
   song_index=s_index;
    audio.src=songlist[s_index].path;
    audio.load();
    pausePlay();         
    audio.play();           
/*bottom player*/
pimage.src=songlist[s_index].image;
pname.innerHTML=songlist[s_index].name;
/*recents*/
let div=document.createElement("div");
div.className="rsongs";
let imgd=document.createElement("img");
imgd.src=songlist[s_index].image;
let a=document.createElement("a");
let para = document.createElement("p");
para.innerHTML=songlist[s_index].name;
            para.addEventListener("click", function () {
                playmysong(s_index);
            });
div.appendChild(imgd);
div.appendChild(para);
recents.appendChild(div);
audio.addEventListener("ended",next1);
}

const seekSlider = document.getElementById("seek");
const volumeSlider = document.getElementById("volume");

    // Event listener to update the seek slider as the audio plays
    audio.addEventListener("timeupdate", updateSeekSlider);

audio.addEventListener("timeupdate", function() {
    seekSlider.value = audio.currentTime;
    const curMinutes = Math.floor(audio.currentTime / 60);
    const curSeconds = Math.floor(audio.currentTime % 60);
    const durationMinutes = Math.floor(audio.duration / 60);
    const durationSeconds = Math.floor(audio.duration % 60);

    const curTimeStr = `${curMinutes}:${curSeconds < 10 ? "0" : ""}${curSeconds}`;
    const durationStr = `${durationMinutes}:${durationSeconds < 10 ? "0" : ""}${durationSeconds}`;

    document.getElementById("curtime").innerText = curTimeStr;
    document.getElementById("duration").innerText = durationStr;
});


seekSlider.addEventListener("input", function() {
    audio.currentTime = seekSlider.value;
  
});

volumeSlider.addEventListener("input", function() {
    audio.volume = volumeSlider.value;
});

// ... Other functions ...



function pausePlay(){
    if(!isPlaying)
    playsong();
    else
    pausesong();
}
function playsong(){
    audio.play();
    isPlaying=true;
    play.className= "fa-solid fa-pause";
}

function pausesong(){
    audio.pause();
    isPlaying=false;
    play.className= "fa-solid fa-play";
}

function next1(){
    if(song_index<songlist.length-1)
    song_index+=1;
    else
    song_index=0;
    playmysong(song_index); //update song
    playsong(); //update button
}

function back1(){
    if(song_index>0)
    song_index-=1;
    else
    song_index=songlist.length-1;
    playmysong(song_index); //update song
    playsong(); //update button
}

/*queue functionality*/
function addtoqueue(song_index){
myqueue[i]=song_index;
i++;
console.log(myqueue);
setmyqueue();
}
/*loop functionality*/
function loop(){
if(audio.loop==false)
{audio.loop=true;}
else if(audio.loop==true)
{audio.loop=false;}
}    
/*playlist creation*/
function remove(playlist){    
    return [...new Set(playlist)]; //remove duplicates
}
function playlist(song_index){
    myplaylist[k]=song_index;
    k++;
    console.log(myplaylist); 
    myplaylist=remove(myplaylist);
    console.log(myplaylist);
    setplaylist();
    }
    /*liked songs*/

function likedsongs(song_index){
    likes[l]=song_index;
    l++;
    console.log(likes); 
    likes=remove(likes);
    console.log(likes);
    setliked();
    }

function setplaylist(){
localStorage.setItem("myplaylist", JSON.stringify(myplaylist));
console.log(localStorage.getItem("myplaylist"));
}

function setmyqueue(){
    localStorage.setItem("myqueue", JSON.stringify(myqueue));
    console.log(localStorage.getItem("myqueue"));
    }
    
function setliked(){
    localStorage.setItem("likes", JSON.stringify(likes));
    console.log(localStorage.getItem("likes"));
    }
function clear(){
    localStorage.clear();
}
function loop()
{if(audio.loop)
    audio.loop=true;
 else
    audio.loop=false;

}
</script>
</body>
</html>