@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1>Buscas un trabajo</h1>
            <h3>Por favor crea una cuenta</h3>
            <img src="{{asset('imagenes/register.png')}}">"
        </div>

        <div class="col-md-6">
           <div class="card">
                <div class="card-header"> Register</div>
                    <form action="{{route('store.seeker')}}" method="post">@csrf
                        <div class="form-group">
                            <label for=""> Nombre completo </label>
                            <input type="text" name="name" class="form-control">
                            @if($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name')}}</span>
                            @endif    
                        </div>
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
                            <input type="text" name="password" class="form-control">
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