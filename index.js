
//Escribir letras
function typeEffect(element, speed) {
  var text = $(element).text();
  $(element).html('');
  
  var i = 0;
  var timer = setInterval(function() {
          if (i < text.length) {
            $(element).append(text.charAt(i));
            i++;
          } else {
            clearInterval(timer);
          }
        }, speed);
}

$( document ).ready(function() {
  var speed = 75;
  var delay = $('h1').text().length * speed + speed;
  typeEffect($('h1'), speed);
  setTimeout(function(){
    $('#biog').css('display', 'inline-block');
    typeEffect($('#biog'), speed);
  }, delay);
});


// //Scroll menu
// $(function() {
    
//  $('#nav-toggle').on('click', function() {
//    $('body').toggleClass('nav-open');
//  });
  
// });
// $(document).ready(function(){
//  var altura = $('#nav-toggle').offset().top;
  
//  $(window).on('scroll', function(){
//    if ( $(window).scrollTop() > altura ){
//      $('.nav-toggle').addClass('menu-fixed');
//    } else {
//      $('.nav-toggle').removeClass('menu-fixed');
//    }
//  });
 
// });

//Reproductor
var music = document.getElementById("music");
var playButton = document.getElementById("play");
var pauseButton = document.getElementById("pause");
var playhead = document.getElementById("elapsed");
var timeline = document.getElementById("slider");
var timer = document.getElementById("timer");
var duration;
// pauseButton.style.visibility = "hidden";

var timelineWidth = timeline.offsetWidth - playhead.offsetWidth;
music.addEventListener("timeupdate", timeUpdate, false);

function timeUpdate() {
  var playPercent = timelineWidth * (music.currentTime / duration);
  playhead.style.width = playPercent + "px";

  var secondsIn = Math.floor(((music.currentTime / duration) / 3.5) * 100);
  if (secondsIn <= 9) {
    timer.innerHTML = "0:0" + secondsIn;
  } else {
    timer.innerHTML = "0:" + secondsIn;
  }
}

playButton.onclick = function() {
  music.play();
  playButton.style.visibility = "hidden";
  pause.style.visibility = "visible";
}

pauseButton.onclick = function() {
  music.pause();
  playButton.style.visibility = "visible";
  pause.style.visibility = "hidden";
}

music.addEventListener("canplaythrough", function () {
  duration = music.duration;
}, false);



//////////////////// Animar texto PROXIMAMENTE
//VARIABLES
var Stage = $('#container');
var s = Snap('#svg')
var path = s.select('#textpath')
var button = $('button');
var toggle = false;

////GSAP
var tl = new TimelineMax({repeat:-1});

//UP
tl.to(Stage, 0.65, {
  ease: Elastic.easeIn.config(1, 0.3),
  onStart: function() {
  up();
  }
});

//DOWN
tl.to(Stage, 0.65, {
  ease: Elastic.easeOut.config(1, 0.3),
  onStart: function() {
  down();
  }
});

////SNAP

//UP
function up() {
  path.animate({
  d: "M0.1,25.5c0,0,200.1-25,400-25c200.1,0,400,25,400,25"
  }, 4000, mina.elastic);
};

//DOWN
function down() {
  path.animate({
  d: "M0.1,25c0,0,200.1,25,400,25c200.1,0,400-25,400-25"
  }, 4000, mina.elastic);
};

////SHOW PATH

//TOGGLE
button.click(function() {
  if (toggle) {
    isOn();
    toggle = false;
  } else {
    isOff();
    toggle = true;
  }
});

//ON
function isOn() {
  path.animate({
  stroke: "#334145"
  }, 300);
};

//OFF
function isOff() {
  path.animate({
  stroke: "#51686e"
  }, 300);
};

toggle = true;