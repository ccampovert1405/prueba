@extends('layouts.app')

@section('template_title')
    {{ $usersBackoffice->name ?? "{{ __('Show') Users Backoffice" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Users Backoffice</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users-backoffices.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>First Name:</strong>
                            {{ $usersBackoffice->first_name }}
                        </div>
                        <div class="form-group">
                            <strong>Second Name:</strong>
                            {{ $usersBackoffice->second_name }}
                        </div>
                        <div class="form-group">
                            <strong>First Lastname:</strong>
                            {{ $usersBackoffice->first_lastname }}
                        </div>
                        <div class="form-group">
                            <strong>Second Lastname:</strong>
                            {{ $usersBackoffice->second_lastname }}
                        </div>
                        <div class="form-group">
                            <strong>Position:</strong>
                            {{ $usersBackoffice->position }}
                        </div>
                        <div class="form-group">
                            <strong>Department:</strong>
                            {{ $usersBackoffice->department }}
                        </div>
                        <div class="form-group">
                            <strong>User Create:</strong>
                            {{ $usersBackoffice->user_create }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
