<!DOCTYPE html>
<html lang="en">
  <head>
    @include('includes.head-scripts')
  </head>

  <body>
   <div class="option_section budget_link">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-3 col-xs-5 summary-info">
            <a href="{{route('index')}}"><i class="fa fa-arrow-left fa-2x last_click"><span>Start Again</span></i></a>
        </div>
         <div class="col-md-6 col-sm-9 col-xs-7 budget_area">
          <p><a class="btn btn-default pull-right" href="#" role="button">GET LINK TO SAVE OR SHARE</a></p>
         </div>
        
        <a target="_blank" href="http://www.tier5.us"><img src="{{url('/')}}/public/img/logo.png" class="img-responsive center-block pages_logo wow fadeInDown" alt="Responsive image"></a>
      </div>
     </div>
   </div>

   <div class="option_section">
     <div class="container">
       
       <div class="row message_box center-block">
        <h2>YOUR APP ESTIMATE WITH TIER5: </h2>
        @if(Session::has('tier5_cost_step8'))
        <h1>$ {{ Session::get('tier5_cost_step8') }}</h1>
        @else
        <h1>Some Error Occured!</h1>
        @endif
         <h2>YOUR APP ESTIMATE WITH OTHERS: </h2>
         @if(Session::has('other_cost_step8'))
          <h1>$ {{ Session::get('other_cost_step8') }}</h1>
         @else
          <h1>Some Error Occured!</h1>
         @endif
         <!-- <h4><a href="#">SHOW BREAKDOWN</a></h4> -->
         <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">SHOW BREAKDOWN</button>
          <div id="demo" class="collapse">
            <hr>
            @for($i = 0 ;$i < 1; $i++)
              <p>
                What type of App you are building? {{$details[0]->name}} 
                <a href="{{ route('changeType') }}">(Change?)</a>
              </p><hr>
            @endfor
            @for($i = 1 ;$i < 2; $i++)
              <p>Do people have to login? {{$details[1]->name}} <a href="{{ route('changePeopleLogin') }}">(Change?)</a></p><hr>
            @endfor
            @for($i = 2 ;$i < 3; $i++)
              <p>Do people create personal profiles? {{$details[2]->name}} <a href="{{ route('changeCreatePro') }}">(Change?)</a></p><hr>
            @endfor
            @for($i = 3 ;$i < 4; $i++)
              <p>How will you make money from your App? {{$details[3]->name}} <a href="{{ route('changeMakeMoney') }}">(Change?)</a></p><hr>
            @endfor
            @for($i = 4 ;$i < 5; $i++)
              <p>Do people rate or review things? {{$details[4]->name}} <a href="{{ route('changeRateReview') }}">(Change?)</a></p><hr>
            @endfor
            @for($i = 5 ;$i < 6; $i++)
              <p>Does your app need to connect to your website? {{$details[5]->name}} <a href="{{ route('chnageConnectToWebsite') }}">(Change?)</a></p><hr>
            @endfor
            @for($i = 6 ;$i < 7; $i++)
              <p>How nice should your app look? {{$details[6]->name}} <a href="{{ route('changeAppLook') }}">(Change?)</a></p><hr>
            @endfor
            @for($i = 7 ;$i < 8; $i++)
              <p>Do you need an app icon? {{$details[7]->name}} <a href="{{ route('changeAppIcon') }}">(Change?)</a></p><hr>
            @endfor
          </div>
         <p>On Tier 5, we've handpicked the best app and website makers out there. Get your project started now or check out some
         Sexamples of work done on Tier 5.</p>
         <p><a class="btn btn-primary" href="https://www.tier5.us/#contact" role="button">START PROJECT ON TIER5</a></p>
       </div>
       @include('includes.footer')      
  </body>
</html>