<!-- Userid Field -->
<div class="form-group">
    {!! Form::label('userid', 'Userid:') !!}
    <p>{{ $raUpload->userid }}</p>
</div>

<!-- File Name Field -->
<div class="form-group">
    {!! Form::label('file_name', 'File Name:') !!}
    <p>{{ $raUpload->file_name }}</p>
</div>

<!-- Upload Date Field -->
<div class="form-group">
    {!! Form::label('upload_date', 'Upload Date:') !!}
    <p>{{ $raUpload->upload_date }}</p>
</div>

<!-- Size Field -->
<div class="form-group">
    {!! Form::label('size', 'Size:') !!}
    <p>{{ $raUpload->size }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $raUpload->type }}</p>
</div>

<!-- Caption Field -->
<div class="form-group">
    {!! Form::label('caption', 'Caption:') !!}
    <p>{{ $raUpload->caption }}</p>
</div>

