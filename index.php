<!-- Created by GautamKumar -->
<link rel="shortcut icon" href="logo.ico">
<?php
// Initialize the session
session_start();
//error_reporting(E_ERROR | E_PARSE);
$usr = $_SESSION['username'];

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    echo  '<button class="w3-button  w3-silver w3-right" onclick="showProfile()"><image src="profile.png" class="w3-round-xxlarge" ></image>' . $usr . '</button>' ;

}
else{
    echo '<script>window.location.href="login.php"</script>';
}

// Include config file
require_once "config.php";
?>
<script>
function showProfile() {
 window.location.href="profile.php";
}
</script>
<!DOCTYPE html>
<html lang ="hi-IN">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Astrology Intelligency</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="shortcut icon" href="logo.ico">
<style>
/*
 Name: Gautam Network

*/
*{
margin:0;
padding:0;
box-sizing:border-box;
}
button {
padding: 20px 30px;
font-size: 1.5em;
width: 200px;
cursor: pointer;
border: 0px;
position: relative;
margin: 20px;
transition: all .25s ease;
overflow: hidden;
border-radius: 10px
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

button.active {
transform: scale(.85)
}

button.activeLoading .loading {
visibility: visible;
opacity: 1
}

button .loading {
opacity: 0;
visibility: hidden
}
body {
font-family:sans-serif;
font-weight:300;
line-height:1.2;
font-size:1em;
color:#fff;
}
a,a:hover {
text-decoration:none;
}
img{
 max-width:100%;
}
.container{
 width:100%;
 max-width:520px;
 min-height:100vh;
 padding:20px;
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
body{
    background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("bg.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    image-rendering: -webkit-optimize-contrast;
    background-position:center;


  }
.container > div {
 animation:anim 0.5s;
}
@keyframes anim {
 0%{
  opacity:0;
 }
 100%{
  opacity:1;
 }
}
#error{
 display:block;
 margin:8px 0;
 color: red;
 font-weight:bold;
}
#sec-1 h1 {
  overflow: hidden;
  border-right: .15em solid orange; /* The typwriter cursor */
 white-space: nowrap; /* Keeps the content on a single line */
 margin: 0 auto; /* Gives that scrolling effect as the typing happens */

animation:
    typing 3.6s steps(30, end),
    blink-caret .5s step-end infinite;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 90% }
}
/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: orange }
}
}
.img-logo {
 margin-right:30px;
}
.form-group {
 margin-bottom:20px;
}
label {
 color:#fff;
 font-weight:500;
}
input, button {
 width:100%;
 height:45px;
 border:none;
 outline:none;
 border-radius:2px;
 padding:0 10px;
}
input {
 background:#fff;
 color:#333;
}
button {
 background: gold;
 color: white;
 font-weight:500;
 transition:0.1s;
}
button:hover {
 background: white;
 color: green;
}
@media all and (min-width: 1025px) {
dwnld {
display: none;
}
}
h1{
 text-align:center;
 color:#fff;
 margin:10px 0 20px;
 text-transform:capitalize;
}
.hide{
 display:none;
}
.mb-2{
 margin-bottom:20px;
}
.my-2{
 margin:20px 0;
}
p{
 margin:10px 0;
 font-size:1.1rem;
}
.follow{
 display:block;
 background:#fff;
 text-align:center;
 color:#000;
 font-weight:500;
 text-transform:uppercase;
 margin:15px 0;
 width:100%;
 padding:10px;
}
.logo {
float: left;
height: 20%;
width: 20%;
}
#loading {
    position: fixed;
    height: 100%;
    width: 100%;
    z-index: 999;
    background: rgba(255,255,255,.8);
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
</style>
<script src="https://kit.fontawesome.com/1364c3c233.js" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div id="google_translate_element">GautamNetwork</div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'default'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<br/><main class="w3-round-xxlarge container"><div id = "loading"><br/><br/></br/><br/><br/></br/><div class="w3-center"><img src="logo.ico" alt="loading.." class="w3-round" width=10%></img> <p class='launch'>from GautamNetwork</p></div></div>
  <div id="sec-1" ></a><script>var loading= document.getElementById("loading");window.speechSynthesis.cancel(); setTimeout(() => { loading_block(); }, 3000);
