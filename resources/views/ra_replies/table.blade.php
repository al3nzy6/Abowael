<div class="table-responsive">
    <table class="table" id="raReplies-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Content Id</th>
        <th>R Id</th>
        <th>R Name</th>
        <th>R Email</th>
        <th>R Answer</th>
        <th>R Datetime</th>
        <th>Publish</th>
        <th>Readable</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($raReplies as $raReply)
            <tr>
                <td>{{ $raReply->id }}</td>
            <td>{{ $raReply->content_id }}</td>
            <td>{{ $raReply->r_id }}</td>
            <td>{{ $raReply->r_name }}</td>
            <td>{{ $raReply->r_email }}</td>
            <td>{{ $raReply->r_answer }}</td>
            <td>{{ $raReply->r_datetime }}</td>
            <td>{{ $raReply->publish }}</td>
            <td>{{ $raReply->readable }}</td>
                <td>
                    {!! Form::open(['route' => ['raReplies.destroy', $raReply->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('raReplies.show', [$raReply->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('raReplies.edit', [$raReply->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
