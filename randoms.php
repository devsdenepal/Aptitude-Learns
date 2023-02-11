<style>
  video{
    width:100% !important;
    height:80% !important;
  }
  body{

    color:white !important;
    background-color: black !important;
}
.thulo {
  font-size: x-large;
}

/* COLORS */
.pink {
  color: palevioletred;
}

.krimson {
  color: red;
}

.seto {
  color: white;
}

.seto {
  color: white;
}

.fillseto {
  background-color: white;
}

.fillkrimson {
  background-color: red;
}

.navy {
  color: navy
}

.fillnavy {
  background-color: navy
}

.blue {
  color: blue;
}

.fillblue {
  background-color: blue;
}

.aqua {
  color: aqua;
}

.fillaqua {
  background-color: aqua;
}

.gold {
  color: gold;
}

.fillgold {
  background-color: gold;
}

.fillgrey {
  background-color: grey;
}

.yellow {
  color: yellow;
}

.fillyellow {
  background-color: yellow;
}

.green {
  color: green;
}

.fillgreen {
  background-color: green;
}

.lightgreen {
  color: lightgreen;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

li {
  float: left;
}

li a {
  display: block;
  padding: 8px;
  background-color: #dddddd;
}

li :hover {
  background-color: #00529B;
  color: #dddddd;
}

.filllightgreen {
  background-color: lightgreen;
}

.lightblue {
  color: lightblue;
}

.filllightblue {
  background-color: lightblue;
}

.grey {
  color: grey;
}

.fillgrey {
  background-color: grey;
}

.silver {
  color: silver;
}

.fillsilver {
  background-color: silver;
}

.black {
  color: black
}

.fillblack {
  background-color: black
}

.center {
  text-align: center;
}

.right {
  text-align: right;
}

.left {
  text-align: left;
}

.fillcenter {
  align-content: center;
  align-items: center;
  text-align: center;
}

.fillright {
  align-content: center;
}

img {
  border-radius: inherit;
}

.loaded {
  animation-name: loading_fade_color;
  /*Shows that content is being loaded */
  animation-iteration-count: infinite;
  /*Animation repeatation*/
}

/*Loading_fade animation*/
@keyframes loading_fade_color {
  0% {
    background-image: url("photoshop.jfif");
  }

  25% {
    background-image: url("photoshop2.jfif");
  }

  40% {
    background-image: url("image1.jpg");
  }

  50% {
    background-image: url("image3.jpg");
  }

  60% {
    background-image: url("image2.jpg");
  }

  70% {
    background-image: url("image4.jpg");
  }

  100% {
    background-image: url("image5.jpg");
  }
}

.animate-fading {
  animation: fading 10s infinite
}

@keyframes fading {
  0% {
    opacity: 0
  }

  50% {
    opacity: 1
  }

  100% {
    opacity: 0
  }
}

.round {
  padding: 10px;
  border-radius: 25px;
}

.round2 {
  padding: 10px;
  border-radius: 50px 20px;
}

.borderimg {
  border: 10px solid transparent;
  padding: 15px;
  border-image: url(border.jfif) 30 round;
}

.dottedblue {
  border-right: 4px dotted blue;
}

.caret {
  caret-color: red;
}

#loading {
  cursor: wait;
}

#write_vert {
  writing-mode: vertical-rl;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.load {
  position: absolute;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  background: inherit;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: inherit
}

.load::after {
  content: '';
  position: absolute;
  border-radius: 50%;
  border: 3px solid #fff;
  width: 30px;
  height: 30px;
  border-left: 3px solid transparent;
  border-bottom: 3px solid transparent;
  animation: loading1 1s ease infinite;
  z-index: 10
}

.load::before {
  content: '';
  position: absolute;
  border-radius: 50%;
  border: 3px dashed #fff;
  width: 30px;
  height: 30px;
  border-left: 3px solid transparent;
  border-bottom: 3px solid transparent;
  animation: loading1 2s linear infinite;
  z-index: 5
}

@keyframes loading1 {
  0% {
    transform: rotate(0deg)
  }

  100% {
    transform: rotate(360deg)
  }
}



