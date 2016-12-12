@extends('layouts.question-master')
@section('content')
   <div class="option_section">
     <div class="container">
       <div class="row app_ques">
       <h3>WHAT TYPE OF PROJECTS YOU WANT?</h3>
       </div>
       <div class="row app_andr">
        <div class="col-md-4 col-sm-4 col-xs-12">
        <form action="{{ isset($parent) ? route('postLastPageType') : route('postFirstPage') }}" method="post">
          <button type="submit" class="transparent-btn tilt" name="btn" value="IOS"><img class="img-circle" src="{{url('/')}}/public/img/pc4.png" alt="image" width="140" height="140"></button>
          <p><input type="submit" name="btn" class="btn btn-default" value="IOS"/></p>
          <input type="hidden" name="step" value="1"></input>
          <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
        </form>
        
        </div><!-- /.col-lg-4 -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <form action="{{ isset($parent) ? route('postLastPageType') : route('postFirstPage') }}" method="post">
            <button type="submit" class="transparent-btn tilt" name="btn" value="ANDROID"><img class="img-circle" src="{{url('/')}}/public/img/pc5.png" alt="image" width="140" height="140"></button>
            <p><input type="submit" name="btn" class="btn btn-default" value="ANDROID"/></p>
            <input type="hidden" name="step" value="1"></input>
            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          </form>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <form action="{{ isset($parent) ? route('postLastPageType') : route('postFirstPage') }}" method="post">
            <button type="submit" class="transparent-btn tilt" name="btn" value="BOTH"><img class="img-circle" src="{{url('/')}}/public/img/pc6.png" alt="image" width="140" height="140"></button>
            <p><input type="submit" name="btn" class="btn btn-default" value="BOTH"/></p>
            <input type="hidden" name="step" value="1"></input>
            <input type="hidden" name="_token" value="{{ Session::token() }}"></input>
          </form>
        </div><!-- /.col-lg-4 -->
       </div>
       @endsection