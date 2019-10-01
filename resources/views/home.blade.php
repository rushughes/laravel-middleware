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

                    You are logged in<br />
                    Edwin is a: {{$edwin}}
                    Edwin2 is a: {{$edwin2}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
