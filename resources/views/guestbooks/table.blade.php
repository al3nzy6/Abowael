<div class="table-responsive">
    <table class="table" id="guestbooks-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Email</th>
        <th>Comment</th>
        <th>Datetime</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($guestbooks as $guestbook)
            <tr>
                <td>{{ $guestbook->name }}</td>
            <td>{{ $guestbook->email }}</td>
            <td>{{ $guestbook->comment }}</td>
            <td>{{ $guestbook->datetime }}</td>
                <td>
                    {!! Form::open(['route' => ['guestbooks.destroy', $guestbook->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('guestbooks.show', [$guestbook->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('guestbooks.edit', [$guestbook->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
