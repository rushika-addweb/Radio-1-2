

<html>
<body>

<audio id="myAudio">
  <source src="/song/song.mp3" type="audio/mp3">
</audio>
<div>
<p>Gaana 1</p>
<!-- <audio id="myAudio">
<source src="/song/song.mp3" type="audio/mp3">
</audio> -->
<button onclick="playAudio()" type="button">Play Audio</button>
<button onclick="pauseAudio()" type="button">Pause Audio</button> 
</div>


<div>
<audio id="myAudio">
<source src="/song/song.mp3" type="audio/mp3">
</audio>
<p>Gaana 2</p>
<button onclick="playAudio()" type="button">Play Audio</button>
<button onclick="pauseAudio()" type="button">Pause Audio</button> 
</div>
<div>
<p>Gaana 3</p>
<audio id="myAudio">
<source src="/song/song.mp3" type="audio/mp3">
</audio>
<button onclick="playAudio()" type="button">Play Audio</button>
<button onclick="pauseAudio()" type="button">Pause Audio</button> 
</div>
<div>
<p>Gaana 4</p>
<audio id="myAudio">
<source src="song/song.mp3" type="audio/mp3">
</audio>
<button onclick="playAudio()" type="button">Play Audio</button>
<button onclick="pauseAudio()" type="button">Pause Audio</button> 
</div>

<div>
<p>Gaana 5</p>
<audio id="myAudio">
<source src="/song/song.mp3" type="audio/mp3">
</audio>
<button onclick="playAudio()" type="button">Play Audio</button>
<button onclick="pauseAudio()" type="button">Pause Audio</button> 
</div>
<div>
<p>Gaana 6</p>
<audio id="myAudio">
<source src="song/song.mp3" type="audio/mp3">
</audio>
<button onclick="playAudio()" type="button">Play Audio</button>
<button onclick="pauseAudio()" type="button">Pause Audio</button> 
</div>
<div>
<p>Gaana 7</p>
<audio id="myAudio">
<source src="song/song.mp3" type="audio/mp3">
</audio>
<button onclick="playAudio()" type="button">Play Audio</button>
<button onclick="pauseAudio()" type="button">Pause Audio</button> 
</div>

<script>
var x = document.getElementById("myAudio"); 

function playAudio() { 
  x.play(); 
} 

function pauseAudio() { 
  x.pause(); 
} 
</script>

</body>
</html>
