
@if ($message = Session::get('success'))
<script>
  $(function successMsg() {
  //the buttons messages
  var successSpan = $(".success-error-span"),
      fadingSpan  = $(".fading-error-span");
  /*slidingSpan.css({
      right: -$(this).innerWidth()
  });*/
  
  //the delay duration starts after the span first animation is ended (because you insert the second animation with the delay in a call back function for the first animation)
  // $(".sliding-error-btn").on("click", function() {
        successSpan.animate({
            right: 0
        }, 1000, function (){
            successSpan.delay(2000).animate({
                right: -successSpan.innerWidth()
            });
        });
    
    });
</script>
@endif

@if ($message = Session::get('warning'))
<script>
  $(function warningMsg() {
  //the buttons messages
  var warningSpan = $(".warning-error-span"),
      fadingSpan  = $(".fading-error-span");
  /*slidingSpan.css({
      right: -$(this).innerWidth()
  });*/
  
  //the delay duration starts after the span first animation is ended (because you insert the second animation with the delay in a call back function for the first animation)
  // $(".sliding-error-btn").on("click", function() {
        warningSpan.animate({
            right: 0
        }, 1000, function (){
            warningSpan.delay(2000).animate({
                right: -warningSpan.innerWidth()
            });
        });
    
    });
</script>
@endif

@if ($message = Session::get('error'))
<script>
  $(function successMsg() {
  //the buttons messages
  var errorSpan = $(".error-span"),
      fadingSpan  = $(".fading-error-span");
  /*slidingSpan.css({
      right: -$(this).innerWidth()
  });*/
  
  //the delay duration starts after the span first animation is ended (because you insert the second animation with the delay in a call back function for the first animation)
  // $(".sliding-error-btn").on("click", function() {
        errorSpan.animate({
            right: 0
        }, 1000, function (){
            errorSpan.delay(2000).animate({
                right: -errorSpan.innerWidth()
            });
        });
    
    });
</script>
@endif

<script>
  $(".fading-error-btn").on("click", function(){
        fadingSpan.fadeIn(1000).delay(2000).fadeOut(1000);
  });
</script>