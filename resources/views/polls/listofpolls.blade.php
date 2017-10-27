@extends('wrapper')


@section('content')


<ul>
@foreach($polls as $poll)
<li>
    <a href="{{ action('pollController@listPolls', ['id' => $poll->id]) }}">
    {{ $poll->name }} ({{ $poll->description }})
    </a>
</li>
@endforeach
</ul>

@endsection