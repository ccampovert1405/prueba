<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('first_name') }}
            {{ Form::text('first_name', $usersBackoffices->first_name, ['class' => 'form-control' . ($errors->has('first_name') ? ' is-invalid' : ''), 'placeholder' => 'First Name']) }}
            {!! $errors->first('first_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('second_name') }}
            {{ Form::text('second_name', $usersBackoffices->second_name, ['class' => 'form-control' . ($errors->has('second_name') ? ' is-invalid' : ''), 'placeholder' => 'Second Name']) }}
            {!! $errors->first('second_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('first_lastname') }}
            {{ Form::text('first_lastname', $usersBackoffices->first_lastname, ['class' => 'form-control' . ($errors->has('first_lastname') ? ' is-invalid' : ''), 'placeholder' => 'First Lastname']) }}
            {!! $errors->first('first_lastname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('second_lastname') }}
            {{ Form::text('second_lastname', $usersBackoffices->second_lastname, ['class' => 'form-control' . ($errors->has('second_lastname') ? ' is-invalid' : ''), 'placeholder' => 'Second Lastname']) }}
            {!! $errors->first('second_lastname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('position') }}
            {{ Form::text('position', $usersBackoffices->position, ['class' => 'form-control' . ($errors->has('position') ? ' is-invalid' : ''), 'placeholder' => 'Position']) }}
            {!! $errors->first('position', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('department') }}
            {{ Form::text('department', $usersBackoffices->department, ['class' => 'form-control' . ($errors->has('department') ? ' is-invalid' : ''), 'placeholder' => 'Department']) }}
            {!! $errors->first('department', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_create') }}
            {{ Form::text('user_create', $usersBackoffices->user_create, ['class' => 'form-control' . ($errors->has('user_create') ? ' is-invalid' : ''), 'placeholder' => 'User Create']) }}
            {!! $errors->first('user_create', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>