<?php
// Initialize the session
session_start();
//error_reporting(E_ERROR | E_PARSE);
$usr = $_SESSION['username'];
$conn = mysqli_connect("localhost", "root", "", "learns");
$result = mysqli_query($conn,"SELECT * FROM lib");
$delete_jpg = mysqli_query($conn,"DELETE FROM lib WHERE url like '%.jpg%'");
$delete_invalid = mysqli_query($conn,"DELETE FROM lib WHERE url =''");
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
}
else{}?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Aptitude learns</title>
        <style>
       
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap');
*{
    margin:0;
    padding:0;
    font-family:'Poppins', sans-serif;
}
.container{
    width:100%;
    height:100vh;
    box-sizing:border-box;
    position:absolute;
    background:#ececec;
    overflow:scroll;
}
.icon_container{
    width:100%;
    margin-bottom:-100%;
    height:100vh;
    box-sizing:border-box;
    position:absolute;
    background:#ececec;
    overflow:scroll;
}
.load_container{
    width:100%;
    height:100vh;
    box-sizing:border-box;
    position:absolute;
    background:#fff;
    overflow:scroll;
}
.yt_icon{
    width:150px;
    height:150px;
    color:aqua;
    background-size:cover;
    margin-top:190px;
}
.back{
    margin:10px 10px 10px 20px;
    font-size:20px;
}
.header{
    width:100%;
    height:40px;
    padding:12px 0px 8px 0px;
    background:#fff;
    border-bottom:.2px solid rgba(0,0,0,.2);
}
.header .imglogo{
    width:640px;
    height:254px;
    margin-top:-15px;
}
.header .top_icon{
    float:right;
    width:25px;
    height:25px;
    margin-top:0px;
    margin-right:10px;
    padding:5px;
    background:dodgerblue;
    border-radius:50px;
}
.header .top_icon:active{
    border:3px solid rgba(0,0,0,.3);
    width:20px;
    height:20px;
}
.header .fa{
    font-size:17px;
}
.header .bell{
    float:right;
    margin-top:-6px;
    font-size:20px;
    padding:8px;
    border-radius:50%;
}
.header .search{
    float:right;
    padding:7px 13px 7px 13px;
    margin-top:-6px;
    margin-right:10px;
    font-size:20px;
    border-radius:50%;
}
.bell .msg{
    font-size:8px;
    padding:3px;
    background:red;
    border-radius:50px;
    margin-left:-5px;
    margin-top:-20px;
    color:#fff;
}
.header .cast{
    float:right;
    padding:7px 13px 7px 13px;
    margin-top:-6px;
    font-size:20px;
    border-radius:50%;
}
.header .cast:active{
    background:rgba(0,0,0,.3);
}
.header .bell:active{
    background:rgba(0,0,0,.3);
}
.header .search:active{
    background:rgba(0,0,0,.3);
}

/*EXPLORE*/
.explore{
    width:100vw;
    height:30px;
    padding:10px 0px 10px 0px;
    display:flex;
    background:#fff;
    overflow-y:hidden;
    overflow-x:scroll;
}
.explore .fa-compass{
    font-size:20px;
    margin-top:2px;
}
.explore span{
    margin:0px 5px 0px 5px;
}
.explore .excont{
    margin-left:5px;
    padding:3px 10px 17px 10px;
    font-size:17px;
    background:rgba(0,0,0,.2);
    display:flex;
}
.explore .all{
    padding:2px 10px 18px 10px;
    font-size:17px;
    background-color:dimgrey;
    color:white;
    border-radius:50px;
    margin-left:10px;
}
.explore .css{
    padding:2px 10px 18px 10px;
    font-size:17px;
    background:rgba(0,0,0,.2);
    color:#000;
    border:.2px solid rgba(0,0,0,.2);
    border-radius:50px;
}
.explore .computer_pro{
    padding:2px 10px 18px 10px;
    font-size:17px;
    background:rgba(0,0,0,.2);
    color:#000;
    border:.2px solid rgba(0,0,0,.2);
    border-radius:50px;
}
.explore .computer_pro:active{
    background:rgba(0,0,0,.4);
}


