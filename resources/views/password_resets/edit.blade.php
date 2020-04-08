@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Password Resets
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($passwordResets, ['route' => ['passwordResets.update', $passwordResets->id], 'method' => 'patch']) !!}

                        @include('password_resets.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection