@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? __('Show Product') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h2 class="card-title">{{ __('Show Product') }}</h2>
                                <p class="card-subtitle">{{ $product->description }}</p>
                            </div>
                            <div>
                                <a class="btn btn-primary" href="{{ route('products.index') }}">{{ __('Back') }}</a>
                                <form action="{{ route('cart.add', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-success">{{ __('Add to Cart') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="descripcion">{{ __('Description') }}:</label>
                            <p>{{ $product->descripcion }}</p>
                        </div>
                        <div class="form-group">
                            <label for="price">{{ __('Price') }}:</label>
                            <p>{{ $product->price }}</p>
                        </div>
                        <div class="form-group">
                            <label for="stock">{{ __('Stock') }}:</label>
                            <p>{{ $product->stock }}</p>
                        </div>
                        <div class="form-group">
                            <label for="imagen">{{ __('Image') }}:</label>
                            <img src="{{ asset('storage/' . $product->imagen) }}" alt="{{ $product->nombre }}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
