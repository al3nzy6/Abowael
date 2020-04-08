@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ra Reply
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'raReplies.store']) !!}

                        @include('ra_replies.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
