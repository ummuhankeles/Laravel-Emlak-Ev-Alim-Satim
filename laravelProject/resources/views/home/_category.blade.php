@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp

<ul class="sub-menu">
@foreach($parentCategories as $rs)

        <li><a>{{ $rs->title }}</a></li>
        @if(count($rs->children))
            @include('categorytree',['children' => $rs->children])
        @endif

@endforeach
</ul>