a,
a:hover {
  text-decoration: none;
}

.container {
  max-width: fit-content;
  max-height: fit-content;
}

.section {
  margin-top: 16px !important;
  margin-bottom: 16px !important;
}

.down-slide {
  position: relative;
  animation: animatetop 0.6s
}

@keyframes animatetop {
  from {
    top: -300px;
    opacity: 0
  }

  to {
    top: 0;
    opacity: 1
  }
}

.right-slide {
  position: relative;
  animation: animateright 0.4s
}

@keyframes animateright {
  from {
    right: -300px;
    opacity: 0
  }

  to {
    right: 0;
    opacity: 1
  }
}

.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
}

.container>div {
  animation: anim 0.5s;
}

@keyframes anim {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

#error {
  display: block;
  margin: 8px 0;
  color: red;
  font-weight: bold;
}

#sec-1 h1 {
  overflow: hidden;
  border-right: .15em solid orange;
  /* The typwriter cursor */
  white-space: nowrap;
  /* Keeps the content on a single line */
  margin: 0 auto;
  /* Gives that scrolling effect as the typing happens */

  animation:
    typing 3.6s steps(30, end),
    blink-caret .5s step-end infinite;
}

.navigation-bar-button {
  float: left;
  width: auto;
  border: none;
  display: block;
  outline: 0
}

.click {
  background-color: green;
  color: rgb(255, 255, 255);
}

.click:hover {
  background-color: rgb(22, 204, 189);
  color: green;
}

.navigation {
  width: fit-content;
}

/* The typing effect */
@keyframes typing {
  from {
    width: 0
  }

  to {
    width: 90%
  }
}

/* The typewriter cursor effect */
@keyframes blink-caret {

  from,
  to {
    border-color: transparent
  }

  50% {
    border-color: orange
  }
}

.animate-bottom {
  position: relative;
  animation: animatebottom 0.4s
}

@keyframes animatebottom {
  from {
    bottom: -300px;
    opacity: 0
  }

  to {
    bottom: 0;
    opacity: 1
  }
}

.img-logo {
  margin-right: 30px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  color: black;
  font-weight: 500;
}

input {
  width: 50%;
  height: 45px;

  outline: none;
  border-radius: 2px;
  padding: 0 10px;
}

.submit {
  width: 100%;
  height: 45px;
  border: none;
  outline: none;
  border-radius: 2px;
  padding: 0 10px;
}

input {
  background: #fff;
  color: #333 !important;
  font-size: medium;
}

@media all and (min-width: 1025px) {
  dwnld {
    display: none;
  }
}

.hide {
  display: none;
}

.mb-2 {
  margin-bottom: 20px;
}

.my-2 {
  margin: 20px 0;
}

p {
  margin: 50px 0;
  font-size: 1.1rem;
}

.follow {
  display: block;
  background: #fff;
  text-align: center;
  color: #000;
  font-weight: 500;
  text-transform: uppercase;
  margin: 15px 0;
  width: 100%;
  padding: 10px;
}

.logo {
  float: left;
}

#loading {
  position: fixed;
  height: 100%;
  width: 100%;
  z-index: 999;
  background: rgba(255, 255, 255, .8);
  top: 0;
  left: 0;

}

#img {
  margin-left: auto;
  margin-right: auto;
}

.launch {
  color: green;
}

.goog-te-combo {
  color: orange;
  border-radius: 32px;
}

.goog-logo-link {
  opacity: 0;
}

/*Preventing text from being seleced */

.times {
  font-family: "Times New Roman", Times, serif;
}

.auto {
  width: auto;
  height: auto;
}

.robot {
  font-family: "Lucida Console", "Courier New", monospace;
}

.handwritten {
  font-family: "Brush Script MT", cursive;
}

.fantasy {
  font-family: Copperplate, Papyrus, fantasy;
}

p.normal {
  font-weight: normal;
}

p.light {
  font-weight: lighter;
}

p.thick {
  font-weight: bold;
}

p.thicker {
  font-weight: 900;
}

.helvetica {
  font-family: Arial, Helvetica, sans-serif;
}

