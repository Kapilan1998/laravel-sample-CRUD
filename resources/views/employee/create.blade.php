<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<form action="{{ route('employees.store') }}" method="post" autocomplete="off">
    @csrf
    <div class="row">
        <div class="col-1"></div>
        <div class="col-2">First name</div>
        <div class="col-3">
            <input type="text" name="fname" id="fname" class="form-control" value="{{ old('fname') }}">
            @error('fname')
                <span style="color: red; font-weight:600;">{{ $message }}</span>
            @enderror
        </div>
    </div> <br>

    <div class="row">
        <div class="col-1"></div>
        <div class="col-2">Last name</div>
        <div class="col-3">
            <input type="text" name="lname" id="lname" class="form-control" value="{{ old('lname') }}">
            @error('lname')
                <span style="color: red; font-weight:600;">{{ $message }}</span>
            @enderror
        </div>
    </div> <br>

    <div class="row">
        <div class="col-1"></div>
        <div class="col-2">Address</div>
        <div class="col-3">
            <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
            @error('address')
                <span style="color: red; font-weight:600;">{{ $message }}</span>
            @enderror
        </div>
    </div> <br>

    <div class="row">
        <div class="col-1"></div>
        <div class="col-2">Gender</div>
        <div class="col-3">
            <input type="radio" name="gender" id="male" class="form-check-input" value="Male"> Male <br>
            <input type="radio" name="gender" id="female" class="form-check-input" value="Female"> Female <br>
            @error('gender')
                <span style="color: red; font-weight:600;">{{ $message }}</span>
            @enderror
        </div>
    </div> <br>

    <div class="row">
        <div class="col-1"></div>
        <div class="col-2">E-mail</div>
        <div class="col-3">
            <input type="mail" name="email" id="email" class="form-control" value="{{ old('email') }}">
            @error('email')
                <span style="color: red; font-weight:600;">{{ $message }}</span>
            @enderror
        </div>
    </div> <br>

    <div class="row">
        <div class="col-1"></div>
        <div class="col-2">Mobile</div>
        <div class="col-3">
            <input type="tel" name="mobile" id="mobile" class="form-control" value="{{ old('mobile') }}">
            @error('mobile')
                <span style="color: red; font-weight:600;">{{ $message }}</span>
            @enderror
        </div>
    </div> <br>

    <div class="row">
        <div class="col-1"></div>
        <div class="col-2">Date of birth</div>
        <div class="col-3">
            <input type="date" name="dob" id="dob" class="form-control" value="{{ old('dob') }}">
            @error('dob')
                <span style="color: red; font-weight:600;">{{ $message }}</span>
            @enderror
        </div>
    </div> <br>

    <div class="row">
        <div class="col-1"></div>
        <div class="col-2">Salary</div>
        <div class="col-3">
            <input type="text" name="salary" id="salary" class="form-control" value="{{ old('salary') }}">
            @error('salary')
                <span style="color: red; font-weight:600;">{{ $message }}</span>
            @enderror
        </div>
    </div> <br>

    <div class="row">
        <div class="col-1"> </div>
        <div class="col-2">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="reset" class="btn btn-secondary">Clear</button>
        </div>
    </div>
</form>
