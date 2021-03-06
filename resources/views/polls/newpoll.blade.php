@extends('wrapper')



@section('content')

<div class="container">

<form action="" method="post">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="poll_name_input">Poll Name</label><br>
        <input class="form-control" type="text" name="name" value="{{ $poll->name }}" id="name_input">
    </div>

    <div class="form-group">
        <label for="poll_desc_input">Description</label><br>
        <input class="form-control" type="text" name="description" value="{{ $poll->description }}" id="description">
    </div>

    <!-- <div class="form-group">
        <label for="plot_input">Plot</label><br>
        <textarea class="form-control" rows="4" cols="50" name="plot"></textarea>
    </div> -->

    <div class="form-group">
        <input type="submit" value="Save" class="btn btn-primary">
    </div>



</form>

</div>

@endsection




@section('page_title') Add Movies @endsection