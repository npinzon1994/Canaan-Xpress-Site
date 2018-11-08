(function() {

	function Slideshow( element ) {
		this.el = document.querySelector( element );
		this.init();
	}

	Slideshow.prototype = {
		init: function() {
			this.wrapper = this.el.querySelector( ".slider-wrapper" );
			this.slides = this.el.querySelectorAll( ".slide" );			//selects all slides
			this.previous = this.el.querySelector( ".slider-previous" );
			this.next = this.el.querySelector( ".slider-next" );
			this.rateButton = this.el.querySelector( ".rate-button");
			this.applyButton = this.el.querySelector( ".apply-button");
			this.index = 0;
			this.total = this.slides.length;
			this.timer = null;

			this.action();
			this.stopStart();
		},
		_slideTo: function( slide ) {
			var currentSlide = this.slides[slide]; 		//sets current slide to first slide in array
			currentSlide.style.opacity = 1;				//makes the slide visible
			rateButton.style.opacity = 1;
			applyButton.style.opacity = 1;

			//loops through slides and makes sure only the current slide is visible
			for( var i = 0; i < this.slides.length; i++ ) {
				var slide = this.slides[i];
				if( slide !== currentSlide ) {
					slide.style.opacity = 0;
					rateButton.style.opacity = 1;
					applyButton.style.opacity = 1;
				}
			}
		},
		action: function() {
			var self = this;
			self.timer = setInterval(function() {
				self.index++;
				if( self.index == self.slides.length ) {
					self.index = 0;
				}
				self._slideTo( self.index);

			}, 10000);
		},
		stopStart: function() {
			var self = this;
			self.el.addEventListener( "mouseover", function() {
				clearInterval( self.timer );
				self.timer = null;

			}, false);
			self.el.addEventListener( "mouseout", function() {
				self.action();

			}, false);
		}


	};

	document.addEventListener( "DOMContentLoaded", function() {

		var slider = new Slideshow( "#main-slider" );

	});


})();

function getNext(id) {
    var a = document.getElementById(0);
    var b = document.getElementById(1);
    var c = document.getElementById(2);
		$("div").fadeIn(500);
    a.style.display="none";
    b.style.display="none";
    c.style.display="none";


    switch (id) {

      case 0:
      b.style.display = "block";
      break;

      case 1:
      c.style.display = "block";
      break;

      case 2:
      a.style.display = "block";
      break;

    }

}

function getPrev(id) {
    var a = document.getElementById(0);
    var b = document.getElementById(1);
    var c = document.getElementById(2);
		$("div").fadeIn(500);
    a.style.display="none";
    b.style.display="none";
    c.style.display="none";
  
    switch (id) {

      case 0:
      c.style.display = "block";
      break;

      case 1:
      a.style.display = "block";
      break;

      case 2:
      b.style.display = "block";
      break;

    }

}
