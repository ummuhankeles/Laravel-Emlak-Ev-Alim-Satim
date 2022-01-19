<ul class="tree" style="background-color: #FFFFFF">
@foreach($children as $subcategory)
        @if(count($subcategory->children))
            <li style="..."><a href="{{ route('categoryproducts', ['id'=>$subcategory->id]) }}">{{ $subcategory->title }}</a></li>
        @else
            <li><a href="{{ route('categoryproducts', ['id'=>$subcategory->id]) }}">{{ $subcategory->title }}</a></li>
        @endif
@endforeach
</ul>
