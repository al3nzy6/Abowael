<div class="table-responsive">
    <table class="table" id="raJobClasses-table">
        <thead>
            <tr>
                <th>Takhsos</th>
        <th>Description</th>
        <th>Publish</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($raJobClasses as $raJobClass)
            <tr>
                <td>{{ $raJobClass->takhsos }}</td>
            <td>{{ $raJobClass->description }}</td>
            <td>{{ $raJobClass->publish }}</td>
                <td>
                    {!! Form::open(['route' => ['raJobClasses.destroy', $raJobClass->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('raJobClasses.show', [$raJobClass->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('raJobClasses.edit', [$raJobClass->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
