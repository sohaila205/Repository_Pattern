@extends('layouts.app')
@section('content')
<header class="m-md text-center">
    <h2>User</h2>
</header>
<div class="col-md-12">
    <section class="panel">
  
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-left">name </th>                      
                            <th class="text-left">email</th>
                            <th class="text-left">password </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $user)
                        <tr>
                            <td> {{$user->name}} </td>
                            <td> {{$user->email}} </td>
                            <td> {{$user->password}} </td>

                            <td>
                                <a href="{{url('/user/edit/'.$user->id)}}" class="btn-sm btn btn-primary">edit <i class="fa fa-pencil"></i></a>
                                <a href="{{url('/user/delete/'.$user->id)}}" class="btn-sm btn btn-danger">delete <i class="fa fa-trash-o"></i></a>
                                {{-- @endif --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </section>
</div>
@endsection

@section('js')

<script>
</script>

@endsection

