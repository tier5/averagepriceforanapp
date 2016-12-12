@extends('layouts.question-master')
@section('content')
	<div class="option_section">
     <div class="container">

       <div class="row app_ques_second">
       <h3>HOW WILL YOU MAKE MONEY FROM YOUR APP?</h3>
       <P>Upfront cost is cheaper to build than in-app purchases but in-app purchase can produce higher <br>
         returns if/when you have an engaged user base.</P>
       </div>
       <div class="row app_andr">
        <div class="col-md-3 col-sm-3 col-xs-12">
            <form action="{{ isset($parent) ? route('postLastPageMakeMoney') : route('postMakeMoney') }}" method="post">
	            <button type="submit" class="transparent-btn inside-img" name="btn" value="PAID"><img src="{{url('/')}}/public/img/log8.png" alt="image"></button>
	            <p><input type="submit" name="btn" class="btn btn-default" value="PAID"/></p>
	            <input type="hidden" name="step" value="4"></input>
	            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          	</form>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-3 col-sm-3 col-xs-12">
	        <form action="{{ isset($parent) ? route('postLastPageMakeMoney') : route('postMakeMoney') }}" method="post">
	            <button type="submit" class="transparent-btn inside-img" name="btn" value="IN APP PURCHASES"><img src="{{url('/')}}/public/img/log9.png" alt="image"></button>
	            <p><input type="submit" name="btn" class="btn btn-default" value="IN APP PURCHASES"/></p>
	            <input type="hidden" name="step" value="4"></input>
	            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
	        </form>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-3 col-sm-3 col-xs-12">
          <form action="{{ isset($parent) ? route('postLastPageMakeMoney') : route('postMakeMoney') }}" method="post">
            <button type="submit" class="transparent-btn inside-img" name="btn" value="FREE"><img src="{{url('/')}}/public/img/log10.png" alt="image"></button>
            <p><input type="submit" name="btn" class="btn btn-default" value="FREE"/></p>
            <input type="hidden" name="step" value="4"></input>
            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
	        </form>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-3 col-sm-3 col-xs-12">
          <form action="{{ isset($parent) ? route('postLastPageMakeMoney') : route('postMakeMoney') }}" method="post">
            <button type="submit" class="transparent-btn inside-img" name="btn" value="DON'T KNOW"><img src="{{url('/')}}/public/img/log11.png" alt="image"></button>
            <p><input type="submit" name="btn" class="btn btn-default" value="DON'T KNOW"/></p>
            <input type="hidden" name="step" value="4"></input>
            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
	        </form>
        </div><!-- /.col-lg-4 -->
       </div>
       
@endsection