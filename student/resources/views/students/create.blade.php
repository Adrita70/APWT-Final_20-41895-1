<form action="" method="post">
    {{@csrf_field()}}
    Name : <input type="text" value="{{old('name')}}" name="name"> </br></br>
    @error('name')
        <span class="text-danger">{{$message}}</span><br></br>
    @enderror
    Id : <input type="text" name="id" value="{{old('id')}}"> </br></br>
    @error('id')
        <span class="text-danger">{{$message}}</span><br></br>
    @enderror
    Email : <input type="text" value="{{old('email')}}" name="email"> </br></br>
    @error('email')
        <span class="text-danger">{{$message}}</span><br></br>
    @enderror
    Dob :<input type="date" name="dob"> </br></br>
    @error('dob')
    <span class="text-danger">{{$message}}</span><br></br>
    @enderror
    Phone Number : <input type="text" value="{{old('email')}}" name="phone number"></br></br>
    @error('phone number')
        <span class="text-danger">{{$message}}</span><br></br>
    @enderror
    <input type="submit" value="Create">
</form>
