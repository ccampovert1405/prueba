@extends('layouts.app')

@section('template_title')
    {{ $position->name ?? "{{ __('Show') Position" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Position</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('positions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $position->name }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $position->status }}
                        </div>
                        <div class="form-group">
                            <strong>User Create:</strong>
                            {{ $position->user_create }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
