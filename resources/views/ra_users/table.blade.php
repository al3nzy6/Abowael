<div class="table-responsive">
    <table class="table" id="raUsers-table">
        <thead>
            <tr>
                <th>First Name</th>
        <th>Last Name</th>
        <th>Email Address</th>
        <th>Username</th>
        <th>Password</th>
        <th>Info</th>
        <th>User Level</th>
        <th>Signup Date</th>
        <th>Last Login</th>
        <th>Activated</th>
        <th>Upload No</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($raUsers as $raUsers)
            <tr>
                <td>{{ $raUsers->first_name }}</td>
            <td>{{ $raUsers->last_name }}</td>
            <td>{{ $raUsers->email_address }}</td>
            <td>{{ $raUsers->username }}</td>
            <td>{{ $raUsers->password }}</td>
            <td>{{ $raUsers->info }}</td>
            <td>{{ $raUsers->user_level }}</td>
            <td>{{ $raUsers->signup_date }}</td>
            <td>{{ $raUsers->last_login }}</td>
            <td>{{ $raUsers->activated }}</td>
            <td>{{ $raUsers->upload_no }}</td>
                <td>
                    {!! Form::open(['route' => ['raUsers.destroy', $raUsers->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('raUsers.show', [$raUsers->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('raUsers.edit', [$raUsers->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
