  <div class="head_start_up">
    <div class="container">
      <div class="row">
        <script type="text/javascript">
          function goBack() {
             window.history.back();
          }
        </script>
        <div class="col-md-6 col-sm-6 col-xs-6 navigate-section">
            @if(Session::get('step') > 0)
              <button class="btn btn-link btn-link-style" onclick="goBack()"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous Question</button>
            @else
              <a href="{{route('index')}}"><i class="fa fa-arrow-left fa-2x first_click"><span>Start Again</span></i></a>
            @endif
        </div>
         <div class="col-md-6 col-sm-6 col-xs-6 budget_area">
         
         <div style="display: none;">
           {{$step_number = Session::get('step')}}
         </div>
          <h4 id="app-price" class="pull-right">Tier5 cost: ${{Session::get("tier5_cost_step".$step_number)}} <br> Other Company's Cost: ${{Session::get("other_cost_step".$step_number)}}</h4>
         </div>
        <img src="{{url('/')}}/public/img/white_logo.png" class="img-responsive center-block pages_logo"  data-wow-duration="2s" alt="Responsive image">
      </div>
     </div>
   </div>