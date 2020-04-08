<!-- Number Field -->
<div class="form-group">
    {!! Form::label('number', 'Number:') !!}
    <p>{{ $smsRecieved->number }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $smsRecieved->name }}</p>
</div>

<!-- Sms Groups Id Field -->
<div class="form-group">
    {!! Form::label('sms_groups_id', 'Sms Groups Id:') !!}
    <p>{{ $smsRecieved->sms_groups_id }}</p>
</div>

