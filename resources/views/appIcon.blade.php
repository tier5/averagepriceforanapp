@extends('layouts.question-master')
@section('content')
	<div class="option_section">
     <div class="container">

       <div class="row app_ques_second">
       <h3>DO YOU NEED AN APP ICON?</h3>
       <P>Designing a quality app icon typically ranges from $500 - $2,000 but will help<br> you stand out in the app store and on the device.</P>
       </div>

       <div class="row app_andr">
        <div class="col-md-4 col-sm-4 col-xs-12">
         <form action="{{ isset($parent) ? route('postLastPageAppIcon') : route('postAppIcon') }}" method="post">
            <button type="submit" class="transparent-btn inside-img" name="btn" value="YES"><img src="{{url('/')}}/public/img/log21.png" alt="image"></button>
            <p><input type="submit" name="btn" class="btn btn-default" value="YES"/></p>
            <input type="hidden" name="step" value="8"></input>
            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
        </form>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-4 col-sm-4 col-xs-12">
        	<form action="{{ isset($parent) ? route('postLastPageAppIcon') : route('postAppIcon') }}" method="post">
	            <button type="submit" class="transparent-btn inside-img" name="btn" value="NO"><img src="{{url('/')}}/public/img/log22.png" alt="image"></button>
	            <p><input type="submit" name="btn" class="btn btn-default" value="NO"/></p>
	            <input type="hidden" name="step" value="8"></input>
	            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
        	</form>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <form action="{{ isset($parent) ? route('postLastPageAppIcon') : route('postAppIcon') }}" method="post">
	            <button type="submit" class="transparent-btn inside-img" name="btn" value="DON'T KNOW"><img src="{{url('/')}}/public/img/log23.png" alt="image"></button>
	            <p><input type="submit" name="btn" class="btn btn-default" value="DON'T KNOW"/></p>
	            <input type="hidden" name="step" value="8"></input>
	            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
        	</form>
        </div><!-- /.col-lg-4 -->
       </div>
@endsection