<div class="table-responsive">
    <table class="table" id="passwordResets-table">
        <thead>
            <tr>
                <th>Email</th>
        <th>Token</th>
        <th>Created At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($passwordResets as $passwordResets)
            <tr>
                <td>{{ $passwordResets->email }}</td>
            <td>{{ $passwordResets->token }}</td>
            <td>{{ $passwordResets->created_at }}</td>
                <td>
                    {!! Form::open(['route' => ['passwordResets.destroy', $passwordResets->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('passwordResets.show', [$passwordResets->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('passwordResets.edit', [$passwordResets->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
