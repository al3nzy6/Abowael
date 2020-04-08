<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_address', 'Email Address:') !!}
    {!! Form::text('email_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Info Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('info', 'Info:') !!}
    {!! Form::textarea('info', null, ['class' => 'form-control']) !!}
</div>

<!-- User Level Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_level', 'User Level:') !!}
    {!! Form::text('user_level', null, ['class' => 'form-control']) !!}
</div>

<!-- Signup Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('signup_date', 'Signup Date:') !!}
    {!! Form::text('signup_date', null, ['class' => 'form-control','id'=>'signup_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#signup_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Last Login Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_login', 'Last Login:') !!}
    {!! Form::text('last_login', null, ['class' => 'form-control','id'=>'last_login']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#last_login').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Activated Field -->
<div class="form-group col-sm-6">
    {!! Form::label('activated', 'Activated:') !!}
    {!! Form::text('activated', null, ['class' => 'form-control']) !!}
</div>

<!-- Upload No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('upload_no', 'Upload No:') !!}
    {!! Form::number('upload_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('raUsers.index') }}" class="btn btn-default">Cancel</a>
</div>
