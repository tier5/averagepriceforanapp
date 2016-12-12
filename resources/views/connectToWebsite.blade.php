@extends('layouts.question-master')
@section('content')
	<div class="option_section">
     <div class="container">

       <div class="row app_ques_second">
       <h3>DOES YOUR APP NEED TO CONNECT WITH YOUR WEBSITE?</h3>
       <P>This means you'll need to make an API (or Application Programming Interface). It's how all your friendly apps talk to each other.</P>
       </div>

       <div class="row app_andr">
        <div class="col-md-4 col-sm-4 col-xs-12">
			<form action="{{ isset($parent) ? route('postLastPageConnectToWebiste') : route('postConnectToWebsite') }}" method="post">
	            <button type="submit" class="transparent-btn inside-img" name="btn" value="YES"><img src="{{url('/')}}/public/img/log15.png" alt="image"></button>
	            <p><input type="submit" name="btn" class="btn btn-default" value="YES"/></p>
	            <input type="hidden" name="step" value="6"></input>
	            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          	</form>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          	<form action="{{ isset($parent) ? route('postLastPageConnectToWebiste') : route('postConnectToWebsite') }}" method="post">
	            <button type="submit" class="transparent-btn inside-img" name="btn" value="NO"><img src="{{url('/')}}/public/img/log16.png" alt="image"></button>
	            <p><input type="submit" name="btn" class="btn btn-default" value="NO"/></p>
	            <input type="hidden" name="step" value="6"></input>
	            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          	</form>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <form action="{{ isset($parent) ? route('postLastPageConnectToWebiste') : route('postConnectToWebsite') }}" method="post">
	            <button type="submit" class="transparent-btn inside-img" name="btn" value="DON'T KNOW"><img src="{{url('/')}}/public/img/log17.png" alt="image"></button>
	            <p><input type="submit" name="btn" class="btn btn-default" value="DON'T KNOW"/></p>
	            <input type="hidden" name="step" value="6"></input>
	            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          	</form>
        </div><!-- /.col-lg-4 -->
       </div>
       
@endsection