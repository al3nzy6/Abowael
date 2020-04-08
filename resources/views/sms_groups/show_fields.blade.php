<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $smsGroups->name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $smsGroups->description }}</p>
</div>

<!-- Publish Field -->
<div class="form-group">
    {!! Form::label('publish', 'Publish:') !!}
    <p>{{ $smsGroups->publish }}</p>
</div>

