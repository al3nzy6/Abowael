<div class="table-responsive">
    <table class="table" id="sounds-table">
        <thead>
            <tr>
                <th>Page Id</th>
        <th>Class Id</th>
        <th>Date</th>
        <th>Snd Name</th>
        <th>File Name</th>
        <th>Size</th>
        <th>Type</th>
        <th>Visit</th>
        <th>Download</th>
        <th>Sent</th>
        <th>Soundtype</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sounds as $sound)
            <tr>
                <td>{{ $sound->page_id }}</td>
            <td>{{ $sound->class_id }}</td>
            <td>{{ $sound->date }}</td>
            <td>{{ $sound->snd_name }}</td>
            <td>{{ $sound->file_name }}</td>
            <td>{{ $sound->size }}</td>
            <td>{{ $sound->type }}</td>
            <td>{{ $sound->visit }}</td>
            <td>{{ $sound->download }}</td>
            <td>{{ $sound->sent }}</td>
            <td>{{ $sound->soundtype }}</td>
                <td>
                    {!! Form::open(['route' => ['sounds.destroy', $sound->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sounds.show', [$sound->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('sounds.edit', [$sound->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
