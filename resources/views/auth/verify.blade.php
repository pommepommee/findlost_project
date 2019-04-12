@extends('layouts.app')
@section('titre')
  Vérification
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérifiez votre mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un lien a été envoyé à votre boite mail.') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, allez sur le lien qui vous a été envoyé par mail.') }}
                    {{ __('Si vous avez pas reçu le mail') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
