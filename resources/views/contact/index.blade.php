<h1> List of users </h1>

@foreach($contacts as $user)
        <p>{{$user->name}}</p>
@endforeach
