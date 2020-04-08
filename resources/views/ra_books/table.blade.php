<div class="table-responsive">
    <table class="table" id="raBooks-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Puplish Date</th>
        <th>Puplish House</th>
        <th>About Book</th>
        <th>Book Link</th>
        <th>Cover Link</th>
        <th>Hegoog</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($raBooks as $raBook)
            <tr>
                <td>{{ $raBook->title }}</td>
            <td>{{ $raBook->puplish_date }}</td>
            <td>{{ $raBook->puplish_house }}</td>
            <td>{{ $raBook->about_book }}</td>
            <td>{{ $raBook->book_link }}</td>
            <td>{{ $raBook->cover_link }}</td>
            <td>{{ $raBook->hegoog }}</td>
                <td>
                    {!! Form::open(['route' => ['raBooks.destroy', $raBook->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('raBooks.show', [$raBook->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('raBooks.edit', [$raBook->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
