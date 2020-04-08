<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $passwordResets->email }}</p>
</div>

<!-- Token Field -->
<div class="form-group">
    {!! Form::label('token', 'Token:') !!}
    <p>{{ $passwordResets->token }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $passwordResets->created_at }}</p>
</div>

