@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="d-flex justify-content-between card-header">{{ __('Products') }}
                    @if (Auth::check() && Auth::user()->is_admin)
                    <form action="{{ route('create_product') }}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-secondary mt-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                          </svg>Create Product</button>
                    </form>


                    @endif
                </div>
                <div class="card-group m-auto">
                    @foreach ($products as $product)
                    <div class="card m-3" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('storage/' .$product->image) }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">{{ $product->name }}</p>
                            <form action="{{ route('show_product', $product)}}" method="get">
                                <button type="submit" class="btn btn-secondary">Show detail</button>
                            </form>
                            <br>
                            
                            @if (Auth::check() && Auth::user()->is_admin)
                            <form action="{{ route('delete_product',$product) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-secondary">Delete product</button>
                            </form>
                            @endif
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
