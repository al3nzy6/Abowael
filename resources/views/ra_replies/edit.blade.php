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
                   {!! Form::model($raReply, ['route' => ['raReplies.update', $raReply->id], 'method' => 'patch']) !!}

                        @include('ra_replies.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection