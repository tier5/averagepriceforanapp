@extends('layouts.question-master')
@section('content')
	<div class="option_section">
     <div class="container">

       <div class="row app_ques_second">
       <h3>DO PEOPLE RATE OR REVIEW THINGS?</h3>
       <P>Keep in mind, ranking systems can vary in complexity and thus impact your budget.</P>
       </div>

       <div class="row app_andr">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <form action="{{ isset($parent) ? route('postLastPageRateReview') : route('postRateReview') }}" method="post">
            <button type="submit" class="transparent-btn inside-img" name="btn" value="YES"><img src="{{url('/')}}/public/img/log12.png" alt="image"></button>
            <p><input type="submit" name="btn" class="btn btn-default" value="YES"/></p>
            <input type="hidden" name="step" value="5"></input>
            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          </form>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-4 col-sm-4 col-xs-12">
            <form action="{{ isset($parent) ? route('postLastPageRateReview') : route('postRateReview') }}" method="post">
	            <button type="submit" class="transparent-btn inside-img" name="btn" value="NO"><img src="{{url('/')}}/public/img/log13.png" alt="image"></button>
	            <p><input type="submit" name="btn" class="btn btn-default" value="NO"/></p>
	            <input type="hidden" name="step" value="5"></input>
	            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          	</form>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-4 col-sm-4 col-xs-12">
            <form action="{{ isset($parent) ? route('postLastPageRateReview') : route('postRateReview') }}" method="post">
	            <button type="submit" class="transparent-btn inside-img" name="btn" value="DON'T KNOW"><img src="{{url('/')}}/public/img/log14.png" alt="image"></button>
	            <p><input type="submit" name="btn" class="btn btn-default" value="DON'T KNOW"/></p>
	            <input type="hidden" name="step" value="5"></input>
	            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          	</form>
        </div><!-- /.col-lg-4 -->
       </div>
@endsection