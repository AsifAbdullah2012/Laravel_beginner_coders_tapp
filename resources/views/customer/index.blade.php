<h1>Customers .... </h1>
<a href="customers/create">Add new customer</a>

@forelse($customers as $customer)
<li><a href="/customers/{{ $customer->id}}">{{ $customer->name}}</a> and their email address is {{ $customer->email}}
</li>
@empty
<li>No Customers to show</li>
@endforelse

{{-- ctrl --}}

{{-- ctrl + # --}}