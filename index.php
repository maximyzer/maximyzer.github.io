<html>
<head>
<meta property="og:image" content="">
<script>
function findGetParameter(parameterName) {
    var result = null,
        tmp = [];
    var items = location.search.substr(1).split("&");
    for (var index = 0; index < items.length; index++) {
        tmp = items[index].split("=");
        if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
    }
    return result;
}


var furieuxVideo = findGetParameter("furieux");

if(furieuxVideo){
$('meta').attr("content","https://img.youtube.com/vi/"+furieuxVideo+"/maxresdefault.jpg");
}

</script>
</head>
<style>


.stars, .twinkling, .clouds, .spacecolor {
	position:fixed;
	display:block;
	top:0; bottom:0;
	left:0; right:0;
	width:100%; height:100%;
}


.spacecolor {
	z-index: -1;
	background-color: rgba(251, 162, 252, 1);
	mix-blend-mode: color;
	
}
.stars {
	z-index: -4;
	background: #000 url('https://image.ibb.co/mjnygo/stars.png') repeat top center;
	
}

.twinkling{
	z-index: -3;
	background:transparent url('https://image.ibb.co/ir1DE8/twinkling.png') repeat top center;
	animation: move-twink-back 200s linear infinite;
}

.clouds{
	z-index: -2;
    background:transparent url('https://image.ibb.co/bT4N7T/clouds.png') repeat top center;
	animation: move-clouds-back 200s linear infinite;
  
}

@keyframes move-twink-back {
	from {background-position:0 0;}
	to {background-position:-10000px 5000px;}
}

@keyframes move-clouds-back {
	from {background-position:0 0;}
	to {background-position:10000px 0;}
}


.fluidMedia {
    position: relative;
    padding-bottom: 56.25%; /* proportion value to aspect ratio 16:9 (9 / 16 = 0.5625 or 56.25%) */
    height: 0;
    overflow: hidden;
}

.fluidMedia iframe {
    position: absolute;
    top: 3.125%; 
    left: 12.5%;
    width: 75%;
    height: 75%;
  border-radius: 4px;
  border: 1px ridge #E8E8E8;
  box-shadow: 0 0px 8px 0 rgba(255, 160, 243, 1);
}
</style>
<body style="overflow: hidden;">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


  <div class='spacecolor'></div>
  <div class='stars'></div>
<div class='twinkling'></div>
<div class='clouds'></div>
<div>
<div class="fluidMedia">
<iframe id="video_player" width="560" height="315" src="https://www.youtube.com/embed/pfjT0zKYB1U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>


<div style="position:absolute;
  top: 123px; color:white;">abonne-toi! <?php echo $_GET['furieux'];?></div>
<script>
function findGetParameter(parameterName) {
    var result = null,
        tmp = [];
    var items = location.search.substr(1).split("&");
    for (var index = 0; index < items.length; index++) {
        tmp = items[index].split("=");
        if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
    }
    return result;
}


var furieuxVideo = findGetParameter("furieux");

if(furieuxVideo){
$('meta').attr("content","https://img.youtube.com/vi/"+furieuxVideo+"/maxresdefault.jpg");
//document.querySelector('meta[name="og:image"]').setAttribute("content", "https://img.youtube.com/vi/"+furieuxVideo+"/maxresdefault.jpg");
$("#video_player").attr("src","https://www.youtube.com/embed/"+furieuxVideo+"?&autoplay=1");
}

</script>
</body>
</html>
