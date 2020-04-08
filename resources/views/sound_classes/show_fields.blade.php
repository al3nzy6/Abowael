<!-- Page Id Field -->
<div class="form-group">
    {!! Form::label('page_id', 'Page Id:') !!}
    <p>{{ $soundClass->page_id }}</p>
</div>

<!-- Class Name Field -->
<div class="form-group">
    {!! Form::label('class_name', 'Class Name:') !!}
    <p>{{ $soundClass->class_name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $soundClass->description }}</p>
</div>

<!-- Publish Field -->
<div class="form-group">
    {!! Form::label('publish', 'Publish:') !!}
    <p>{{ $soundClass->publish }}</p>
</div>

