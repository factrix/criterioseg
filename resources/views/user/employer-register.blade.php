@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1>Buscas un empleado</h1>
            <h3>Por favor crea una cuenta</h3>
            <img src="{{asset('imagenes/register.png')}}">"
        </div>

        <div class="col-md-6">
           <div class="card">
                <div class="card-header"> Employer Register</div>
                    <form action="{{route('store.employer')}}" method="post">@csrf
                        <div class="form-group">
                            <label for=""> Nombre compañia </label>
                            <input type="text" name="name" class="form-control">
                            @if($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name')}}</span>
                            @endif    
                        </div>
                       
                        <div class="form-group">
                            <label for=""> Email </label>
                            <input type="text" name="email" class="form-control">
                            @if($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email')}}</span>
                            @endif    
                        </div>
                        <div class="form-group">
                            <label for=""> Password </label>
                            <input type="text" name="password" class="form-control">
                            @if($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password')}}</span>
                            @endif    
                        </div>
                        <br> 
                        <div class="form-group">
                            <button class="btn bnt-primary" type="submit"> registro </button>
                        </div>
                    </form>
                </div>
           </div>
        </div>
    </div>
</div>
@endsection