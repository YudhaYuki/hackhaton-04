@extends ('wrapper')


@section('content')
<div class="showcase">
        <div class="container">
            <h1 class="text-center text-md-left">VOTE HERE</h1>
            <p class="lead text-center text-md-left">Welcome to THE POLL. Choose your poll and vote.</p>
            <a href="{{ action('pollController@newPoll') }}" class="btn btn-primary text-center text-md-left">Create Your Poll</a>
        </div>   
    
</div>

@endsection