/* .manage-card {
            background-image:url("fdff.jpg");
            /* size : cover; */
/* height : 100%;
        } */
*/ .wooden {
  background-image: url("https://images.unsplash.com/photo-1610824224972-db9878a2fe2c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8d29vZCUyMHRleHR1cmV8ZW58MHx8MHx8&w=1000&q=80");
  width: 300px;
  padding: 50px;
  margin: 20px;
  border-radius: 32px;
  color: inherit;
  font-family: Copperplate, Papyrus, fantasy;
}

.paper {
  background-image: url("https://previews.123rf.com/images/frenta/frenta1108/frenta110800033/10224784-hintergrund-mit-indianischen-traditionellen-mustern.jpg");
  width: 300px;

}

.usual {
  width: fit-content;
}

.card {
  background-color: black;
   padding: 15px; 
           
  /* font-size: 14px; */
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

.card:hover {
  cursor: pointer;
}

/* .card:hover {
            opacity: 1;
            padding: 30px;
            
            font-size: 30px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
          } */
.info {
  color: #00529B;
  background-color: #BDE5F8;
  background-image: url('https://wallpaperaccess.com/full/1892753.jpg');
}

.success {
  color: #4F8A10;
  background-color: #DFF2BF;
  background-image: url('https://i.imgur.com/Q9BGTuy.png');
}

.info,
.success,
.warning,
.error,
.validation {
  border: 1px solid;
  margin: 10px auto;
  padding: 15px 10px 15px 50px;
  background-repeat: no-repeat;
  background-position: 10px center;
  max-width: 460px;
}

.dropdown-click,
.dropdown-hover {
  position: relative;
  display: inline-block;
  cursor: pointer
}

.dropdown-hover:hover .dropdown-content {
  display: block
}

.dropdown-hover:first-child,
.dropdown-click:hover {
  background-color: #ccc;
  color: #000
}

.dropdown-hover:hover>.button:first-child,
.dropdown-click:hover>.button:first-child {
  background-color: #ccc;
  color: #000
}

.dropdown-content {
  color: #000;
  background-color: #fff;
}

.button:hover {
  color: #000 !important;
  background-color: #ccc !important
}

.logo {
  height: 85px;
}

.headline {
  font-size: 24px;
  font-weight: 700
}

/* STYLES COLLECTED BY GAUTAMKUMAR 
  G.DEV/GAUTAMJI*/
@import url('https://fonts.googleapis.com/css2?family=Radio+Canada&family=Source+Sans+Pro:wght@400&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Radio+Canada&display=swap');

/* body {
  font-family: Helvetica, sans-serif;
 
} */
/* button {
  /* background-color: #555;
  color: white; */
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;


  width: 280px;
} */

button[type=submit] {
  background-color: green;

}

button[type=reset] {
  background-color: blue;
}

button:hover {
  opacity: 1;
}

.sidenav {
  height: 100%;
  /* width: 250px; */
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  color: black;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 24px;
  /* color: white !important; */
  display: block;
  font-family: 'Source Sans Pro', sans-serif;
}
button{
  background:transparent;
  border:none;
}
a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
  font-family: 'Source Sans Pro', sans-serif;
}

.sidenav a:hover {
  border-left: 5px solid #00529B;
  color: rgb(7, 129, 211);
}

#popup {
  display: none;
  /* Hidden by default */
  position: absolute;
  /* Stay in place */
  z-index: 1;
  /* Sit on top */

  padding-top: 100px;
  /* Location of the box */
  left: auto;
  top: 0;
  width: 100%;
  /* Full width */
  height: 100%;
  /* Full height */
  overflow: auto;
  /* Enable scroll if needed */
  background-color: rgb(0, 0, 0);
  /* Fallback color */
  background-color: rgba(0, 0, 0, 0.4);
  /* Black w/ opacity */
}

/* Modal Content */
.popup-content {
  background-color: #fefefe;
  margin: center;
  padding: 20px;
  border: 1px solid #888;
  height: 70%;
  font-family: Helvetica, sans-serif;
}

