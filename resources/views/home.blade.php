@extends('layout.app')
@section("title") Contacts @endsection
@section('content')
<div class="row">
    <div class="col">
        
            @if(Session::has('message'))
            <div class="alert alert-info">
            {{

                Session::get('message')
            }}
            </div>
            @endif
        
    </div>
</div>
<div class="row">
    <div class="col-12">
        <a href="{{ url('add') }}" class="btn btn-success">
            <i class="fa fa-plus"></i>
        Add Contacts</a>
    </div>
</div>
 <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body"> 
                <h4 class="card-title"> </h4>  
                <table  class="table table-bordered dt-responsive nowrap w-100 table-sm ">
                    <thead>
                    <tr>
                        <th>S.no</th> 
                        <th>Name</th> 
                        <th>Contact</th> 
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $sno = 1;
                        @endphp
                     @foreach($data as $row) 
                         <tr>
                            <td>{{$sno}}</td>
                            <td>{{$row->name}}</td> 
                            <td>{{$row->contact}}</td>
                            <td>
                                <div>
                                    <a href="{{ route('edit', $row->id) }}" class="btn btn-sm btn-info w-100">Edit</a>
                                </div>
                                <div>
                                    <a href="{{ route('delete', $row->id) }}" onclick="confirm('Are u sure want to delete')" class="btn btn-sm btn-danger w-100">Delete</a>
                                </div>
                                
                            </td>
                         </tr>
                         @php $sno++; @endphp
                     @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
