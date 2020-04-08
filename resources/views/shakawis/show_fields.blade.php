<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $shakawi->name }}</p>
</div>

<!-- Mail Field -->
<div class="form-group">
    {!! Form::label('mail', 'Mail:') !!}
    <p>{{ $shakawi->mail }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $shakawi->date }}</p>
</div>

<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Message:') !!}
    <p>{{ $shakawi->message }}</p>
</div>

