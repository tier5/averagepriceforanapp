<div class="ques_session navbar-fixed-bottom">
	<div class="container">
		<div class="bottom_section">
    		<div class="corners-bottom-wrapper pull-right">
        		<div class="corners corner--b-r js-fade-this fadeIn">
          			<span class="corner js-pagenumber">
                    @if(Session::has('step'))
                        {{ Session::get('step') }} / 8
                    @else
                        <a class="bottom-start" href="{{ route('getFirstPage') }}">Let's Start</a>
                    @endif
                    </span>
                    
        		</div>
    		</div>
    		<p>
    			<a target="_blank" href="https://www.tier5.us/#about">About</a>/Made By  &middot; 
    			<a target="_blank" href="http://www.tier5.us">Tier5</a>
    		</p>
		</div>
	</div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
<script src="{{url('/')}}/public/js/bootstrap.min.js"></script>
<script src="{{url('/')}}/public/js/wow.min.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script>
    // (function(d, s, id) {
    //   var js, fjs = d.getElementsByTagName(s)[0];
    //   if (d.getElementById(id)) return;
    //   js = d.createElement(s); js.id = id;
    //   js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=299081770271318";
    //   fjs.parentNode.insertBefore(js, fjs);
    // }(document, 'script', 'facebook-jssdk'));
    </script>
    <script>
     // $(document).ready(function(){
     //    $(".transparent-btn").click(function(){
     //         $(this).css("border","none");
     //    });
     // });
    </script>

    <!--<script src="https://d21trp9pua5zoi.cloudfront.net/handler-script.js"></script>-->

    <!-- <script src="https://d21trp9pua5zoi.cloudfront.net/handler-script.js"></script> -->

    <script>
        new WOW().init();
    </script>
