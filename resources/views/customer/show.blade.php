<h1>Customer details .... </h1>

<p>here customer name is {{ $customer->name }}</p>
<p>and email address is {{ $customer->email }}</p>
<p>go back to the customers list <a href="/customers">BACK</a></p>

<div>
    <a href="/customers/{{ $customer->id }}/edit">Edit</a>
</div>