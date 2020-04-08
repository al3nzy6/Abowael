<!-- Connection Field -->
<div class="form-group">
    {!! Form::label('connection', 'Connection:') !!}
    <p>{{ $failedJobs->connection }}</p>
</div>

<!-- Queue Field -->
<div class="form-group">
    {!! Form::label('queue', 'Queue:') !!}
    <p>{{ $failedJobs->queue }}</p>
</div>

<!-- Payload Field -->
<div class="form-group">
    {!! Form::label('payload', 'Payload:') !!}
    <p>{{ $failedJobs->payload }}</p>
</div>

<!-- Exception Field -->
<div class="form-group">
    {!! Form::label('exception', 'Exception:') !!}
    <p>{{ $failedJobs->exception }}</p>
</div>

<!-- Failed At Field -->
<div class="form-group">
    {!! Form::label('failed_at', 'Failed At:') !!}
    <p>{{ $failedJobs->failed_at }}</p>
</div>

