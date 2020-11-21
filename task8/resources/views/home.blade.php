@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

               
            @foreach ($news as $new)
        <label  style="background-color:powderblue">Title</label>
        <p>{{ $new->title }}</p>
        <label  style="background-color:powderblue">Short Description</label>
        <p>{{ $new->short_description }}</p>

                            <a href="{{ route('show',["id"=>$new->id ]) }}">
                            Show</a>
                </td>



                    <form action="{{ route('delete') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$new->id }}">
                            <button>Delete</button>
                        </form>
                
      
            @endforeach


<a href="{{ route('create') }}" type="button" class="btn btn-primary">
                            Create News</a>
            </div>
        </div>
    </div>
</div>
@endsection
