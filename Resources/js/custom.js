
$(document).ready(function(){
 $(window).on("scroll",function(){
        var sc = $(window).scrollTop();
        console.log(sc);
        if (sc > 850){
          $("nav.navbar").fadeIn() ;
          
            
        }else{
             $("nav.navbar").fadeOut() ;
         
            
        }
        
    });


});

$(document).ready(function(){
 $(window).on("scroll",function(){
        var sc = $(window).scrollTop();
        console.log(sc);
        if (sc > 1000){
          $("div.scrolltotop").fadeIn() ;
            
        }else{
             $("div.scrolltotop").fadeOut() ;
            
        }
        
    });


});




$(document).ready(
function() {
$("html").niceScroll();
}
);

$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 1500);
    return false;
});




(function() {

				function SVGMenu( el, options ) {
					this.el = el;
					this.init();
				}

				SVGMenu.prototype.init = function() {
					this.trigger = this.el.querySelector( 'button.menu__handle' );
					this.shapeEl = this.el.querySelector( 'div.morph-shape' );

					var s = Snap( this.shapeEl.querySelector( 'svg' ) );
					this.pathEl = s.select( 'path' );
					this.paths = {
						reset : this.pathEl.attr( 'd' ),
						open : this.shapeEl.getAttribute( 'data-morph-open' ),
						close : this.shapeEl.getAttribute( 'data-morph-close' )
					};

					this.isOpen = false;

					this.initEvents();
				};

				SVGMenu.prototype.initEvents = function() {
					this.trigger.addEventListener( 'click', this.toggle.bind(this) );
				};

				SVGMenu.prototype.toggle = function() {
					var self = this;

					if( this.isOpen ) {
						classie.remove( self.el, 'menu--anim' );
						setTimeout( function() { classie.remove( self.el, 'menu--open' );	}, 250 );
					}
					else {
						classie.add( self.el, 'menu--anim' );
						setTimeout( function() { classie.add( self.el, 'menu--open' );	}, 250 );
					}
					this.pathEl.stop().animate( { 'path' : this.isOpen ? this.paths.close : this.paths.open }, 350, mina.easeout, function() {
						self.pathEl.stop().animate( { 'path' : self.paths.reset }, 800, mina.elastic );
					} );
					
					this.isOpen = !this.isOpen;
				};

				new SVGMenu( document.getElementById( 'menu' ) );

			})();

