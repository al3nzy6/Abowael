<div class="table-responsive">
    <table class="table" id="raContents-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Pages Id</th>
        <th>Class Id</th>
        <th>Content</th>
        <th>Picture</th>
        <th>Created</th>
        <th>Modified</th>
        <th>View</th>
        <th>Reply</th>
        <th>Writer</th>
        <th>Sent</th>
        <th>Userid</th>
        <th>Publish</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($raContents as $raContent)
            <tr>
                <td>{{ $raContent->title }}</td>
            <td>{{ $raContent->pages_id }}</td>
            <td>{{ $raContent->class_id }}</td>
            <td>{{ $raContent->content }}</td>
            <td>{{ $raContent->picture }}</td>
            <td>{{ $raContent->created }}</td>
            <td>{{ $raContent->modified }}</td>
            <td>{{ $raContent->view }}</td>
            <td>{{ $raContent->reply }}</td>
            <td>{{ $raContent->writer }}</td>
            <td>{{ $raContent->sent }}</td>
            <td>{{ $raContent->userid }}</td>
            <td>{{ $raContent->publish }}</td>
                <td>
                    {!! Form::open(['route' => ['raContents.destroy', $raContent->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('raContents.show', [$raContent->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('raContents.edit', [$raContent->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
