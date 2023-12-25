@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
       
        <div class="col-md-8">
           <div class="card shadow-lg">
                <div class="card-header"> Login</div>
                    <form action="{{route('login.post')}}" method="post">@csrf
                        
                        <div class="form-group">
                            <label for=""> Usuario </label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for=""> Email </label>
                            <input type="text" name="email" class="form-control">
                        </div> 
                        <div class="form-group">
                            <label for=""> Password </label>
                            <input type="password" name="password" class="form-control">
                            @if($errors->has('password'))
                                <span class="text-danger">  {{$errors->first('password')}} </span>
                            @endif
                        </div>
                        <br> 
                        <div class="form-group text-center">
                            <button class="btn bnt-primary" type="submit"> Login </button>
                        </div>
                    </form>
                </div>
           </div>
        </div>
    </div>
</div>
@endsection