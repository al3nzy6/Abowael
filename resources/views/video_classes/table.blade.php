<div class="table-responsive">
    <table class="table" id="videoClasses-table">
        <thead>
            <tr>
                <th>Video Class</th>
        <th>Comment</th>
        <th>Publish</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($videoClasses as $videoClass)
            <tr>
                <td>{{ $videoClass->video_class }}</td>
            <td>{{ $videoClass->comment }}</td>
            <td>{{ $videoClass->publish }}</td>
                <td>
                    {!! Form::open(['route' => ['videoClasses.destroy', $videoClass->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('videoClasses.show', [$videoClass->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('videoClasses.edit', [$videoClass->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
