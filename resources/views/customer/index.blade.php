<h1>Customers .... </h1>
<a href="customers/create">Add new customer</a>

@forelse($customers as $customer)
<li>{{ $customer->name}} and their email address is {{ $customer->email}}</li>
@empty
<li>No Customers to show</li>
@endforelse

{{-- ctrl --}}

{{-- ctrl + # --}}