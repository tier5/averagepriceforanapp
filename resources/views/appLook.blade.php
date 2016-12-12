@extends('layouts.question-master')
@section('content')
	<div class="option_section">
     <div class="container">

       <div class="row app_ques_second">
       <h3>HOW NICE SHOULD YOUR APP LOOK?</h3>
       <P>Custom gestures, custom buttons, and custom transitions will cost you — it's<br> not cheap being pretty.</P>
       </div>

       <div class="row app_andr">
        <div class="col-md-4 col-sm-4 col-xs-12">
        <form action="{{ isset($parent) ? route('postLastPageAppLook') : route('postAppLook') }}" method="post">
            <button type="submit" class="transparent-btn inside-img" name="btn" value="BARE-BONES"><img src="{{url('/')}}/public/img/log18.png" alt="image"></button>
            <p><input type="submit" name="btn" class="btn btn-default" value="BARE-BONES"/></p>
            <input type="hidden" name="step" value="7"></input>
            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
        </form>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-4 col-sm-4 col-xs-12">
	        <form action="{{ isset($parent) ? route('postLastPageAppLook') : route('postAppLook') }}" method="post">
	            <button type="submit" class="transparent-btn inside-img" name="btn" value="STOCK"><img src="{{url('/')}}/public/img/log19.png" alt="image"></button>
	            <p><input type="submit" name="btn" class="btn btn-default" value="STOCK"/></p>
	            <input type="hidden" name="step" value="7"></input>
	            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
	        </form>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-4 col-sm-4 col-xs-12">
           <form action="{{ isset($parent) ? route('postLastPageAppLook') : route('postAppLook') }}" method="post">
            <button type="submit" class="transparent-btn inside-img" name="btn" value="BEAUTIFUL"><img src="{{url('/')}}/public/img/log20.png" alt="image"></button>
            <p><input type="submit" name="btn" class="btn btn-default" value="BEAUTIFUL"/></p>
            <input type="hidden" name="step" value="7"></input>
            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
        </form>
        </div><!-- /.col-lg-4 -->
       </div>
@endsection