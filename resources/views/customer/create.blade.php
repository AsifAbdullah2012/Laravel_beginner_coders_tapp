<h1>Add new customer</h1>
<form action="/customers" method="post">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name') }}">
        {{-- here old valid values will be displayed even if one or more then one field have invalid values --}}
        <p style="color:red">@error('name'){{ $message }}@enderror</p>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" name="email" value="{{ old('email') }}">
        <p style=" color:red">@error('email'){{ $message }}@enderror</p>
    </div>

    <button>Add New Customer</button>

</form>