<h1>Edit existing customers</h1>
<form action="/customers/{{ $customer->id }}" method="post">
    @method('PATCH')
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $customer->name }}">
        {{-- here old valid values will be displayed even if one or more then one field have invalid values --}}
        <p style="color:red">@error('name'){{ $message }}@enderror</p>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" name="email" value="{{ $customer->email }}">
        <p style=" color:red">@error('email'){{ $message }}@enderror</p>
    </div>

    <button>Save Customer</button>

</form>