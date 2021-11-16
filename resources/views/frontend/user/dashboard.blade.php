@extends('frontend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-frontend.card>
                    <x-slot name="header">
                        @lang('Dashboard')
                    </x-slot>

                    <x-slot name="body">
                        @lang('You are logged in!')
                        <br>
                        <br>
                        <div>
                           <a href="{{ route('frontend.user.orders') }}" class="btn btn-primary btn-block">Orders</a>     
                        </div><br>
                        <div>
                            <a href="{{ route('frontend.user.products') }}" class="btn btn-primary btn-block">Explore the Products</a>
                        </div>   
                    </x-slot>
                </x-frontend.card>
            </div><!--col-md-10-->
        </div><!--row-->
    </div><!--container-->
@endsection
