<x-app-layout>

</x-app-layout>
<x-slot name="header">
  
</x-slot>


<div class="card text-center">
    <div class="card-header">
        <h1>   modifier et donné des role au <strong>{{$user->name}} </strong> </h1>

    </div>
    <div class="card-body">
      <h5 class="card-title">choisiez les roles </h5>
        <form action="{{ route('admin.users.update', $user)}}" method="POST">
            @csrf
            @method('PATCH')
            @foreach($roles as $role)
               
            {{dd($role)}}



            @endforeach
            <button type="submit" class="btn btn-primary">modifier</button>

        </form>



    </div>
  
</div>



