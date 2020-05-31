@extends('app')
@section('title', 'service page')
@section('content')
<h1>this is the page from services</h1>
<!-- here we are routing to service and the method is post so we should also change our web.php file as route-->
<form action="/service" method="POST">
    <input type="text" name="name" autocomplete="off">
    <!-- // csrf is used for security to ensure that this submit form is comming from our own server -->
    <!-- somebody in different server can not submit to my application -->

    @csrf
    <button>Add Service</button>
</form>

<!-- if some thing error occured in the 'name' filed then laravel will automatically make a nice comment for the error-->

<p style="color:red">@error('name'){{ $message }}@enderror</p>




<p>this is service from the services</p>
<ul>
    @forelse($services as $service)
    <li>{{ $service->name}}</li>
    @empty
    <li>No services avalable</li>
    @endforelse
</ul>
@endsection()