.close {
  color: #aaaaaa;
  float: center;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

iframe {
  position: relative;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  border: none;
  border: none;
  font-size: smaller;
}

.iframe {
  position: relative;
  top: 0;
  left: 30%;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  border: none;
  font-family: 'Radio Canada', sans-serif;
}

.reveal {
  display: block;
}

.main {
  margin-left: -185px;
  /* Same as the width of the sidenav */
  /* font-size: 28px; Increased text to enable scrolling */
  padding: 0px 10px;
  /*
  width: 100%;
  height:100%
*/
}

@media screen and (max-height: 450px) {
  .sidenav {
    padding-top: 15px;
  }

  .sidenav a {
    font-size: 18px;
  }
}

.material-symbols-outlined {
  font-variation-settings:
    'FILL' 0,
    'wght' 400,
    'GRAD' 0,
    'opsz' 48
}


.sidenav #hovered {
  border-left: 5px solid #00529B;
  color: rgb(7, 129, 211);
}

.apt-header {
  width: 100%;
  height: 90px;
  position: absolute;
  background: #ffffff;
  top: 0;
  left: 0;
  color: rgb(51, 62, 212);
  z-index: 7;
  font-family: verdana;

}

.apt-header-base {
  width: 100%;
  height: 90px;
  position: absolute;
  top: 0;
  left: 0;
  color: white;
  z-index: 7;
  font-family: verdana;
  box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
}

#intro1 {
  left: 178px;
  top: 20px;
  font-family: verdana;
  font-size: 20px;
  color: #142170;
  height: 75px;
  width: 550px;
}

#intro2 {
  left: 750px;
  top: 20px;
  font-family: verdana;
  font-size: 30px;
  color: #000;
  font-weight: bold;
  height: 75px;
  width: 500px;
}

.apt-header-base {
  width: 100%;
  height: 100px;
  position: absolute;
  top: 0;
  left: 0;
  color: white;
  z-index: 7;
  font-family: verdana;
  -webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
}

.apt-header {
  width: 100%;
  height: 100px;
  position: absolute;
  background: #3d5b99;
  top: 0;
  left: 0;
  color: white;
  z-index: 7;
  font-family: verdana;

}

#img1 {
  left: 178px;
  height: 50px;
  width: 100px;
  top: 25px;
}

#form1 {
  left: 750px;
  height: 60px;
  width: 180px;
  top: 20px;
  font-family: verdana;
  font-size: 12px;
}

#form2 {
  left: 940px;
  height: 60px;
  width: 250px;
  top: 20px;
  font-family: verdana;
  font-size: 12px;
}

.submit1 {


  background: #5b7bc0;
  color: white;
  cursor: pointer;


}

.apt-body {
  position: absolute;
  left: 0px;
  top: 90px;
  width: 100%;
  height: 645px;


}

#intro1 {
  left: 178px;
  top: 20px;
  font-family: verdana;
  font-size: 20px;
  color: #142170;
  height: 75px;
  width: 550px;
}

#intro2 {
  left: 750px;
  top: 20px;
  font-family: verdana;
  font-size: 30px;
  color: #000;
  font-weight: bold;
  height: 75px;
  width: 500px;
}

#img2 {
  top: 130px;
  left: 178px;
  width: 537px;
  height: 195px;
}

#intro3 {
  left: 750px;
  top: 70px;
  font-family: verdana;
  font-size: 18px;
  color: #000;
  height: 50px;
  width: 300px;
}

#form3 {
  top: 120px;
  left: 750px;
  font-family: verdana;
  font-size: 20px;
  color: #142170;
  width: 450px;
  height: 495px;

}

#namebox {
  width: 200px;
  height: 40px;
  border-radius: 5px 5px 5px 5px;
  background: white;
  padding: 10px;
  font-size: 18px;
  margin-top: 8px;
  border-width: 1px;
  border-style: solid;
  border-color: gray;
}

#mailbox {
  width: 408px;
  height: 40px;
  border-radius: 5px 5px 5px 5px;
  background: white;
  padding: 10px;
  font-size: 18px;
  margin-top: 8px;
  border-width: 1px;
  border-style: solid;
  border-color: gray;
  color: grey
}

#mailbox2 {
  width: 408px;
  height: 40px;
  border-radius: 5px 5px 5px 5px;
  background: white;
  padding: 10px;
  font-size: 18px;
  margin-top: 8px;
  border-width: 1px;
  border-style: solid;
  border-color: gray;
}

#r-b {
  font-size: 12px;
  height: 15px;
  width: 15px;
}

.button2 {
  width: 250px;
  height: 40px;
  left: 750px;
  top: 625px;
  background: #00a400;
  font-family: SFProDisplay-Bold, Helvetica, Arial, sans-serif !important;
  font-size: 18px;
  color: white;
  border-radius: 5px 5px 5px 5px;
  border-width: 1px;
  border-style: solid;
  border-color: gray;
  cursor: pointer;
  outline: none;

}

#intro4 {
  font-family: verdana;
  font-size: 12px;
  color: gray;

}

#intro5 {
  font-family: verdana;
  font-size: 14px;
  color: gray;

}

.apt-body-footer {
  width: 100%;
  position: absolute;
  left: 0px;
  height: 80px;
  background: white;
  top: 570px;

}

#apt-body-footer-base {
  width: 900px;
  top: 15px;
  left: 200px;
  color: blue;
  height: 60px;
}

.sidenav {
  background-color: rgb(255, 255, 255) !important;
}

.profiler {
  border-radius: 50%;
  border: 1px solid;
  width: 40px;
  height: 40px;

}

#toast {
  visibility: hidden;
  max-width: 50px;
  height: 50px;
  /*margin-left: -125px;*/
  margin: auto;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;

  position: fixed;
  z-index: 1;
  left: 0;
  right: 0;
  bottom: 30px;
  font-size: 17px;
  white-space: nowrap;
}

#toast #img {
  width: 70px;
  height: 50px;

  float: left;

  padding-top: 16px;
  padding-bottom: 16px;

  box-sizing: border-box;


  background-color: #111;
  color: #fff;
}

#toast #desc {


  color: #fff;

  padding: 16px;

  overflow: hidden;
  white-space: nowrap;
}

#toast.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, expand 0.5s 0.5s, stay 3s 1s, shrink 0.5s 2s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, expand 0.5s 0.5s, stay 3s 1s, shrink 0.5s 4s, fadeout 0.5s 4.5s;
}

@-webkit-keyframes fadein {
  from {
    bottom: 0;
    opacity: 0;
  }

  to {
    bottom: 30px;
    opacity: 1;
  }
}

@keyframes fadein {
  from {
    bottom: 0;
    opacity: 0;
  }

  to {
    bottom: 30px;
    opacity: 1;
  }
}

@-webkit-keyframes expand {
  from {
    min-width: 50px
  }

  to {
    min-width: 350px
  }
}

@keyframes expand {
  from {
    min-width: 50px
  }

  to {
    min-width: 350px
  }
}

@-webkit-keyframes stay {
  from {
    min-width: 350px
  }

  to {
    min-width: 350px
  }
}

@keyframes stay {
  from {
    min-width: 350px
  }

  to {
    min-width: 350px
  }
}

@-webkit-keyframes shrink {
  from {
    min-width: 350px;
  }

  to {
    min-width: 50px;
  }
}

@keyframes shrink {
  from {
    min-width: 350px;
  }

  to {
    min-width: 50px;
  }
}

@-webkit-keyframes fadeout {
  from {
    bottom: 30px;
    opacity: 1;
  }

  to {
    bottom: 60px;
    opacity: 0;
  }
}

@keyframes fadeout {
  from {
    bottom: 30px;
    opacity: 1;
  }

  to {
    bottom: 60px;
    opacity: 0;
  }
}

.like {
  border-radius: 10px;
  background: white;
  color: blue;
  border: 1px solid;
  /* width:77px; */
  /* position: relative;
 left:-180 !important;
 padding:0px !important; */
}

.like:hover {
  background-color: blue;
  color: white;
  border: 1px solid;
}

