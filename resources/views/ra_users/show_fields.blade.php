<!-- First Name Field -->
<div class="form-group">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{{ $raUsers->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="form-group">
    {!! Form::label('last_name', 'Last Name:') !!}
    <p>{{ $raUsers->last_name }}</p>
</div>

<!-- Email Address Field -->
<div class="form-group">
    {!! Form::label('email_address', 'Email Address:') !!}
    <p>{{ $raUsers->email_address }}</p>
</div>

<!-- Username Field -->
<div class="form-group">
    {!! Form::label('username', 'Username:') !!}
    <p>{{ $raUsers->username }}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $raUsers->password }}</p>
</div>

<!-- Info Field -->
<div class="form-group">
    {!! Form::label('info', 'Info:') !!}
    <p>{{ $raUsers->info }}</p>
</div>

<!-- User Level Field -->
<div class="form-group">
    {!! Form::label('user_level', 'User Level:') !!}
    <p>{{ $raUsers->user_level }}</p>
</div>

<!-- Signup Date Field -->
<div class="form-group">
    {!! Form::label('signup_date', 'Signup Date:') !!}
    <p>{{ $raUsers->signup_date }}</p>
</div>

<!-- Last Login Field -->
<div class="form-group">
    {!! Form::label('last_login', 'Last Login:') !!}
    <p>{{ $raUsers->last_login }}</p>
</div>

<!-- Activated Field -->
<div class="form-group">
    {!! Form::label('activated', 'Activated:') !!}
    <p>{{ $raUsers->activated }}</p>
</div>

<!-- Upload No Field -->
<div class="form-group">
    {!! Form::label('upload_no', 'Upload No:') !!}
    <p>{{ $raUsers->upload_no }}</p>
</div>

