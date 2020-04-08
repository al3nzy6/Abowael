<ul class="nav navbar-nav">
    <li class="active"><a href="{{ url('/') }}" class="category01">الصفحة الرئيسية</a></li>
    @foreach ($pages as $page)
    <li class="dropdown">
        <a href="#" class="dropdown-toggle category03" data-toggle="dropdown"> {{ $page->pages }} <span class="pe-7s-angle-down"></span></a>
        <ul class="dropdown-menu menu-slide">
            @foreach ($subpages as $subpage)
            @if ($subpage->pages_id == $page->id)
                <li><a href="{{ Route('showBlogSection', [$subpage->id, Str::arabic_slug($subpage->class_n)]) }}">{{ $subpage->class_n }}</a></li>
            @endif
            @endforeach
            <!--<li class="divider"></li>-->
        </ul>
    </li>
    @endforeach
    {{-- <li class="dropdown">
        <a href="#" class="dropdown-toggle category03" data-toggle="dropdown">لوحة التحكم <span class="pe-7s-angle-down"></span></a>
        <ul class="dropdown-menu menu-slide">
            <!--<li><a href=""></a></li>-->
            <li><a href="upload.html">مركز التحميل</a></li>
            <li><a href="change_pass.html">تغيير كلمة المرور</a></li>
            <li><a href="article.html">مشاركاتي</a></li>
            <li><a href="addcon.html">مقال جديد</a></li>
            <!--<li class="divider"></li>-->
        </ul>
    </li> --}}
</ul>