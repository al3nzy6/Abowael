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
                   {!! Form::model($mailList, ['route' => ['mailLists.update', $mailList->id], 'method' => 'patch']) !!}

                        @include('mail_lists.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection