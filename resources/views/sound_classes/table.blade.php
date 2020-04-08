<div class="table-responsive">
    <table class="table" id="soundClasses-table">
        <thead>
            <tr>
                <th>Page Id</th>
        <th>Class Name</th>
        <th>Description</th>
        <th>Publish</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($soundClasses as $soundClass)
            <tr>
                <td>{{ $soundClass->page_id }}</td>
            <td>{{ $soundClass->class_name }}</td>
            <td>{{ $soundClass->description }}</td>
            <td>{{ $soundClass->publish }}</td>
                <td>
                    {!! Form::open(['route' => ['soundClasses.destroy', $soundClass->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('soundClasses.show', [$soundClass->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('soundClasses.edit', [$soundClass->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
