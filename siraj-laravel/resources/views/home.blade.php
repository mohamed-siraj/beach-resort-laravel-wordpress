@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="text-danger fs-2 fw-bold">Please note you will be redirected to the wordpress site within 5 seconds</p>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        /**
         * after 5 second it will automatically redirect to wordpress
         */
        (setTimeout(()=>{
            location.href = '{{config('app.wordpress')}}';
        }, 500))
    </script>
@endsection
