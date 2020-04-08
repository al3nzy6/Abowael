<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $guestbook->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $guestbook->email }}</p>
</div>

<!-- Comment Field -->
<div class="form-group">
    {!! Form::label('comment', 'Comment:') !!}
    <p>{{ $guestbook->comment }}</p>
</div>

<!-- Datetime Field -->
<div class="form-group">
    {!! Form::label('datetime', 'Datetime:') !!}
    <p>{{ $guestbook->datetime }}</p>
</div>

