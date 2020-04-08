@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mail List
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'mailLists.store']) !!}

                        @include('mail_lists.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
