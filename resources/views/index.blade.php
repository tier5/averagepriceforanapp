@extends('layouts.master')
@section('content')
{{Session::flush()}}
	<div class="head_banner">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6 navigate-section">
            <a href="{{route('under-cons')}}"><i class="fa fa-bars fa-2x first_click"> <span>MENU</span></i></a>
        </div>
        
        <div class="col-md-3 col-sm-6 col-xs-6 col-md-offset-3 social_share">
          <div class="corners corner--t-r js-fade-this fadeIn">
          <!-- AddToAny BEGIN -->

            <div class="a2a_kit a2a_kit_size_20 a2a_default_style">
            
            <p><a id="tw" class="a2a_button_twitter pull-right">Tweet</a></p>
            <p><a id="fb" class="a2a_button_facebook pull-right">Share</a></p>
            </div>
            <script async src="https://static.addtoany.com/menu/page.js"></script>
             <!-- AddToAny END -->
            <!-- <div class="social-buttons hidden-xs"> -->
            <!-- Facebook Share Button -->
            
            <!-- <div class="fb-share-button" data-href="http://howmuchtomakeanapp.com" data-layout="button"></div> -->
            

            <!-- Twitter Tweet Button -->
            <!-- <a href="https://twitter.com/share" class="twitter-share-button" data-text="How much does it cost to make an app? Find out in less than a minute. –" data-count="none"></a> -->
            <script>
            // !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
            </script>
        
           <!-- </div> -->
          </div>
        </div>
      </div>
    </div>
   </div>

   <div class="ques_session">
     <div class="container">
       <a target="_blank"><img src="{{url('/')}}/public/img/pc1.png" class="img-responsive center-block wow fadeInDown" id="img_ab" alt="Responsive image"></a>
       <div class="row intro_page">
        <img src="{{url('/')}}/public/img/logo.png" class="img-responsive center-block wow fadeInDown" alt="Responsive image">
        <h1 class="blue_font">HERE YOU CAN FIND A PRE-ESTIMATION</h1>
        <p class="text_intro">of your project cost according to your needs in just simple clicks.</p>
	<form method="GET" action="{{ route('getFirstPage') }}">
		<button type="submit" class="btn btn-primary">GET STARTED</button>
	</form>
       </div>
     </div>
  </div>
@endsection
