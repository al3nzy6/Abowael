 @extends('publicLay.app')

@section('content')

<p class="category-headding "> <h1>{{ $section->class_n }}</h1>  </p>
                        <div class="headding-border"></div>
<table class="table table-striped pt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">عنوان المقال</th>
      <th scope="col">التاريخ</th>
      <th scope="col">المشاهدات</th>
    </tr>
  </thead>
  <tbody>
  	@php
  		$r = 1;
  	@endphp
  	@foreach ($blogs as $blog)
    <tr>
      <th scope="row">{{ $r }}</th>
      <td><a href="{{ route('showBlog', [$blog->id, Str::arabic_slug($blog->title)]) }}">{{ $blog->title }}</a></td>
      <td>{{ $blog->created }}</td>
      <td>{{ $blog->view }}</td>
    </tr>
    @php
    	$r++;
    @endphp
    @endforeach
  </tbody>
</table>
@endsection