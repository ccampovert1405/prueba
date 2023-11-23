@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Users Backoffice
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Users Backoffice</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('users-backoffices.update', $usersBackoffices->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('users-backoffice.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