/*AD VIEW*/
.ad_view{
    width:100%;
    height:210px;
    background:url(https://i.ytimg.com/vi/HqzWCNbX_wg/maxresdefault.jpg);
    background-size:cover;
    margin-top:5px;
}
.ad_view .minutes{
    color:#fff;
    font-size:12px;
    float:right;
    font-weight:bold;
    background:black;
    margin-top:185px;
    margin-right:15px;
    padding:3px;
}
.minutes{color:#fff;
    font-size:12px;
    float:right;
    font-weight:bold;
    background:black;
    margin-top:185px;
    margin-right:15px;
    padding:3px;
}
.ad_view_title{
    width:100%;
    padding:10px 0px 10px 0px;
    height:100px;
    background:#fff;
}
.ad_view_title5{
    width:100%;
    padding:10px 0px 10px 0px;
    height:140px;
    background:#fff;
}
.ad_view_title .ad_logo{
    width:50px;
    height:50px;
    outline:none;
    border:none;
    color:#fff;
    margin-left:10px;
    background:purple;
    margin-top:10px;
    border-radius:50%;
}
.ad_view_title .title{
    margin-top:-35px;
    margin-left:20px;
}
.ad_view_title button{
    outline:none;
    border:none;
    color:navy;
    width:260px;
    font-size:16px;
    font-weight:480;
    margin-top:-5px;
    border-radius:2px;
    background:skyblue;
    padding:6px;
}
.ad_view1{
    width:100%;
    height:210px;
    background:url(https://codingartistweb.com/wp-content/uploads/2021/02/rainbow-border-01.png);
    background-size:cover;
    margin-top:15px;
    text-align:center;
}
.ad_view_title5 .channel5{
    width:45px;
    height:45px;
    border-radius:50%;
    margin-left:15px;
    background:url(https://yt3.ggpht.com/ytc/AKedOLQXx-JXf1NsSUtVHcYhx4B4MaIYE0m7I_H0GHmu-w=s900-c-k-c0x00ffffff-no-rj);
    background-size:cover;
    margin-top:15px;
    float:left;
}
.ad_view1 .minutes{
    color:#fff;
    font-size:12px;
    float:right;
    font-weight:bold;
    margin-top:185px;
    margin-right:15px;
}
.ad_view2{
    width:100%;
    height:210px;
    background:url(https://i.ytimg.com/vi/iT_553vTyzI/maxresdefault.jpg);
    background-size:cover;
    margin-top:15px;
}
.ad_view2 .minutes{
    color:#fff;
    font-size:12px;
    float:right;
    font-weight:bold;
    margin-top:185px;
    margin-right:15px;
}
.ad_view3{
    width:100%;
    height:210px;
    background:url(https://i.ytimg.com/vi/_VLmMgMnkZ4/maxresdefault.jpg);
    background-size:cover;
    margin-top:5px;
}
.ad_view4{
    width:100%;
    height:210px;
    background:url(https://i.ytimg.com/vi/-pEs-Bss8Wc/maxresdefault.jpg);
    background-size:cover;
    margin-top:5px;
}
.ad_view5{
    width:100%;
    height:210px;
    background:url(https://i.ytimg.com/vi/SfwsZ8vlYx0/maxresdefault.jpg);
    background-size:cover;
    margin-top:5px;
}
.ad_view6{
    width:100%;
    height:210px;
    background:url(https://i.ytimg.com/vi/ArTVfdHOB-M/maxresdefault.jpg);
    background-size:cover;
    margin-top:5px;
}
.ad_view3 .minutes{
    color:#fff;
    font-size:12px;
    float:right;
    font-weight:bold;
    margin-top:185px;
    margin-right:15px;
}
.ctitle{
    margin-top:15px;
    color:#000;
    margin-left:70px;
}
p{
    margin-top:3px;
    color:dimgrey;
    font-size:12px;
    margin-left:70px;
}
.ellip{
    float:right;
    margin-top:-75px;
    color:dimgrey;
    margin-right:15px;
}
.fa-ellipsis-v{
    padding:10px;
    border-radius:50px;
}
.fa-ellipsis-v:active{
    background:rgba(0,0,0,.2);
}
.ad_view_title .channel1{
    width:45px;
    height:45px;
    border-radius:50%;
    margin-left:15px;
    background:url(https://yt3.ggpht.com/ytc/AKedOLQXx-JXf1NsSUtVHcYhx4B4MaIYE0m7I_H0GHmu-w=s900-c-k-c0x00ffffff-no-rj);
    background-size:cover;
    margin-top:15px;
    float:left;
}
.ad_view_title .channel2{
    width:45px;
    height:45px;
    border-radius:50%;
    margin-left:15px;
    background:url(https://yt3.ggpht.com/4PxMvFQL_cZRSXUwsh5eMSehl22GAejM2BY1Kix2gzrmeBOnaSzya45fFVh7I67yzmWWrWkQKQ=s900-c-k-c0x00ffffff-no-rj);
    background-size:cover;
    margin-top:15px;
    float:left;
}
.ad_view_title .channel3{
    width:45px;
    height:45px;
    border-radius:50%;
    margin-left:15px;
    background:url(https://lh3.googleusercontent.com/proxy/GBHLjvDuvoeaCo0vXe0oQnNPfbGUn8Ftr_HizjIzbDDIX_E5JWnxX9SfCUYx46hHTw9qJQ0ZDk954G4XDADrTAc_KBlnaQJEcFmXx2SN);
    background-size:cover;
    margin-top:15px;
    float:left;
}
.ad_view_title .channel4{
    width:45px;
    height:45px;
    border-radius:50%;
    margin-left:15px;
    background:url(data:image/jpeg;base64,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);
    background-size:cover;
    margin-top:15px;
    float:left;
}
.ad_view_title .channel5{
    width:45px;
    height:45px;
    border-radius:50%;
    margin-left:15px;
    background:url(https://0.academia-photos.com/1403/587/43204/s200_jacob.sorber.jpg);
    background-size:cover;
    margin-top:15px;
    float:left;
}
.ad_view_title .channel6{
    width:45px;
    height:45px;
    border-radius:50%;
    margin-left:15px;
    background:url(https://0.academia-photos.com/1403/587/43204/s200_jacob.sorber.jpg);
    background-size:cover;
    margin-top:15px;
    float:left;
}
.ad_view_title5 .channel7{
    width:45px;
    height:45px;
    border-radius:50%;
    margin-left:15px;
    background:url(data:image/jpeg;base64,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);
    background-size:cover;
    margin-top:15px;
    float:left;
}
.footer{
    width:100%;
    height:30px;
    padding:10px;
    position:fixed;
    bottom:0;
    transition:.3s;
    overflow:hidden;
    display:flex;
    justify-content:center;
    background:#fff;
    border-top:2px solid rgba(0,0,0,.2);
    border-top:.2px solid black;
}
.footer div{
    padding:10px;
    margin-left:5px;
    font-size:20px;
    margin-top:-12px;
}
.footer .home{
    width:5px;
    height:5px;
    background:url(https://i.ibb.co/0FGPPds/Home-icon.png);
    background-size:cover;
    margin-left:-320px;
    margin-top:1px;
    margin-right:30px;
}
.footer .upload{
    margin-right:25px;
    font-size:20px;
    width:12px;
    height:12px;
    background:url(https://i.ibb.co/M9rwFcj/Upload-icon.png);
    background-size:cover;
    margin-top:-5px;
    margin-left:15px;
}
.footer .subs{
    width:14px;
    height:14px;
    background:url(https://i.ibb.co/SvwyRFR/Subscription-icon.png);
    background-size:cover;
    margin-top:-5px;
    margin-left:10px;
}
.footer .fa-plus{
    border:2px solid rgba(0,0,0,2);
    padding:8px 12px 12px 12px;
    border-radius:50%;
    font-size:20px;
}
.footer .shorts{
    width:3.5px;
    height:8.5px;
    background:url(https://i.ibb.co/dKgJT0b/Yt-shorts-icon.png);
    background-size:cover;
    margin-right:30px;
    font-size:20px;
    margin-top:-1px;
    margin-left:15px;
}
.footer .library{
    margin-right:-290px;
    margin-left:35px;
    width:10px;
    margin-top:-4px;
    height:10px;
    background:url(https://i.ibb.co/5ckTtG8/Screenshot-20211003-110410-3.png);
    background-size:cover;
}
.footer .fr{
    float:left;
    margin-left:10px;
    font-size:18px;
    float:left;
    font-weight:bold;
    margin-top:20px;
}
.footer ul{
    margin-top:20px;
}
.footer ul li{
    list-style-type:none;
    padding:10px 10px 0px 0px;
    margin-bottom:20px;
    margin-left:20px;
}
.footer .iicon{
    width:10px;
    height:15px;
    margin-top:20px;
    background:url(https://i.ibb.co/dKgJT0b/Yt-shorts-icon.png);
    background-size:cover;
}
.footer .iicon2{
    width:10px;
    height:10px;
    margin-top:10px;
    background:url(https://i.ibb.co/0fqPxTn/Left-arrow-icon.png);
    background-size:cover;
    transform:rotate(-89deg);
}
.footer .iiconname{
    margin-top:-35px;
    margin-left:50px;
    font-size:15px;
}
.footer .shorts li{
    margin-top:25px;
}
.footer .fa-times{
    margin-top:20px;
    float:right;
    margin-right:30px;
    font-size:20px;
}
</style>
    </head>
    <body>


    <div class="load_container">
    <center>
    <div class="yt_icon">
    Aptitude
    </div>
    </center>
    </div>
    
    
    
    <div class="icon_container">
    <div class="back"><i class="fa fa-times" onclick="back()"></i></div>
    </div>
    
    
    
    <div class="container">
    <!-- HEADER  -->
    <div class="header">
    <span class="imglogo" style="color:aqua;">Aptitude</span>
    <span><?php echo $usr?></span>
    <span class="search"><i class="fa fa-search"></i></span>
    <span class="bell"><i class="fa fa-bell-o"></i><span class="msg">9+</span></span><span class="cast"><i class="fa fa-eercast"></i></span>
    </div>
    
    <!--  EXPLORE  -->
    <!-- <div class="explore">
    <span class="excont"><i class="fa fa-compass"></i>Explore</span>
    <span class="all">All</span>
    <span class="computer_pro">CSS</span>
    <span class="computer_pro">Java</span>
    <span class="computer_pro">Python</span>
    <span class="computer_pro">Javascript</span>
    <span class="computer_pro">Kotlin</span>
    <span class="computer_pro">ReactNative</span>
    <span class="computer_pro">C++Programming</span>
    <span class="computer_pro">C#challenge</span>
    <span class="computer_pro">Hacking</span>
    <span class="computer_pro">Anonymous</span>
    </div> -->
   
    <?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
    $video=$row['url'];
?>
    <!-- VIDEOS AND ADS  -->
  
   
    <video src="uploads/<?php echo $row['url']?>"></video>
    <p><?php echo $row['title']?></p>
   <p>•<?php echo $row['Date']?></p>  <span style="color:grey;font-size:smaller"><?php echo $row['Channel']?></span><span class="ellip"><i class="fa fa-ellipsis-v"></i></span>
    </div>
    <?php
	$i++;
	}
	?>
    
    </div>
    <!--FOOTER-->
    <div class="footer">
    <div class="kaya">
    <span class="fr" align="left">Create</span><span class="cancel"><i class="fa fa-times" onclick="dis()"></i></span><br />
    <ul>
    <li class="shortsli"><div class="iicon"></div><div class="iiconname">Create a short</div></li>
    <li class="shortsli"><div class="iicon2"></div><div class="iiconname">Upload a video</div></li>
    </ul>
    </div>
    <div class="home"></div>
    <div class="shorts"></div>
    <div class="upload" align="center" onclick="foot()"></div>
    <div class="subs"></div>
    <div class="library"></div>
    </div>
    
    
    
    <script>
    $(".container").hide();
    $(".footer").hide();
    setTimeout(function(){
    $(".container").toggle(500);
    $(".footer").toggle(500);
    $(".load_container").toggle();
    }, 6000);
    $(".kaya").hide();
    $(".icon_container").hide();
    $(".top_icon").click(function(){
    $(".icon_container").slideToggle(500);
    $(".container").slideToggle(300);
    $(".footer").hide(200);
    });
    function back(){
        $(".icon_container").slideToggle(500);
    $(".container").slideToggle(300);
    $(".footer").show(200);
    }
    function foot(){
    $(".footer").css({"height":"240px", "border-radius":"50px 60px 0px 0px", "display":"block", "justify-content":"none"});
    $(".home").hide();
    $(".shorts").hide();
    $(".upload").hide();
    $(".library").hide();
    $(".subs").hide();
    $(".channel5").css({"box-shadow":"0 0 0 9999px rgba(0,0,0,.5)"});
    $(".kaya").show(200);
    $(".all").css({"color":"dimgrey"});
    $(".explore").css({"background":"rgba(0,0,0,.4)"});
    $(".all").css({"background":"rgba(0,0,0,.4)"});
    $(".container").click(function(){
      $(".footer").css({"height":"30px", "border-radius":"0px 0px 0px 0px", "display":"flex"});
    $(".home").show();
    $(".shorts").show();
    $(".upload").show();
    $(".library").show();
    $(".subs").show();
    $(".kaya").hide();
    $(".all").css({"color":"#fff"});
    $(".explore").css({"background":"#fff"});
    $(".all").css({"background":"dimgrey"});
    $(".channel5").css({"box-shadow":"0 0 0 0px rgba(0,0,0,.5)"});
    });
    }
    function dis(){
        $(".footer").css({"height":"30px", "border-radius":"0px 0px 0px 0px", "display":"flex"});
    $(".home").show();
    $(".shorts").show();
    $(".upload").show();
    $(".library").show();
    $(".subs").show();
    $(".kaya").hide();
    $(".all").css({"color":"#fff"});
    $(".all").css({"background":"dimgrey"});
    $(".channel5").css({"box-shadow":"0 0 0 0px rgba(0,0,0,.5)"});
    $(".explore").css({"background":"#fff"});
    }
    $(".footer li").click(function(){
    alert("I can't add this feature");
    });
    window.addEventListener("load", function(){
        alert("Still working on it\nTo be done soon\n\nLearn To Code\nhttps://wa.me/2349017872620");
    });
    /*setTimeout(function(){
    $(".fa-plus").css({"font-size":"30px"})
    }, 5000);*/
    </script>
    </body>
</html>