function loading_block(){
  loading.classList.add("hide");
}
</script>
       <img class="w3-round logo" src="logo.ico" alt="" >
  <h1>  Astrology Intelligency</h1><audio autoplay="true" src="typing.wav">
	  Update your browser. Your browser does not support HTML audio
	</audio> <br/><br/>
    <div class="img-logo"><h2 style="text-align: center;">Welcome</h2>
      </div>
    <div class="form-group">
      <label>Enter Your Firstname</label>
      <span class="w3-panel w3-display-container" id="error"></span>
      <input type="text" placeholder="Your firstname" id="input">
    </div>
    <div class="form-group">
    <button class="w3-center w3-round-xxlarge btn" onclick="showResult()" id="next">Click Here</button><a href="screenshot.html"><img class="w3-center" onclick='window.location.href="https://storage.googleapis.com/growinfintybuck/useronelaptop001@gmail.com/AstrologyIntelligencyapk.apk"' src="google-play-badge.png" alt="Download for free" style="max-width:50%"></img>
  </a>  </div>
  </div>
  <div id="sec-2" class="hide">
    <h1 id="top-name"></h1>
    <div class="mb-2" >
        <img src="https://www.theglobalkaka.com/wp-content/uploads/2020/02/janam-kundli-online-in-499-only-1.png" alt="" >
    </div><div class="w3-panel w3-yellow w3-topbar w3-bottombar w3-border-amber w3-hover">
  <div class="w3-container w3-center w3-animate-left">  <h3 class="w3-center">Summary</h3>
    <p id="summary"></p><i>Raw Source:Webdunia</i><button class= "w3-center w3-round-xxlarge btn" onclick="copy()">Copy</button></div>
    <div class="w3-center my-2" >
      <img src="https://fashionsista.co/downloadpng/png/20210415/zodiac-sign-facts-a1facts.jpg" alt="" height=50%; width=50%; >
    </div>
    <div class="w3-container w3-center w3-animate-left">
    <h3>Note : </h3>
    <p>Aur jada jankari ke liye aap Shree 108 mahant Gautam baba ji maharaj se bilkul bhi na mile 😁😂🙏, dhanyvad!
    </p>
    <h3>Best wishes</h3>
    <p>
     May God bless you with a good career and get a good life partner.You have a need for people to admire and like you and enjoy their recognition when you achieve certain milestones in your life.
    </p>

    <div class="my-2" >
      <img src="data:image/jpeg;base64,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" alt="" >
    </div>
    <h3>Information</h3>
    <p>
    किसी मनुष्य की भौतिक पहचान उसका नाम ही है। जिसके दूवारा उसके आंतरिक गुणों और व्यवहार आदि का पता चलता है। हमारे हिन्दू धर्म में नाम रखते समय ग्रहों आदि की चाल का विशेष ख्याल रखा जाता है, ताकि जातक का नाम उसके स्वभाव व भविष्य के अनुकूल हो। इन सभी बातों के साथ नाम रखते हुए इस बात का भी ख्याल रखा जाता है कि बच्चे के नाम का अर्थ कुछ अटपटा ना हो। नाम रखते हुए माता-पिता इस बात पर भी विशेष जोर देते हैं कि नाम का शुभ हो और वह उसके व्यक्तित्व को अच्छी तरह प्रदर्शित करे।
    </p>
    <p>
    हमारे हिन्दू धर्म के सिद्धांतों के अनुसार यह निष्कर्ष निकलता है कि नाम का हमारे व्यवहार से विशेष संबंध होता है।
    राम, रहीम, मोहन, आदि नाम वाले जातक आमतौर बेहद शांत स्वभाव वाले देखने को मिलते हैं। दूसरी तरफ कृष्ण, भोले, कन्हैया, आदि नाम के जातक चुलबुली और शरारती प्रवृत्ति के देखने को मिलते है।
   </p>
   <p>
   नाम न सिर्फ हमारे व्यक्तित्व के विषय में जानकारी देता है बल्कि यह हमारे भविष्य का भी आइना होता है। अगर किसी जातक को अपना जन्म समय नहीं पता तो वह नाम के शुरुआती अक्षरों द्वारा अपना भविष्यफल जान सकता है। नाम से राशि जानने की पद्धति बेहद प्राचीन और सटीक मानी जाती है।
   </p>
   <div class="my-2" >
     <img src="https://png2.cleanpng.com/sh/4e155c5a44b8227aeaf571030e8bf7ab/L0KzQYm3V8A0N6dri5H0aYP2gLBuTfdidpZ4gNM2bHHug7n0ib1pcZ9pjdt8bT3sfrXwgb13caRthuc2NXK2crboVvM2OpY5S6I3OUO2Q4S3VccyPWQ1Tqc8Mkm1Q4SCVb5xdpg=/kisspng-ganesha-lakshmi-hinduism-india-vishnu-5b3bea6c52e430.9333305715306532923395.png" alt="" >
   </div>
  <button class="w3-round-xxlarge btn" onclick="back()">Back</button>
 </div>
