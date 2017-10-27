@extends('wrapper')


@section('content')

<div class="container">
<h1>{{ $poll->name }}</h1>
<br>

<p>{{ $poll->description }} </p>
</ul>
<form action="" method="post">

{{ csrf_field() }}

<div class="form-group col-md-4">
<label for="inputState">Choose a city</label>
<select id="inputState" class="form-control">
<option selected>Choose...</option>
<option>London</option>
<option>Paris</option>
<option>Amsterdam</option>
<option>Barcelona</option>
<option>Vienna</option>
<option>Prague</option>
<option>Berlin</option>
<option>Budapest</option>
<option>Copenhagen</option>
<option>Rome</option>
<option>Stockholm</option>
<option>Madrid</option>
<option>Lisbon</option>
</select>
</div>

<div class="form-group col-md-4">
<label for="inputState">Select your vote</label>
<select id="inputState" class="form-control">
<option selected>Choose...</option>
<option>The best</option>
<option>Good</option>
<option>Avergae</option>
<option>Bad</option>
<option>Worst</option>
</select>
</div>

<!-- <div class="form-group"> <label for="plot_input">Plot</label><br> <textarea class="form-control" rows="4" cols="50" name="plot"></textarea> </div> -->

<div class="form-group">
<input type="submit" value="Save" class="btn btn-primary">
</div>



</form>

</div>
@endsection

