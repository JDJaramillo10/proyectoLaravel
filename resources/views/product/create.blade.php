@extends('layouts.app')

@section('template_title')
    {{ __('Create Product') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">{{ __('Create Product') }}</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('products.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="nombre">{{ __('Name') }}:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="{{ __('Enter product name') }}">
                            </div>

                            <div class="form-group">
                                <label for="descripcion">{{ __('Description') }}:</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" placeholder="{{ __('Enter product description') }}"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="price">{{ __('Price') }}:</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="{{ __('Enter product price') }}">
                            </div>

                            <div class="form-group">
                                <label for="stock">{{ __('Stock') }}:</label>
                                <input type="text" class="form-control" id="stock" name="stock" placeholder="{{ __('Enter product stock') }}">
                            </div>

                            <div class="form-group">
                                <label for="imagen">{{ __('Image') }}:</label>
                                <input type="file" class="form-control" id="imagen" name="imagen">
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
