
const songlist=[
    {
        id:0,
        path:"Kondattam.mp3",
        image:"topmix3.jpg",
        artist:"santhoshnarayanan",
        name:"kondattam"
    },
    {
        id:1,
        path:"Aval.mp3",
        image:"Aayirathil_Oruvan.jpg",
        artist:"santhoshnarayanan",
        name:"Aval"
    },
    {
        id:2,
        path:"Adho-Manithan-Theme.mp3",
        image:"topmix3.jpg",
        artist:"santhoshnarayanan",
        name:"Adho-Manithan"
    },
    {
        id:3,
        path:"Poi-Vazhva.mp3",
        image:"topmix3.jpg",
        artist:"santhoshnarayanan",
        name:"Poi-Vazhva"
    },
    {
        id:4,
        path:"Mun-Sellada.mp3",
        image:"topmix3.jpg",
        artist:"santhoshnarayanan",
        name:"Mun-Sellada"
    }
    
];


let isPlaying=false;

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
let para=document.createElement("p");
para.innerHTML=songlist[s_index].name;
div.appendChild(imgd);
div.appendChild(para);
recents.appendChild(div);

}


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
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "home.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("song_index=" + song_index);
    playmysong(song_index); //update song
    playsong(); //update button
}
