@extends('layouts.app')
<style type="text/css">
  #realClock {
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
          width: 900px;
          /* margin: auto; */
          margin-top: 0 auto;
          text-align: center;
          font-size: 150px;
  }
</style>

@section('content')

    <main role="main" class="container">

      <div class="jumbotron ">
        <div class='container' id="realClock"></div>
        <div class="text-center "><h2> EMPLOYEE ID: </h2></div>

        {!! Form::open(['action' => 'AttendancesController@store', 'method' => 'POST', 'autocomplete' => 'off', 'onkeypress' => 'return event.keyCode != 13;']) !!}
 
        <div style="width:270px;margin:0 auto;">
        {{ Form::text('emp_id', '', ['class' => 'form-control form-control-inline', 'autofocus', 'size' => '3', 'maxlength' => '4', 'placeholder' => '8000']) }} 
        </div>

        <div class="clearfix" style="width:300px;margin:0 auto;">
            <br> 
               <div class="float-left" >
                   {{ Form::button('Time IN', ['type'=>'submit', 'name' => 'btnIn', 'value' => 'btnIn', 'class' => 'btn btn-primary btn-lg ']) }}
               </div>

               <div class="float-right">
                  {{ Form::button('Time Out', ['type'=>'submit', 'name' => 'btnOut', 'value' => 'btnOut', 'class' => 'btn btn-danger btn-lg']) }}
                 </div>
        </div>
                 
        {!! Form::close() !!} 

<hr>
        {{--  <div class="text-center "> <small>Whatever in here!</small> </div>  --}}
      </div>

    </main>
    <script type="text/javascript" src="{{asset('js/timer.js')}}"></script>

@endsection

