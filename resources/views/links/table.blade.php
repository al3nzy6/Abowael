<div class="table-responsive">
    <table class="table" id="links-table">
        <thead>
            <tr>
                <th>Subject</th>
        <th>Link</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($links as $links)
            <tr>
                <td>{{ $links->subject }}</td>
            <td>{{ $links->link }}</td>
                <td>
                    {!! Form::open(['route' => ['links.destroy', $links->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('links.show', [$links->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('links.edit', [$links->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
