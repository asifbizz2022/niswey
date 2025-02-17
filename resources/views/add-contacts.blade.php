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
        <div class="card w-50">
            <div class="card-body">
            	<div class="h5">Upload </div>
            	<br>
                <form method="post" action=" {{ route('upload') }}" enctype="multipart/form-data">@csrf
                <div>
                    <input type="file" class="form-control form-sm" name="paper" >
                </div>
                <div class="mt-3">
                    <button class="btn  btn-danger">Upload</button>
                </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
 
@endsection
