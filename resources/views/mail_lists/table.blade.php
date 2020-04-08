<div class="table-responsive">
    <table class="table" id="mailLists-table">
        <thead>
            <tr>
                <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mailLists as $mailList)
            <tr>
                <td>{{ $mailList->email }}</td>
                <td>
                    {!! Form::open(['route' => ['mailLists.destroy', $mailList->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mailLists.show', [$mailList->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('mailLists.edit', [$mailList->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
