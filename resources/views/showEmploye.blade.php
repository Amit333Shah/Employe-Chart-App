@extends('master')
@section('content')
<div class="conatiner mx-3">
<div class="row">
            <div class="col-sm-12">
            <h1>Employe List</h1>
            <table class="table table-hovered table-stripped">
                    <thead>
                    <tr>
                
                        <th>&nbsp Name</th>
                        <th>&nbsp Date-Of-Birth</th>
                        <th>&nbsp Date-Of-Joinig</th>
                        <th>&nbsp Location</th>
                        <th>&nbsp Mobile-Number</th>
                        <th>$nbsp Status</ht>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($employeData as $data)
                        <tr>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->dateOfBirth }}</td>
                            <td>{{ $data->dateOfJoining }}</td>
                            <td>{{ $data->Location }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->status }}</td>

                            <td>
                           
                            <a type="button" href="editemploye/{{$data->id}}" class="btn btn-primary">Edit</a>
                            &nbsp;
                            <form method="post" enctype="multipart/form-data" action="delete/{{$data->id}}" style="display:inline-block">
                            @csrf
                                <button class="btn btn-danger" onclick="return confirm('Sure to Delete !!!')">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
            
            </div>
    </div>
</div>


@endsection