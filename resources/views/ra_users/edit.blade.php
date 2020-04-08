@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ra Users
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($raUsers, ['route' => ['raUsers.update', $raUsers->id], 'method' => 'patch']) !!}

                        @include('ra_users.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection