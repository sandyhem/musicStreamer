
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7SERIES</title>
    <link rel="stylesheet" href="liked4.css">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href=
     "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
      
         <!-- Bootstrap Font Icon CSS -->
         <link rel="stylesheet" href=
     "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
     <script src="https://kit.fontawesome.com/8cef4fe53d.js" crossorigin="anonymous"></script>
    
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
               <i class="bi bi-layers-fill"></i>
            </div>
        </div>
        <div class="liked">
            <h4>MYplaylist</h4>
            <h1>LIBRARY</h1>
            <h6>you'r vibing at melomix</h6>
        </div>
        <div class="logo">
    
    <img src="logo2.jpeg" alt="">
    
  </div>
        </div>
        <div class="body">
            <div class="boxes" id="loc">
           
           
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
    

const likedplaylist = JSON.parse(localStorage.getItem('myplaylist'));
console.log(likedplaylist);
let loc = document.getElementById("loc"); // Get the container element to append the divs.

function deleteSong(index){
    let myplaylist=JSON.parse(localStorage.getItem('myplaylist'));
    myplaylist.splice(index,1);
    localStorage.setItem("myplaylist", JSON.stringify(myplaylist));
}

 // Initialize an empty array 'songlist2'
 let songlist2 = [];
let song_index=0;
// Loop through 'likedplaylist' and create 'songlist2' array of objects
if (Array.isArray(likedplaylist) && likedplaylist.length > 0) {
  for (let m = 0; m < likedplaylist.length; m++) {
    const index = likedplaylist[m];
    if (index >= 0 && index < songlist.length) {
      const songObject = {
        id: songlist[index].id,
        path: songlist[index].path,
        image: songlist[index].image,
        artist: songlist[index].artist,
        name: songlist[index].name,
      };
      songlist2.push(songObject);
    }
  }
}


  console.log(songlist2);

  let isPlaying=false;

let audio=document.createElement("AUDIO");

function playmysong(s_index){
   song_index=s_index;
    audio.src=songlist2[s_index].path;
    audio.load();
    pausePlay();         
    audio.play();           
/*bottom player*/
pimage.src=songlist2[s_index].image;
pname.innerHTML=songlist2[s_index].name;
/*recents*/
let div=document.createElement("div");
div.className="rsongs";
let imgd=document.createElement("img");
imgd.src=songlist2[s_index].image;
let a=document.createElement("a");
let para = document.createElement("p");
para.innerHTML=songlist2[s_index].name;
            para.addEventListener("click", function () {
                playmysong(s_index);
            });
            console.log(para);
div.appendChild(imgd);
div.appendChild(para);
recents.appendChild(div);

}
for (let m = 0; m <songlist2.length; m++) {
    let div = document.createElement("div");
    let dappa = document.createElement("div");
    let h5 = document.createElement("h5");
    let img = document.createElement("img");
    let para = document.createElement("p");
    para.innerHTML="play";
            para.addEventListener("click", function () {
                playmysong(m);
            });
            let deleteIcon = document.createElement("i");
            deleteIcon.className = "bi bi-trash";
            deleteIcon.addEventListener("click", function () {
                deleteSong(m); // Call the delete function when the delete icon is clicked
            });
   
    div.className = "box";
    img.src = songlist2[m].image;
    h5.innerHTML = songlist2[m].name;
    dappa.className="img";
    dappa.appendChild(img);
    div.appendChild(dappa);
    div.appendChild(h5);
    div.appendChild(para);
    div.appendChild(deleteIcon);
    console.log(div);

    loc.appendChild(div); // Append the 'div' element to 'loc'.

  }
 

// ... Existing code ...

const seekSlider = document.getElementById("seek");
const volumeSlider = document.getElementById("volume");


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
seekSlider.addEventListener("input", function() {
    audio.currentTime = seekSlider.value;
});

seekSlider.addEventListener("change", function() {
    audio.currentTime = seekSlider.value;
});

// ... Other functions ...

audio.addEventListener("timeupdate", function() {
    seekSlider.value = audio.currentTime;
    // ... Your existing code to update the current time ...
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
    if(song_index<songlist2.length-1)
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
    song_index=songlist2.length-1;
    playmysong(song_index); //update song
    playsong(); //update button
}

        </script>
</body>

</html>