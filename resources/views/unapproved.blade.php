@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('Dashboard') }}</div>

                <div class="card-body">


                        <div class="alert alert-info" role="alert">

                                 {{ __('Your Registration is pending for Admin Approval. Please be patient. We will notify you.') }}

                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
