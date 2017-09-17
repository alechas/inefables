// Reproductor
(function() {
  var billyBreathes, changePosition, changeSong, changeVolume, harryHood, pauseSong, playSong, playlist, suzyGreenberg, themeFromTheBottom, updatePositionSlider, updateSlider;

  themeFromTheBottom = new Howl({
    urls: ['https://s3-us-west-2.amazonaws.com/s.cdpn.io/377560/07_Theme_from_the_Bottom_(1).mp3'],
    volume: window.volume
  });

  billyBreathes = new Howl({
    urls: ['https://s3-us-west-2.amazonaws.com/s.cdpn.io/377560/10_Billy_Breathes_(1)_(1).mp3'],
    volume: window.volume
  });

  harryHood = new Howl({
    urls: ['https://s3-us-west-2.amazonaws.com/s.cdpn.io/377560/harry-hood-small.mp3'],
    volume: window.volume
  });

  suzyGreenberg = new Howl({
    urls: ['https://s3-us-west-2.amazonaws.com/s.cdpn.io/377560/suzy_greenberg_small.mp3'],
    volume: window.volume
  });

  window.open = true;

  window.volume = 0.5;

  window.position = 0;

  window.duration = 40.8;

  playlist = [suzyGreenberg];

  window.currentSong = playlist[0];

  window.add = null;

  changeSong = function(song) {
    console.log(song);
    window.currentSong.stop();
    window.currentSong.pos(0);
    window.position = 0;
    $(".slider").slider("value", 0);
    window.currentSong = song;
    $(".play-song > i").removeClass('fa-play');
    $(".play-song > i").addClass('fa-pause');
    window.open = false;
    return song.play();
  };

  updatePositionSlider = function() {
    return window.position += 1;
  };

  playSong = function(song) {
    song.play();
    return window.add = setInterval(updatePositionSlider, 1000);
  };

  pauseSong = function(song) {
    song.pause();
    return clearInterval(window.add);
  };

  changeVolume = function(song) {
    return song.volume(window.volume);
  };

  changePosition = function(song) {
    return song.pos(window.position);
  };

  updateSlider = function() {
    return $(".slider").slider("value", window.position);
  };

  $(function() {
    var slideUp;
    $(".slider").slider({
      min: 0,
      range: "min",
      max: window.duration,
      value: 0,
      slide: function(event, ui) {
        window.position = ui.value;
        console.log(ui.value);
        return changePosition(window.currentSong);
      }
    });
    setInterval(updateSlider, 1000);
    $("#volume-off").click(function() {
      currentSong.volume(0);
      return $(".slider-volume").slider("value", 0);
    });
    $("#volume-up").click(function() {
      currentSong.volume(1);
      return $(".slider-volume").slider("value", 100);
    });
    $(".slider-volume").slider({
      min: 0,
      range: "min",
      max: 100,
      value: 50,
      slide: function(event, ui) {
        console.log("hey");
        window.volume = ui.value / 100;
        return changeVolume(window.currentSong);
      }
    });
    $("#play").click(function() {
      if (window.open) {
        playSong(window.currentSong);
        $(".play-song > i").removeClass('fa-play');
        $(".play-song > i").addClass('fa-pause');
        return window.open = !window.open;
      } else {
        pauseSong(window.currentSong);
        $(".play-song > i").removeClass('fa-pause');
        $(".play-song > i").addClass('fa-play');
        return window.open = !window.open;
      }
    });
    slideUp = true;
    $(".slide-up").click(function() {
      if (slideUp) {
        $(".song-list, .playlist-controls, .overlay").addClass("active");
        $(".slide-up").html("<i class='fa fa-chevron-down'></i>");
        return slideUp = !slideUp;
      } else {
        $(".song-list, .playlist-controls, .overlay").removeClass("active");
        $(".slide-up").html("<i class='fa fa-chevron-up'></i>");
        return slideUp = !slideUp;
      }
    });
    return $("tr").click(function() {
      if ($(this).attr('data-title') === "billyBreathes") {
        changeSong(billyBreathes);
        $(".slider").slider("option", "max", 331.6);
        window.duration = 331.6;
        $(".song").html("Billy Breathes");
      } else if ($(this).attr('data-title') === "harryHood") {
        $(".song").html("Harry Hood");
        window.duration = 40.8;
        $(".slider").slider("option", "max", 40.8);
        changeSong(harryHood);
      } else if ($(this).attr('data-title') === "suzyGreenberg") {
        $(".song").html("Suzy Greenberg");
        window.duration = 40.8;
        $(".slider").slider("option", "max", 40.8);
        changeSong(suzyGreenberg);
      } else if ($(this).attr('data-title') === "themeFromTheBottom") {
        changeSong(themeFromTheBottom);
        $(".song").html("Theme From The Bottom");
        $(".slider").slider("option", "max", 382.2);
        window.duration = 382.2;
      }
      $(".song-list, .playlist-controls, .overlay").removeClass("active");
      $(".slide-up").html("<i class='fa fa-chevron-up'></i>");
      return slideUp = !slideUp;
    });
  });

}).call(this);
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
$(function() {
    
	$('#nav-toggle').on('click', function() {
		$('body').toggleClass('nav-open');
	});
	
});
$(document).ready(function(){
	var altura = $('#nav-toggle').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.nav-toggle').addClass('menu-fixed');
		} else {
			$('.nav-toggle').removeClass('menu-fixed');
		}
	});
 
});

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

// VIDEOS
