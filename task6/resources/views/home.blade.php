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

                    @foreach ($products as $product)
                    <h4>Title</h4>
                    <p>{{ $product->title }}</p>
                    <h4>Description</h4>
                    <p>{{ $product->description }}</p>

                    <a href="{{ route('edit',["id"=>$product->id ]) }}">
                            Edit</a>


                    @endforeach

                    <br>


<a href="{{ route('create') }}" type="button" class="btn btn-primary">
                            Create Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