.like-button {
  display: flex;
  align-items: center;
  justify-content: center;
}
.like-button:hover {
  fill: #00529B;
}
.circle{
  background-color: white;;
  border-radius:50%;
}
    </style>
 <?php
 echo suggestVideo2();
 
 function suggestVideo2() {
   
 
     $lastname = array(
         '3DMedicalAnimation',
         '11 Chap 03 Kinematics 06  Motion Under Gravity  Motion in a Straight Line  Class 11  JEE ',
         'ACID BASES AND SALTS  FULL CHAPTER  CLASS 10 CBSE',
         '10th Class Maths Chapter SETS',
         'Classification The Animal Kingdom',
         'COVID-19 The Facts',
         'class 10 math day 1',
         'Genetics - Part 2',
         'Genetics - Part 1',
         'Household Electricity  Domestic Electric Circuit  Ring System etc Class 10 ICSE CBSE',
         'Kidney anatomy',
         'Journey of Sound to the Brain',
         'math 4th day class',
     
     );
     $name = '';
     $name .= $lastname[rand ( 0 , count($lastname) -2)];
 
     echo "<title>Randoms|".$name."</title><div class='card top center'><h4 class='center helvetica right-slide'>".$name."</h4></div><video style='width:640;height:254' src='http://localhost/aptitude learns/uploads/" . $name . ".mp4' id='my-video' class='video-js' controls></video>
  ";
 }?></span>
  <!-- <input type='range' id='change_tim' onchange='change_tim()' step='0.05' min='0' max='player.duration()' value='player.currentTime()'><br/>
      -->
 <script name="vid_plclk_pause">
   var elem = document.getElementById("video_player");
 function openFullscreen() {
   if (elem.requestFullscreen) {
     elem.requestFullscreen();
   } else if (elem.webkitRequestFullscreen) { /* Safari */
     elem.webkitRequestFullscreen();
   } else if (elem.msRequestFullscreen) { /* IE11 */
     elem.msRequestFullscreen();
   }
 }
 function hide_play(){
 if(player.paused){
   play_vid();
 }
 else{pause_vid()}
 }
 </script>
 <script type="text/javascript">
 //   document.addEventListener('contextmenu', event => event.preventDefault());
 document.addEventListener('keyup', function(e){
   if(e.keyCode == 40)
     window.location.reload();
 })
 document.addEventListener('keyup', function(e){
   if(e.keyCode == 39)
     skip();
 })
 </script><script>
 document.addEventListener('keyup', function(e){
   if(e.keyCode == 77)
     player.volume-=0.5
 })
 document.addEventListener('keyup', function(e){
   if(e.keyCode == 78)
     player.volume+=0.5
 })
 document.addEventListener('keyup', function(e){
   if(e.keyCode == 70)
     openFullscreen()
 })
 document.addEventListener('keyup', function(e){
   if(e.keyCode == 75)
     player.pause() 
 })
 document.addEventListener('keyup', function(e){
   if(e.keyCode == 80)
     player.play()
 })
 document.addEventListener('keyup', function(e){
   if(e.keyCode == 37)
     back()
 })
 </script>
 <script>
     document.addEventListener("DOMContentLoaded", function() { startplayer(); }, false);
 var player;
 
 function startplayer() 
 {
  player = document.getElementById('video_player');
  player.controls = false;
 }
 
 function play_vid()
 {
   
  player.play();
 }
 function pause_vid()
 {
  player.pause();
 }
 function stop_vid() 
 {
  player.pause();
  player.currentTime = 0;
 }
 function change_vol()
 {
  player.volume=document.getElementById("change_vol").value;
 }
 function change_tim(){
   player.currentTime=document.getElementById("change_tim").value
 }
 function skip(){
   player.currentTime += 0.5
   
 }
 function back(){
   player.currentTime -= 0.5
   
 }
 </script> 
 <script>
   show();
 function show() {
     var image = document.getElementById('output');
   document.getElementById('FileToUpload').innerText = "Preview";
     image.innerHTML = "<iframe src='" + URL.createObjectURL(event.target.files[0]) + "' alt='loading...'></iframe>";
 }
 </script>
 
 