</div></div>
</main>
<!-- script --><script>
const btns = document.querySelectorAll('button');
btns.forEach((items)=>{
items.addEventListener('click',(evt)=>{
evt.target.classList.add('activeLoading');
})
})

</script>
<script>

const sec1 = document.getElementById("sec-1");
const sec2 = document.getElementById("sec-2");
const error = document.getElementById("error");
const input = document.getElementById("input");
const topName = document.getElementById("top-name");
const summary = document.getElementById("summary");
const pattern = /^[A-Za-z]{3,15}$/;

const data = [
 {chart:"a", details:"नाम वाले लोग काफी मेहनती और धैर्यवान होते हैं। इन्हें ज्यादातर आकर्षक दिखने वाले लोग पसंद आते हैं और ये खुद भी आकर्षक दिखना पसंद करते हैं। इनमें किसी भी परिस्थि‍ति के अनुसार खुद को ढालने  गजब की क्षमता होती है और इनकी पसंद भीड़ से जरा अलग हटकर होती है।शि‍क्षा या करियर के मामले में यह लक्ष्य तक पहुंचने से पहले हार मानने वालों में से नहीं हैं, और किसी भी काम को अंत तक पहुंचाने के लिए यह हर संभव प्रयास करते हैं। रोमांस के मामले में यह लोग जरा पीछे ही रहते हैं। अपनी भावनाओं को जताना इनके लिए संभव नहीं होता लेकिन अपने प्यार और रिश्तों को पूरा महत्व देते हैं। घुमा-फिराकर बातें करना इन्हें बिल्कुल पसंद नहीं होता, भले ही सच कड़वा हो, लेकिन यह उसे स्वीकार करते हैं। बात चाहे पर्सनल हो या प्रोफेशनल,यह खुले तौर पर अपने विचार रखने में विश्वास रखते हैं। हालां‍कि यह लोग हिम्मती होते हैं, लेकिन फिर भी परिस्थि‍तियों से बचकर निकलने की कोशि‍श करना भी इनकी आदत में शुमार होता है। कभी-कभी ए से नाम वाले लोग आलसी भी होते हैं, और इन्हें बात-बात पर गुस्सा भी आता है।You’re somebody who tends to keep people a little bit at bay or at arms length, but when you allow people into your inner sanctum and when they become your close friends, and if they betray you then that really hurts."},
 {chart:"b", details:"नाम वाले लोग जिंदगी में नए-नए रास्ते तलाशने में यकीन रखते हैं। किसी एक रास्ते को चुनकर उसपर आगे बढ़ना, इनके बस की बात नहीं है। यह लोग कुछ-कुछ संकोची लेकिन बहुत संवेदनशील होते हैं, और दोस्तों के साथ आसानी से घुल-मिल नहीं पाते।यह अपने अंदर कई तरह के राज को समेट कर रखते हैं, और कई बार तो इनके करीबी भी नहीं जान पाते इनकी गुप्त बातें। वैसे तो यह ज्यादा दोस्त नहीं बनाते, लेकिन जिससे भी दोस्ती रखते हैं, बिल्कुल दिल से रखते हैैं।There are times when you are the life and sole of the party and an extrovert, but at other times you tend to be introverted and quite reserved."},
 {chart:"c", details:"नाम वाले लोगं सफलता के मामले में भी, सी से सिक्योर होते हैं, यानि इन लोगों को हर क्षेत्र में सफलता मिलती है। शक्ल-ओ-सूरत से यह काफी खूबसूरत और आकर्षक होते हैं, और हमेशा किस्मत साथ लेकर चलते हैं। मतलब यह  लोग काम के मामलों में बहुत खुशकिस्मत होते हैं, और आगे बढ़ने से इन्हें कोई रोक नहीं सकता। खुद को हमेशा व्यवस्थि‍त और बेहतर बनाए रखना इन्हें बेहद पसंद होता है, इसीलिए यह खुद को आकर्षक बनाए रखने में कोई कसर नहीं छोड़ते। दूसरों के दुख- दर्द में साथ देना और मदद करना इनकी खासियत होती है। खुशी में न सही लेकि‍न गम में यह कभी किसी का साथ नहीं छोड़ते और अंत तक निभाते हैं। स्वभाव से काफी इमोशनल और कभी-कभी चंचल होते हैं। "},
 {chart:"d", details:"नाम वाले लोगों का भाग्य बिल्कुल डी से बनने वाले स्मार्इल की तरह ही होता है, यानि हंसता-खि‍लखि‍लाता हुआ। सफलता के मामले में यह लोग काफी खुशकि‍स्मत होते हैं, और हर काम में इन्हें सफलता मिलती है। कभी-कभी जरूर इनका भाग्य साथ नहीं देता, लेकिन इन्हें विचलित नहीं होना चाहिए, क्योंकि इन्हें आगे चलकर ढेर सारी खुशि‍यां मिलती हैं। यह लोगों के बातों पर ध्यान देना पसंद नहीं करते बल्कि अपने मन की करना ही इन्हें भाता है। एक बार यह लोग अगर कुछ करने की ठान लेते हैं, तो उस काम को पूरा करके ही मानते हैं। यह लोग स्मार्ट होते हैं, और बगैर किसी प्रयास के भी इनके व्यक्तित्व में गजब का आकर्षण होता है। किसी की मदद करने के मामले में यह हमेशा आगे रहते हैं, फिर चाहे वह दोस्त हो या दुश्मन, हमेशा मदद के लिए तैयार होते हैं। रिश्ता निभाने के मामले में भी यह लोग बड़े दिलवाले होते हैं और पूर्ण समर्पित होने के साथ ही विश्वासपात्र भी होते हैं।"},
 {chart:"e", details:"नाम वाले लोग हंसी-मजाक उनकी आदतों में शुमार होता है। यह लोग कुछ मुंहफट-सा मिजाज लिए हुए होते हैं, और इन्हें टोकने वाले लोग बिल्कुल पसंद नहीं होते। ऐसे लोगों से ये तुरंत किनारा करना ही बेहतर समझते हैं। बेतरतीब तरह से रहना इन्हें अच्छा नहीं लगता, सबकुछ व्यवस्थित और सलीके से रखना ही पसंद होता है। प्यार के मामले में यह थोड़े कम संजीदा होते हैं, लेकिन इनका मिजाज दिलफेंक आशिक की तरह होता है, कब किसपर आ जाए, कुछ कहा नहीं जा सकता। वैसे तो इनकी जिंदगी में रिश्तों के मामले में उतार चढ़ाव आते ही रहते हैं, और लोगों का आना-जाना लगा ही रहता है। लेकिन एक बार अगर यह दिल में किसी को पक्की जगह दे बैठें, तो उनके प्रति पूरी तरह से समर्पित होते हैं। "},
 {chart:"f", details:"नाम वाले लोग, जिम्मेदारी के मामले में बिल्कुल फिट होते हैं। यह लोग जीवन में हर चीज का संतुलन बनाकर चलते हैं, और पैसे खर्च करने के मामले में काफी सोच-विचारकर चलते हैं। वैसे तो आत्मविश्वास से भरपूर होते हैं, लेकिन स्वभाव से बहुत संवेदनशील और भावुक होते हैं। ये ज्यादातर अकेले रहना पसंद करते हैं। "},
 {chart:"g", details:"नाम वाले लोग किसी की मदद करने के लिए हमेशा तैयार होते हैं, और खुद को हर परिस्थिति में ढाल लेने की क्षमता इनमें होती है। यह लोग दिल के बहुत साफ होते हैं, इसीलिए चीजों को तोड़-मरोड़कर या गोल-मोल कर पेश करना इनकी आदत में नहीं होता।यह हमेशा अपनी गलतियों से सबक लेकर आगे बढ़ते हैं, और सतर्क रहते हैं। बेवजह किसी पर खर्च करना इनकी डिक्शनरी में शामिल नहीं होतां। इनका व्यक्ति‍त्व आकर्षक होता है, लेकिन यह  लोग हर किसी से घुलने मिलने में रूचि नहीं रखते। जिन लोगों को यह अपना मानते हैं, उनकी अहमियत हमेशा बनाए रखते हैं।"},
 {chart:"h", details:"नाम के लोग राजसी स्वभाव के होते हैं, और मस्तमौला, बेफिक्र जिंदगी जीना पसंद करते हैं। इनके लिए पैसा बहुत महत्वपूर्ण होता है। हालांकि यह लोग दिल के सच्चे होते हैं, हंसमुख स्वभाव के साथ माहौल को हल्का बनाकर रखते हैं, लेकिन कभी-कभी ये बहुत संकोची और शर्मीले स्वभाव के भी होते हैं। इन्हें अपनी छवि और मान-सम्मान की बहुत चिंता होती है। किसी की मदद के लिए यह हमेशा तैयार रहते हैं, और कोई निर्णय लेने में देर नहीं लगाते। वैसे तो काफी दिलदार टाइप के होते हैं, लेकिन इनमें चतुराई भी बहुत होती है,जो यह कभी शो नहीं होने देते। "},
 {chart:"i", details:"नाम के लोग स्वभाव से काफी संवेदनशील होते हैं, और अक्सर लोगों के आकर्षण का केंद्र होते हैं। यह लोग अपनी बात से पलटने में माहिर होते हैं और इन्हें इस बात का कम ही होश रहता है, कि यह सही का साथ दे रहे हैं, या गलत का। इस तरह के लोग किसी को भी आसानी से आकर्षि‍त करने की क्षमता रखते हैं, लेकिन इनके हाथ से सब कुछ फिसलने में भी देर नहीं लगती। हर काम के काफी सोच समझ कर करने की आदत इनकी विशेषता है। दिखने के मामले में ये लोग काफी आकर्षक और सेक्सी होते हैं, लेकिन प्यार पाने की चाहत इनके अंदर बसी होती है।"},
 {chart:"j", details:"नाम के लोग स्वभाव से चंचल होते हैं। दिखने में तो यह खूबसूरत होते ही हैं, साथ ही अच्छे गुणों का होना इनके व्यक्तित्व की विशेषता होती है। एक बार इन्होंने जो ठान लिया, फिर तो यह किसी की नहीं सुनते और वह काम करके ही मानते हैं। हां पढ़ाई- लिखाई के मामले में जरूर यह थोड़ा पीछे ही रहते हैं, लेकिन जिम्मेदारियों को निभाने के मामले में यह सबसे आगे होते हैं।  लेकिन जिनके जीवन में ये हमसफर बनकर जाते हैं, समझिए वे दुनिया के खुशनसीब लोगों में से एक हैं, क्योंकि खूबसूरती के साथ इनमें जीवन के हर मोड़ पर साथ निभाने का विशेष गुण भी होता है।"},
 {chart:"k", details:"नाम वाले लोगों को परफेक्शनिस्ट कहा जाए तो कोई बड़ी बात नहीं होगी, क्योंकि इन्हें हर काम परफेक्शन के साथ ही पसंद होता है। आपने पार्टनर के रूप में स्मार्ट और समझदार साथी को पसंद करते हैं, जब तक मन मुताबिक साथी नहीं मिलता, यह समझौता बिल्कुल नहीं करते। इन्हें भीड़ से अलग और दूसरों से जरा हटकर रहना ज्यादा पसंद होता है। पैसा कमाने को लेकर इनका नजरिया बिल्कुल साफ होता है, और यह पहले अपने बारे में ही सोचना ज्यादा पसंद करते हैं। कभी सख्त और कभी नर्म स्वभाव को लेकर चलते हैं, लेकिन दोनों ही मामलों में बेहद दृढ़ होते हैं।इस मामले में यह पारंगत होते हैं।"},
 {chart:"l", details:"नाम के लोग काफी चार्मिंग या यूं कहें कि आकर्षक होते हैं। ख्वाबों की दुनिया में जीना अैर छोटी-छोटी चीजों में खुश रहना इनका खास गुण होता है। इन्हें जीवन में बहुत कुछ पाने की ख्वाहिश नहीं होती।  परिवार की अहमियत इनके लिए सबसे ज्यादा होती है।कभी-कभी इनके सामने आर्थिक समस्याएं जरूर आती हैं, लेकिन हर समस्या से निपटने के लिए इन्हें रास्ता मिल जाता है।  "},
 {chart:"m", details:"नाम से शुरू होनेवाले लोग बातों को मन में दबाने वाली प्रवृत्ति के होते हैं। कहते हैं ऐसा नेचर कभी-कभी दूसरों के लिए खतरनाक भी साबित हो जाता है। चाहे बात कड़वी हो, यदि खुलकर कोई कह दे तो बात वहीं खत्म हो जाती है, लेकिन बातों को मन रखकर उस चलने से नतीजा अच्छा नहीं रहता। ऐसे लोगों से उचित दूरी बनाए रखना बेहतर है।इनका जिद्दी स्वभाव कभी-कभार इन्हें खुद परेशानी में डाल देता है। वैसे अपनी फैमिली को यह  बेहद प्यार करते हैं। खर्च करने से पहले ज्यादा सोच-विचार नहीं करते। सबसे बेहतर की ओर यह ज्यादा आकर्षित होते हैं। प्यार की बात करें तो यह संवेदनशील होते हैं और जिस रिश्ते में पड़ते हैं उसमें डूबते चले जाते हैं और इन्हें ऐसा ही साथी भी चाहिए जो इनसे जी जान से प्यार करे। यह बात अलग है, कि अपनी यह मंशा यह किसी के सामने जाहिर नहीं करते।"},
 {chart:"n", details:"नाम वाले लोग खुले विचार के होते हैं, और महत्वाकांक्षाओं से भरे हुए भी होते हैं। हर काम में परफेक्शन इन्हें पसंद होता है, और यह खुद भी बेहतर काम करने का पूरा प्रयास करते हैं। इनका व्यक्तित्व बेहद आकर्षक होता है, जो आसानी से किसी को भी आकर्ष‍ित करता है। स्वभाव से कभी नर्म कभी गर्म होते हैं, और किसी से मतभेद होने पर पंगा लेने में भी इन्हें देर नहीं लगती। सामान्य तौर पर इनका जीवन संपन्न रहता है।  "},
 {chart:"o", details:"नाम वाले लोगों का दिमाग काफी तेज होता है। यह लोग बोलने में कम और करने में ज्यादा विश्वास करते हैं। इसी विशेषता के कारण यह लोग जीवन में सफलता प्राप्त करने में सक्षम होते हैं। जिंदगी में ख्बाव देखना और उन्हें पूरा करने के लिए प्रयास करना इनके जीवन में लगा रहता है और यह हर क्षेत्र में सफल भी होते हैं।समाज के साथ चलने के बजाए, जरा हटकर चलना इन्हें ज्यादा पसंद होता है। "},
 {chart:"p", details:"नाम के लोग खुले विचार के होते हैं, और हर काम को परफेक्शन के साथ करना इन्हें पसंद होता है। इनके हर काम में सफाई अैर खरापन साफ दिखाई देता है। यह लोग दिल के साथ होते हैं, और अपनी तरह के लोगों के साथ इनका तालमेल बेहतर होता है। अपने आसपास के लोगों का ख्याल रखना और सभी को साथ में लेकर चलना इनकी आदत होती है। हां कभी-कभी दुनिया को अपने अनुसार चलाने की आदत भी इनमें होती है, जो इन्हें नुकसान भी पहुंचा देती है। यह लोग अपनी ही उलझनों में उलझे रहते हैं, और इनकी निर्णय लेने की क्षमता बहुत कमजोर होती है। यह लोग वैसे तो सामान्य होते हैं, लेकिन इनकी छवि कई बार विपरीत भी बन जाती है। इन्हें हर कोई नहीं समझ पाता।You strive for security in your life both in your personal life and in your career."},
 {chart:"q", details:"नाम वाले लोग सच्चे और र्इमानदार होते हैं। इनमें कलात्मकता का भी भंडार होता है। इस तरह के लोग ज्यादातर अपनी ही दुनिया में खोए रहते हैं, और जिंदगी में कुछ पाने की इनमें इच्छा नहीं होती। किस्मत हमेशा इनका साथ देती है, और इन्हें बिन मांगे ही कई बार मोती मिल जाता है। प्यार के मामले में ये होते तो ईमानदार हैं, लेकिन साथी के साथ इनका मतभेद लगा ही रहता है। इनके विचार आसानी से किसी के साथ नहीं मिलते। इनके प्रति किसी का आकर्षण आसानी से हो जाता है, लेकिन मानसिक स्तर मेल नहीं खा पाता।"},
 {chart:"r", details:"नाम वाले लोग सामाजिक जिंदगी जीना पसंद नहीं करते, लेकिन अपने परिवार को बहुत अहमियत देते हैं। पढ़ने-लिखने में इनकी बहुत अधिक रूचि नहीं होती और भीड़ से अलग होकर चलना इन्हें पसंद होता है। यह  हमेशा वह काम करते हैं, जो दुनिया नहीं करती, और इसीलिए लोग इन्हें पसंद भी करते हैं। हालांकि यह लोगों के आकर्षण केंद्र भी होते हैं। इन्हें किसी चीज की कोई कमी नहीं होती और यह जीवन में तेजी से आगे बढ़ते हैं। अपने से ऊपर की सोच और समझ वाले लोग इन्हें आकर्षित करते हैं। खूबसूरती इन्हें अपनी ओर खींचती है। दिल से साफ होते हैं, लेकिन कई बार लोग इन्हें गलत भी समझ लेते हैं। वैसे वैवाहिक जीवन में उठा-पटक लगी ही रहती है।"},
 {chart:"s", details:"नाम वाले लोग काफी मेहनती होते हैं। यह  बातों के इतने धनी होते हैं कि सामने वाला इनकी ओर आकर्षित हो ही जाता है। हर मामले में काफी सोच विचार कर काम करना इनकी आदत में शुमार होता है। पसर्नल मामलों को किसी से शेयर करना इन्हें बिल्कुल नहीं भाता और कई बार इनके बातचीत करने का अंदाज इनकी छवि को खराब कर देता है। यह प्यार के मामले में काफी गंभीर होते हैं, सोच विचार कर ही कदम उठाते हैं। प्यार मोहब्बत में कुछ थोड़े शर्मीले किस्म के होते हैं, जिसके कारण अपनी ओर से पहल करना इनके बस की बात नहीं होती। "},
 {chart:"t", details:"नाम वाले लोग आकर्षक दिखने वाले और खुशमिजाज टाइप के लोग होते हैं। मेहनत करने से इन्हें जरा परहेज ही रहता है, लेकिन पैसे के मामले में कोई कमी भी नहीं होती। अपने मन की बात यह   आसानी से किसी को भी नहीं बताते और बातों को सीक्रेट रखने में बेहद माहिर होते हैं। हां प्यार के मामले में यह  काफी रोमांटिक किस्म के होते हैं और अपने बाकी रिश्तों को भी ध्यान में रखते हैं।"},
 {chart:"u", details:"नाम वाले लोगों का दिल जीतने में माहिर होते हैं। वैसे तो यह हर मामले काफी होशियार होते हैं, लेकिन कई कामों को एक साथ करने के चक्कर में यह काम बिगाड़ भी लेते हैं। दूसरों के लिए वक्त निकालना इन्हें अच्छी तरह से आता है, और आगे बढ़ते हुए यह पीछे मुड़कर देखना पसंद नहीं करते। अपने साथी को यह सबसे अलग देखना पसंद करते हैं और साथी के प्रति इतने समर्पित होते हैं, कि उनके ख्यालों में खोना इन्हें अच्छा लगता है। अपनी खुशी से ज्यादा इन्हें अपने साथी की खुशी प्रिय होती है।"},
 {chart:"v", details:"नाम के व्यक्ति स्वभाव से थोड़े आरामी किस्म के होते हैं। दिल के साफ होते हैं, और वही काम करना पसंद करते हैं, जो इनके मन को भा जाए। अपनी बातें किसी से शेयर करना इन्हें अच्छा भी नहीं लगता। बंदिशों में रखकर इनसे आप कुछ नहीं करा सकते। बात प्यार की करें तो यह अपने प्यार का इजहार कभी नहीं करते। कई बार इनके द्वारा हंसी-ठहाके में कही गई बातों से भी यह लोग काफी गहरी बातें निकाल ही लेते हैं। लेकिन इन्हीं बातों से खुद भी कभी-कभी परेशान हो जाते हैं। "},
 {chart:"w", details:"नाम के लोग संकुचित दिल के होते हैं और एक ही ढर्रे पर चलते हुए यह बोर भी नहीं होते। ईगो वाली भावना तो इनमें कूट-कूटकर भरी होती है। यह जहां रहते हैं वहीं अपनी सुनाने लग जाते हैं, जिससे सामने वाला इंसान इनसे दूर भागने लगता है। हालांकि, हर मामले में सफलता इनकी मुट्ठी तक पहुंच ही जाती है। प्यार की बात करें तो यह ना- ना करते हुए ही आगे बढ़ते हैं। हालांकि, इन्हें ज्यादा दिखावा पसंद नहीं और अपने साथी को उसी रूप में स्वीकार करते हैं जैसा वह वास्तव में है।"},
 {chart:"x", details:"नाम वाले लोग जरा अलग स्वभाव के होते हैं। यह हर मामले में परफेक्ट होते हैं, लेकिन न चाहते हुए भी गुस्से के शिकार हो ही जाते हैं। इन्हें कोई काम धीमी गति से बिल्कुल पसंद नहीं होता बल्कि यह फटाफट निपटाने में ही यकीन रखते हैं। किसी भी चीज से यह लोग बहुत जल्दी बोर हो जाते हैं। यह क्या करने वाले हैं इस बात का पता इन्हें खुद भी नहीं होता। प्यार के मामले में फ्लर्ट करना इन्हें ज्यादा पसंद है। कई रिश्तों को एकसाथ लेकर आगे चलने की भी हिम्मत इनमें होती है।"},
 {chart:"y", details:"नाम के लोग सही सलाह देने और रस्ता दिखाने में माहिर होते हैं। खाने-पीने के ये बहुत शौकीन होते हैं और खर्च करने के लिए कभी नहीं सोचते। अच्छी पर्सनैलिटी के यह बादशाह होते हैं और लोगों को दूर से ही पढ़ लेने की कला इन्हें अच्छे से आती है। इन्हें ज्यादा बातचीत करना पसंद नहीं। धन-दौलत नसीब तो होता है, लेकिन इन्हें पाने में काफी वक्त लग जाता है। प्यार के मामले में इन्हें अपने साथी की कोई बात कभी याद नहीं रहती। हालांकि सच्चे और खुले दिल का साथ व रोमांटिक नेचर इनकी हर गलती को माफी दिला देता है। "},
 {chart:"z", details:"नाम वाले लोग स्वभाव से गंभीर होते हैं, लेकिन सारे काम बड़े ही कूल अंदाज में करते हैं। जो बोलना, साफ बोलना और जिंदगी को एंजॉए करना इनका फंडा होता है। न मिलने वाली चीजों पर रोने की बजाय उसे छोड़कर आगे बढ़ना इन्हें पसंद है। इन्हें दिखावा नहीं पसंद और इनकी सादगी को देख इन्हें बेवकूफ समझना बहुत बड़ी बेवकूफी होगी। प्यार के मामले में यह रोमांटिक होते हैं और किसी को भी अपनी ओर आकर्षि‍त करने में सक्षम होते हैं। अपने प्यार के सामने "},
];

