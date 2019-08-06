<!DOCTYPE html>
<html>
<title>SparkJoy Welome Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}
/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: 400px;
}
/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('logo1.png');
  min-height: 100%;
}
/* Second image (Portfolio) */
/* .bgimg-2 {
  background-image: url("/w3images/parallax2.jpg");
  min-height: 400px;
}
/* Third image (Contact) */
/* .bgimg-3 {
  background-image: url("/w3images/parallax3.jpg");
  min-height: 400px;
}  */
.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}
/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-info-circle"></i> ABOUT</a>
    <a href="#team" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-users"></i> TEAM</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    <a href="register.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-black">
      SIGN UP
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#team" class="w3-bar-item w3-button" onclick="toggleFunction()">TEAM</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SIGN UP</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">SPARKJOY</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT SPARKJOY</h3>
<!--   <p class="w3-center"><em>I love photography</em></p> -->
  <p>This app is designed to integrate all students from every corner of Los Angeles, and have them build connections that will
    aid towards their future aquisitions. SparkJoy gives an oppurtunity for students to communicate with each other based on their
  desired interest in the career field. This also gives high school students a chance to explore more options like gaining access 
    to career opportunities or more knowledge around their desired career field. Our goal for this website is to enable students to 
    converse with other students with similar interests in the career field. The opportunity to communicate with other students would 
    allow for a special support system that will help aid students along their preferred career pathways. 
  </p>
   <div class="w3-row">
  <div class="w3-col m6 w3-center w3-padding-large">
     <!-- <p><b><i class="fa fa-user w3-margin-right"></i>My Name</b></p><br>
      <img src="/w3images/avatar_hat.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333"> -->
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <!-- <p>Welcome to my website. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
    </div>
  </div>
  <!-- <p class="w3-large w3-center w3-padding-16">Im really good at:</p>
  <p class="w3-wide"><i class="fa fa-camera"></i>Photography</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-laptop"></i>Web Design</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Photoshop</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:75%">75%</div>
  </div> -->
</div>

<!-- <div class="w3-row w3-center w3-dark-grey w3-padding-16"> -->
  <!-- <div class="w3-quarter w3-section">
    <span class="w3-xlarge">14+</span><br>
    Partners
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">55+</span><br>
    Projects Done
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">89+</span><br>
    Happy Clients
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">150+</span><br>
    Meetings
  </div>
<! </div>
<! Second Parallax Image with Portfolio Text -->
 <!-- <div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">MEET THE TEAM</span>
  </div>
</div> -->

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="team">
  <h3 class="w3-center">MEET THE TEAM</h3>
  <p class="w3-center"><em>Here are our hardworking teammates who worked to create this website.</em></p><br>
  <p align="left"><img src="joy.jpeg" alt="Joy Wyckoff" align="left" width=150px hspace="20"> <b>Joy Wyckoff</b><br>  I'm going into my Senior Year at Van Nuys High School, where I've been the President of my class for 3 consecutive years. On my free time, I enjoy volunteering at Shelters, tutoring homeless children. Being on LAUSD's Superintendent Student Advisory Council, has really shown me all of the problems within our education system, which prompted me to think of this website, as a means to connect all of the students within this system.
</p><br><br>
  <p align="right"><img src="stela.jpeg" alt="Estela Padilla" align="right" width=150px hspace="20"><b> Estela Padilla</b><br> I am a rising senior currently enrolled at Granada Hills Charter High School.I have grown to have an interest in the computer science field. In the near future I hope to become a software engineer for Google.I enjoy coding for Python, HTML, JS, and CSS. Besides coding I enjoy doing sports such as soccer and track. One of my favorite hobbies would include playing video games and making origami. </p><br><br>
  <p align="left"><img src="paola.jpeg" alt="Paola Aguilar" align="left" width=150px hspace="20"><b> Paola Rosales</b><br> Hello! I am a student from John H. Francis Polytechnic High School, heading into my senior
year. One of my goals in the future is to pursue a career in the STEM field. Some of the things I
enjoy doing are eating, hanging out with my friends, and learning more about science.</p><br><br>
  <p align="right"><img src="chloe.jpeg" alt="Chloe Hyun" align="right" width=150px hspace="20"> <b>Chloe Hyun</b><br>I am a rising junior currently attending Granada Hills Charter High School. I am interested in science and aspire to go into the medical field, whether it be as a physician or a researcher. Thankfully, I have met wonderful people and learned many things through Girls Who Code. I enjoy spending time with my friends and family and I also like music and reading. </p><br><br>
  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <div class="w3-row-padding w3-center">
      <!-- <div class="w3-col m3">
        <img src="/w3images/p1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist over the mountains">
      </div>
      <div class="w3-col m3">
        <img src="/w3images/p2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans">
      </div>
      <div class="w3-col m3">
        <img src="/w3images/p3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup">
      </div>
      <div class="w3-col m3">
        <img src="/w3images/p4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
      </div>
    </div>
    <div class="w3-row-padding w3-center w3-section">
      <div class="w3-col m3">
        <img src="/w3images/p5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
      </div>
      <div class="w3-col m3">
        <img src="/w3images/p6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My beloved typewriter">
      </div>
      <div class="w3-col m3">
        <img src="/w3images/p7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train"> -->
      </div>

      <div class="w3-col m3">
        <!-- <img src="/w3images/p8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
      </div>
      <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button> -->
    </div>
  </div>

<!-- Modal for full size images on click-->
<!-- <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>
<! Third Parallax Image with Portfolio Text -->
<!-- <div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div> -->

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">CONTACT US</h3>
  <!-- <p class="w3-center"><em>I'd love your feedback!</em></p> -->

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <!-- <img src="/w3images/map.jpg" class="w3-image w3-round" style="width:100%"> -->
    </div>
    <div class="w3-col w3-panel">
      <div class="w3-large w3-margin-bottom" align="middle">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Los Angeles, US<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: mail@mail.com<br>
      </div>
      <p>Leave us a note :)</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

<script>
// Modal Image Gallery
// function onClick(element) {
//   document.getElementById("img01").src = element.src;
//   document.getElementById("modal01").style.display = "block";
//   var captionText = document.getElementById("caption");
//   captionText.innerHTML = element.alt;
// }
// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}
// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>