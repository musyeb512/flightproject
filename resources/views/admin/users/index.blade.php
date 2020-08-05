@extends('layouts.header')
@section('content') 
@include('admin.message')
<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                
                    

                    <table class="table">
  <thead>
    <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Users</h4>
                  <h4 class="card-title pull-right">Today is: {{ date('d-m-Y', time()) }}</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                 <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
                    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{implode(',',$user->roles()->get()->pluck('name')->toArray())}}</td>
      <td>
        @can('edit.users')
        <a href="{{route('admin.users.edit',$user->id)}}"><button type="button" class="btn btn-primary float-left" >Edit</button></a>
        @endcan
        @can('delete.users')
        <form action="{{route('admin.users.destroy',$user)}}" method="POST" class="float-left">
            @csrf
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-warning">Delete</button>
            </form>
            @endcan

    </td>

    </tr>
                    @endforeach
    
  
  </tbody>
</table>

                </div>
            </div>
        </div>
    </div>
</div>
</thead>
</table>
</div>
@endsection
