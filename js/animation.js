(function($){$(function(){
    
    TweenMax.to(".overlay h1", 2, {
        opacity: 0,
        y: -100,
        ease: Expo.easeInOut
    })
    TweenMax.to(".overlay", 2, {
        delay: 1.5,
        height:0,
        ease: Expo.easeInOut
    })
    TweenMax.from(".logo", 2, {
        delay: 2,
        opacity: 0,
        y: 20,
        ease: Expo.easeInOut
    })
    TweenMax.staggerFrom(".main_list ul li", 1, {
        delay: 2.4, opacity: 0, y: 20, ease: Expo.easeInOut}, 0.2 )
    
	TweenMax.staggerFrom(".social-media ul li", 1, {
        delay: 2.4, opacity: 0, y: 20, ease: Expo.easeInOut}, 0.2 )
        
    TweenMax.from(".side-strip", 2, {
        delay: 2.4,
        opacity: 0,
        y: 40,
        ease: Expo.easeInOut
        })
    TweenMax.from(".row", 2, {
        delay: 2.4,
        opacity: 0,
        y: 40,
        ease: Expo.easeInOut
        }) 
    TweenMax.from(".row h6", 2, {
        delay: 3,
        opacity: 0,
        x: 40,
        ease: Expo.easeInOut
        }) 
    TweenMax.from(".row p", 2, {
        delay: 3.2,
        opacity: 0,
        y: 40,
        ease: Expo.easeInOut
        }) 
    TweenMax.from(".header h1", 2, {
        delay: 3.2,
        opacity: 0,
        y: 20,
        ease: Expo.easeInOut
        }) 

    TweenMax.from(".header p", 2, {
        delay: 3.4,
        opacity: 0,
        y: 40,
        ease: Expo.easeInOut
        }) 
    TweenMax.from(".header button", 2, {
        delay: 3.6,
        opacity: 0,
        y: 40,
        ease: Expo.easeInOut
        }) 

    // code
      /* contact form submission */
		$('#pamContactForm').on('submit', function(e){

			e.preventDefault();
	
			$('.has-error').removeClass('has-error');
			$('.js-show-feedback').removeClass('js-show-feedback');
	
			var form = $(this),
					name = form.find('#name').val(),
					email = form.find('#email').val(),
					message = form.find('#message').val(),
					ajaxurl = form.data('url');
	
			if( name === '' ){
				$('#name').parent('.form-group').addClass('has-error');
				return;
			}
	
			if( email === '' ){
				$('#email').parent('.form-group').addClass('has-error');
				return;
			}
	
			if( message === '' ){
				$('#message').parent('.form-group').addClass('has-error');
				return;
			}
	
			form.find('input, button, textarea').attr('disabled','disabled');
			$('.js-form-submission').addClass('js-show-feedback');
	
			$.ajax({
				
				url : ajaxurl,
				type : 'post',
				data : {
					
					name : name,
					email : email,
					message : message,
					action: 'easy_save_user_contact_form'
					
				},
				error : function( response ){
					$('.js-form-submission').removeClass('js-show-feedback');
					$('.js-form-error').addClass('js-show-feedback');
					form.find('input, button, textarea').removeAttr('disabled');
				},
				success : function( response ){
					if( response == 0 ){
						
						setTimeout(function(){
							$('.js-form-submission').removeClass('js-show-feedback');
							$('.js-form-error').addClass('js-show-feedback');
							form.find('input, button, textarea').removeAttr('disabled');
						},1500);
	
					} else {
						
						setTimeout(function(){
							$('.js-form-submission').removeClass('js-show-feedback');
							$('.js-form-success').addClass('js-show-feedback');
							form.find('input, button, textarea').removeAttr('disabled').val('');
						},1500);
	
					}
				}
      
			});
	
        });
        $(function() {
            $(".img-w").each(function() {
              $(this).wrap("<div class='img-c'></div>")
              let imgSrc = $(this).find("img").attr("src");
               $(this).css('background-image', 'url(' + imgSrc + ')');
            })
                      
            
            $(".img-c").click(function() {
              let w = $(this).outerWidth()
              let h = $(this).outerHeight()
              let x = $(this).offset().left
              let y = $(this).offset().top
              
              
              $(".active").not($(this)).remove()
              let copy = $(this).clone();
              copy.insertAfter($(this)).height(h).width(w).delay(500).addClass("active")
              $(".active").css('top', y - 8);
              $(".active").css('left', x - 8);
              
                setTimeout(function() {
              copy.addClass("positioned")
            }, 0)
              
            }) 
                       
          
            
          })
          function closegallry(){
            $('.positioned').removeClass('positioned');  
          }
          $(document.body).click( function(e) {
            closegallry();
          });

          $(document).on("click", ".img-c.active", function() {
            let copy = $(this)
            copy.removeClass("positioned active").addClass("postactive")
            setTimeout(function() {
              copy.remove();
            }, 500)
          })
          var panel = $('.at-accordion__panel');

          panel.click( function(){
            // console.log('click');
            panel.removeClass('is-open');
          
            $(this).addClass('is-open');
          });

          var isOpen = false;
          var $allTiles = $(".js-tile");
          var $Tiles = $(".Tiles");
          
          $(".Tiles > .Tile").each(function(i, el) {  
            
            var $tile = $(el);
            var target = $tile.children(".Tile-flyout");
            
            
            // get each items flyout height with extra buffer
            var thisHeight = target.children(".Tile-content").outerHeight()+"100%";
            
            // Create ne timeline in paused state
            var tl = new TimelineMax({
              paused: true,
              reversed:true//,
              //forward: true // not a valid GSAP property 
            });
          
            TweenLite.set(target, {
              height:0,
              autoAlpha: 0,
              display: 0.5//,
            });    
            // animate stuff
            tl.to(target, 0.9, {
              delay: 0.5,
              height: thisHeight,
              autoAlpha: 1,
              display: "block",
              ease: Cubic.easeInOut,
              overwrite: "none"
            });
            
            // store timeline in DOM node
            el.animation = tl;
            
            // create element event handler
            $(el).on("click", function(event) {
              
              
              
              var that = this;
              var currentTile = $(this);
              
              $(".Tiles > .Tile.is-expanded").not(this).each(function(i, element){
                  console.log('reverse?');
                  element.animation.reverse();
                  currentTile.removeClass("not-expanded");
              }); 
               
               $allTiles.not(currentTile).removeClass("is-expanded");
               $allTiles.not(currentTile).removeClass("not-expanded");
              
               currentTile.toggleClass("is-expanded");
          
               if (this.animation.reversed()) {
                    console.log('1');
                    $allTiles.not(currentTile).addClass("not-expanded");
                 
                    this.animation.play();
                    target.removeClass("reversing");
               } else {
                    console.log('2');
                    this.animation.reverse();
                    target.addClass("reversing");
               }
            });  
          });
          $(window).on('scroll', function() {

            //ADD .TIGHT
            if ($(window).scrollTop() + $(window).height() > $('.wrapper').outerHeight()) {
              $('body').addClass('tight');
             
            } else {
              $('body').removeClass('tight');
              
            }
          });
        
          //BACK TO PRESENTATION MODE
          $("html").on("click", "body.tight .wrapper", function() {
            $('html, body').animate({
              scrollTop: $('.wrapper').outerHeight() - $(window).height()
            }, 1000);
          });

	/* init functions */
	revealPosts();
	
	/* variable decalarations */
	var last_scroll = 0;
	
	/* carousel functions */
	$(document).on('click', '.sunset-carousel-thumb', function() {
    	var id = $("#" + $(this).attr("id"));
    	$(id).on('slid.bs.carousel', function () { 
	    	sunset_get_bs_thumbs(id);
    	});
    });
    
    $(document).on('mouseenter', '.sunset-carousel-thumb', function() {
    	var id = $("#" + $(this).attr("id"));
        sunset_get_bs_thumbs(id);
    });
	
	function sunset_get_bs_thumbs( id ){
			
		var nextThumb = $(id).find(".item.active").find(".next-image-preview").data("image");
        var prevThumb = $(id).find(".item.active").find(".prev-image-preview").data("image");
        $(id).find(".right.carousel-control").find(".thumbnail-container").css({"background-image" : "url("+ nextThumb +")"});
        $(id).find(".left.carousel-control").find(".thumbnail-container").css({"background-image" : "url("+ prevThumb +")"});
		
	}
	
	/* Ajax functions */
	$(document).on('click','.sunset-load-more:not(.loading)', function(){
		
		var that = $(this);
		var page = $(this).data('page');
		var newPage = page+1;
		var ajaxurl = that.data('url');
		var prev = that.data('prev');
		var archive = that.data('archive');
		
		if( typeof prev === 'undefined' ){
			prev = 0;
		}
		
		if( typeof archive === 'undefined' ){
			archive = 0;
		}
		
		that.addClass('loading').find('.text').slideUp(320);
		that.find('.sunset-icon').addClass('spin');
		
		$.ajax({
			
			url : ajaxurl,
			type : 'post',
			data : {
				
				page : page,
				prev : prev,
				archive : archive,
				action: 'sunset_load_more'
				
			},
			error : function( response ){
				console.log(response);
			},
			success : function( response ){
				
				if( response == 0 ){
					
					$('.sunset-posts-container').append( '<div class="text-center"><h3>You reached the end of the line!</h3><p>No more posts to load.</p></div>' );
					that.slideUp(320);
					
				} else {
					
					setTimeout(function(){
				
						if( prev == 1 ){
							$('.sunset-posts-container').prepend( response );
							newPage = page-1;
						} else {
							$('.sunset-posts-container').append( response );
						}
						
						if( newPage == 1 ){
							
							that.slideUp(320);
							
						} else {
							
							that.data('page', newPage);
						
							that.removeClass('loading').find('.text').slideDown(320);
							that.find('.sunset-icon').removeClass('spin');
							
						}
						
						revealPosts();
						
					}, 1000);
					
				}
				
				
			}
			
		});
		
	});

});}(jQuery));

