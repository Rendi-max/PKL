@extends('Layout.Layout1')
@section('content')
    <div class="card p-5 m-5" style="">
        <div class="col-12 my-4 p-5">
            <form action="login" method="POST" class="">
                <div class="card-body text-center row justify-content-center">
                    <h5 class="card-title">Login</h5>

                        @csrf
                        <div class="form-check text-start " style="width: 80%">
                            <label for="username" class="form-label ">Email</label>
                            <input type="email" name="email" id="username" class="form-control  ">
                        </div>
                        <div class="form-check text-start mt-4 " style="width: 80%">
                            <label for="password" class="form-label ">Password</label>
                            <input type="password" name="password" id="password" class="form-control  ">
                        </div>

                </div>
                <div class="mx-auto row justify-content-center">
                    <button type="submit" class="btn btn-warning col-2 mx-2 ">Login</button>
                    <a href="/register" class="btn btn-warning col-2 mx-2 ">Register</a>
                </div>
            </form>
        </div>
    </div>
@endsection