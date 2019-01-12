@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado a email a tu correo') }}
                        </div>
                    @endif

                    {{ __('Para continuar por favor verifica tu correo') }}
                    {{ __('Si no recibiste el email') }}, <a href="{{ route('verification.resend') }}">{{ __('clickea acá para enviarlo de nuevo') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
