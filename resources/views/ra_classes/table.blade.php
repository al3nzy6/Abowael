<div class="table-responsive">
    <table class="table" id="raClasses-table">
        <thead>
            <tr>
                <th>Pages Id</th>
        <th>Class N</th>
        <th>Description</th>
        <th>Publish</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($raClasses as $raClass)
            <tr>
                <td>{{ $raClass->pages_id }}</td>
            <td>{{ $raClass->class_n }}</td>
            <td>{{ $raClass->description }}</td>
            <td>{{ $raClass->publish }}</td>
                <td>
                    {!! Form::open(['route' => ['raClasses.destroy', $raClass->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('raClasses.show', [$raClass->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('raClasses.edit', [$raClass->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
