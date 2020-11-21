@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Title</h4>
                    <p>{{ $news->title }}</p>
                    <h4>Description</h4>
                    <p>{{ $news->description }}</p>
                    <h4>Short Description</h4>
                    <p>{{ $news->short_description }}</p>

                    <a href="{{ route('edit',["id"=>$news->id ]) }}">
                            Edit</a>



            

                    <br>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection


