<x-app-layout>
</x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            liste des utilisateur
        </h2>
    </x-slot>

<div class="container">
  
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOM</th>
                        <th scope="col">email</th>
                        <th scope="col">action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach ($users as $user)
            
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }} </td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->roles }}</td>
                        <td>
                          <a href="{{route('admin.users.edit' , $user->id)}}"> <button class="btn btn-primary"> editer</button></a>
                          <a href="{{route('admin.users.destroy' , $user->id)}}"> <button class="btn btn-warning"> suprimer</button></a>


                        </td>
                      </tr>
                      @endforeach
                    </tbody> </table> 
            </div>
        </div>
    </div>
</div>


</div>
