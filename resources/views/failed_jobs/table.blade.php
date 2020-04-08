<div class="table-responsive">
    <table class="table" id="failedJobs-table">
        <thead>
            <tr>
                <th>Connection</th>
        <th>Queue</th>
        <th>Payload</th>
        <th>Exception</th>
        <th>Failed At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($failedJobs as $failedJobs)
            <tr>
                <td>{{ $failedJobs->connection }}</td>
            <td>{{ $failedJobs->queue }}</td>
            <td>{{ $failedJobs->payload }}</td>
            <td>{{ $failedJobs->exception }}</td>
            <td>{{ $failedJobs->failed_at }}</td>
                <td>
                    {!! Form::open(['route' => ['failedJobs.destroy', $failedJobs->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('failedJobs.show', [$failedJobs->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('failedJobs.edit', [$failedJobs->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
