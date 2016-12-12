@extends('layouts.question-master')
@section('content')
      <div class="option_section">
     <div class="container">

       <div class="row app_ques_second">
       <h3>DO PEOPLE HAVE TO LOG IN?</h3>
       <P>An email login is generally best to start with unless your app will have tight<br>
           integration with services like Facebook or Twitter.</P>
       </div> 
       <div class="row app_andr">
        <div class="col-md-3 col-sm-3 col-xs-12">
          <form action="{{ isset($parent) ? route('postLastPagePeopleLogin') : route('postPeopleLogin') }}" method="post">
            <button type="submit" class="transparent-btn inside-img" name="btn" value="SOCIAL"><img src="{{url('/')}}/public/img/log1.png" alt="image"></button>
            <p><input type="submit" name="btn" class="btn btn-default" value="SOCIAL"/></p>
            <input type="hidden" name="step" value="2"></input>
            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          </form>
        </div><!-- /.col-lg-3 -->
        <div class="col-md-3 col-sm-3 col-xs-12">
          <form action="{{ isset($parent) ? route('postLastPagePeopleLogin') : route('postPeopleLogin')  }}" method="post">
            <button type="submit" class="transparent-btn inside-img" name="btn" value="EMAIL"><img src="{{url('/')}}/public/img/log2.png" alt="image"></button>
            <p><input type="submit" name="btn" class="btn btn-default" value="EMAIL"/></p>
            <input type="hidden" name="step" value="2"></input>
            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          </form>
        </div><!-- /.col-lg-3 -->
        <div class="col-md-3 col-sm-3 col-xs-12">
          <form action="{{  isset($parent) ? route('postLastPagePeopleLogin') : route('postPeopleLogin')  }}" method="post">
            <button type="submit" class="transparent-btn inside-img" name="btn" value="NO"><img src="{{url('/')}}/public/img/log3.png" alt="image"></button>
            <p><input type="submit" name="btn" class="btn btn-default" value="NO"/></p>
            <input type="hidden" name="step" value="2"></input>
            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          </form>
        </div><!-- /.col-lg-3 -->
        <div class="col-md-3 col-sm-3 col-xs-12">
          <form action="{{  isset($parent) ? route('postLastPagePeopleLogin') : route('postPeopleLogin')  }}" method="post">
            <button type="submit" class="transparent-btn inside-img" name="btn" value="DON'T KNOW"><img src="{{url('/')}}/public/img/log4.png" alt="image"></button>
            <p><input type="submit" name="btn" class="btn btn-default" value="DON'T KNOW"/></p>
            <input type="hidden" name="step" value="2"></input>
            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          </form>
        </div><!-- /.col-lg-3 -->
       </div>
@endsection