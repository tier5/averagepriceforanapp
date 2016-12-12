@extends('layouts.question-master')
@section('content')
	<div class="option_section">
     <div class="container">
       <div class="row app_ques_second">
       <h3>DO PEOPLE CREATE PERSONAL PROFILES?</h3>
       <P>A profile means that some of the people that use your app will have to enter<br>
         information about themselves that might be viewed publicly.</P>
       </div>
       <div class="row app_andr">
        <div class="col-md-4 col-sm-4 col-xs-12">
        	<form action="{{ isset($parent) ? route('postLastPagePersonalProfiles') : route('postPersonalProfiles') }}" method="post">
	            <button type="submit" class="transparent-btn inside-img" name="btn" value="YES"><img src="{{url('/')}}/public/img/log5.png" alt="image"></button>
	            <p><input type="submit" name="btn" class="btn btn-default" value="YES"/></p>
	            <input type="hidden" name="step" value="3"></input>
	            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          </form>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <form action="{{ isset($parent) ? route('postLastPagePersonalProfiles') : route('postPersonalProfiles') }}" method="post">
	            <button type="submit" class="transparent-btn inside-img" name="btn" value="NO"><img src="{{url('/')}}/public/img/log6.png" alt="image"></button>
	            <p><input type="submit" name="btn" class="btn btn-default" value="NO"/></p>
	            <input type="hidden" name="step" value="3"></input>
	            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          </form>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <form action="{{ isset($parent) ? route('postLastPagePersonalProfiles') : route('postPersonalProfiles') }}" method="post">
	            <button type="submit" class="transparent-btn inside-img" name="btn" value="DON'T KNOW"><img src="{{url('/')}}/public/img/log7.png" alt="image"></button>
	            <p><input type="submit" name="btn" class="btn btn-default" value="DON'T KNOW"/></p>
	            <input type="hidden" name="step" value="3"></input>
	            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          </form>
        </div><!-- /.col-lg-4 -->
       </div>
     </div>
  </div>
@endsection