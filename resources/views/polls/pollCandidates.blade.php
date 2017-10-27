@extends('wrapper')


@section('content')



<h1>{{ $poll->name }}</h1>

<div class="year">{{ $poll->description }}</div>




<a href="{{ action('pollController@vote'}}" class="btn btn-primary">Vote Here</a>

@endsection
