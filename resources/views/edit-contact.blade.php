@extends('layout.app')
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
        <div class="card w-50 ">
            <div class="card-body p-3">
                <form method="post" action=" {{ route('update') }}"  >@csrf
                @foreach($data as $row)
                <div class="form-group">
                	<input type="hidden"  name="id" value="{{$row->id}}">
                	<label>Name</label>
                    <input type="text" name="name" value="{{$row->name}}" class="form-control">
                </div>
                 <div class="form-group mt-3">
                 	<label>Contact</label>
                    <input type="text" name="contact" value="{{$row->contact}}" class="form-control">
                </div>
                @endforeach
                <div class="mt-3">
                    <button class="btn  btn-secondary">Update</button>
                </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
 
@endsection
