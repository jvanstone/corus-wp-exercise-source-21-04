(function($){
  
        $(document).ready(function(){
            $(".slideshow").slick({
                dots: true
            });
            $(".menu a").click(function(e){
                e.preventDefault();
                slideIndex = $(this).index();
                $( '.slideshow' ).slickGoTo( parseInt(slideIndex) );
            });
        });

});