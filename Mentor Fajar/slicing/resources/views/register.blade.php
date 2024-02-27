@extends('Layout.Layout1')
@section('content')
    <div class="card p-5 m-5" style="">
        <div class="col-12 my-4 p-5">
            <form action="register" action="{{ route('register.store') }}" method="POST" class="">
                <div class="card-body text-center row justify-content-center">
                    <h5 class="card-title">Register</h5>

                        @csrf
                        <div class="form-check text-start " style="width: 80%">
                            <label for="username" class="form-label ">Email</label>
                            <input type="email" name="email" id="username" class="form-control">
                        </div>
                        <div class="form-check text-start mt-4 " style="width: 80%">
                            <label for="password" class="form-label ">Password</label>
                            <input type="password" name="password" id="password" class="form-control  ">
                        </div>

                </div>
                <div class="mx-auto row justify-content-center">
                    <a href="/login" class="mx-2 ">Back Login</a>
                    <button type="submit" class="btn btn-warning col mx-2" style="max-width: 150px">Register Now</button>
                </div>
            </form>
        </div>
    </div>
@endsection