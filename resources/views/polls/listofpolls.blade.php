@extends('wrapper')


@section('content')

<div class="container">
<ul>
@foreach($polls as $poll)
<li>
    <a href="{{ action('pollController@detailPolls', ['id' => $poll->id]) }}">
    {{ $poll->name }} {{ $poll->description }}
    </a>
</li>
@endforeach
</ul>

</div>

@endsection