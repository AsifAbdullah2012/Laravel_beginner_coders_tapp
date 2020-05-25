@extends('app')
@section('title', 'service page')
@section('content')
<h1>this is the page from services</h1>
<ul>
    <li>section from service 1</li>
    <li>section from service 2</li>
    <li>section from service 3</li>
</ul>
<p>this is service from the services</p>
<ul>
    @forelse($services as $service)
    <li>{{ $service->name}}</li>
    @empty
    <li>No services avalable</li>
    @endforelse
</ul>
@endsection()