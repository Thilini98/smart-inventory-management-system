@extends('frontend.layouts.app')

@section('title', __('My Orders'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-frontend.card>
                    <x-slot name="header">
                        @lang('My Orders')
                    </x-slot>

                    <x-slot name="body">
                    @foreach($orders as $order)
                    <div>{{ $order->id}}</div>                   
                    @endforeach                 
                    </x-slot>

                </x-frontend.card>
            </div><!--col-md-10-->
        </div><!--row--> 
    </div><!--container-->
@endsection