function showResult(){
 let name = input.value;
 error.textContent = '';
 if(name.length < 3 || name.length > 15 || !pattern.test(name)) {
  error.textContent = "Please enter a valid firstname";
  
 } else {
  document.getElementById("next").innerHTML = '<img class="w3-circle" src="https://i.pinimg.com/originals/e6/1a/7b/e61a7ba7910090d6e8f40ca47aff3d09.gif" height= 100%></img>';
  document.getElementById("next").class = "w3-circle";
  setTimeout(() => { show(name); }, 5000);
 }
}
function show(name) {
  let naam = name.slice(2,3,4,5).toLowerCase()
 const select = data.find(d => d.chart == naam)
 let naam2 = name.slice(Math.random()).toLowerCase()
 const select2 = data.find(d => d.chart == "x" || "z" || "a")
 sec1.classList.add("hide");
 sec2.classList.remove("hide");
 window.scrollTo(0,0);
 topName.textContent ="||"+name+" नाम का विश्लेषण||";
 summary.textContent = name +" "+select.details +select2.details;

 var message = document.getElementById("summary").textContent;
 var msg = new SpeechSynthesisUtterance(message)
 var voices = window.speechSynthesis.getVoices()
 msg.voice = voices[1]
 msg.lang = 'hi'
 window.speechSynthesis.speak(msg)
}
function copy(){
  var message = document.getElementById("summary").textContent;

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(message);

  /* Alert the copied text */
  alert("Copied the text: " + message);
}
function back(){
 history.go(0);
 window.speechSynthesis.cancel();
}

</script>
<div class="w3-round footer"> <marquee behaviour="scroll" direction="left" scrollamount="5" loop="true" onmouseover="this.stop();" onmouseout="this.start();"><span class="w3-animate-top">Welcome user! We are glad to see you here , this is an artificial preditor which is designed after many research,surveys and after collecting some astrological knowledge.This may vary from the professional <q>Astrology</q> style, this is based on AI processing and some true and person-based proved statements.By continuing , you are agree with our<a href="conditions.html" style="color:blue;"><u> conditions.</u></a></span></marquee>
<h2 style="color:green;">from GautamTechnology</h2></div>

</body>
</html>
