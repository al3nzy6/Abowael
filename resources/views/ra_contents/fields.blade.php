<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Pages Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pages_id', 'Pages Id:') !!}
    {!! Form::text('pages_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Class Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class_id', 'Class Id:') !!}
    {!! Form::text('class_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control', 'id'=>'default']) !!}
</div>

<!-- Picture Field -->
<div class="form-group col-sm-6">
    {!! Form::label('picture', 'Picture:') !!}
    {!! Form::text('picture', null, ['class' => 'form-control']) !!}
</div>



<!-- Sent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sent', 'Sent:') !!}
    {!! Form::number('sent', null, ['class' => 'form-control']) !!}
</div>

<!-- Userid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('userid', 'Userid:') !!}
    {!! Form::number('userid', null, ['class' => 'form-control']) !!}
</div>

<!-- Publish Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publish', 'Publish:') !!}
    {!! Form::select('publish', [0=>'not Publish', 1=>'publish'], old('publish', isset($raContent->publish) ? $raContent->publish : ''), ['class' => 'form-control']) !!}
    {{-- {!! Form::number('publish', null, ['class' => 'form-control']) !!} --}}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('raContents.index') }}" class="btn btn-default">Cancel</a>
</div>


@push('scripts')
<script>
    tinymce.init({
    selector: 'textarea#default', // change this value according to your HTML
    plugin: 'a_tinymce_plugin',
    a_plugin_option: true,
    a_configuration_option: 400
    });
</script>
@endpush
