<li>
    <div class="top-nav">
        <a data-pjax href="{{ route('products') }}" class="js-top-nav" data-sub-nav="product-sub-nav">
            <span data-hover="厨房电器">厨房电器</span>
        </a>
        <div class="nav-sub-list">
            <ul class="menuIn animated animated-slowly">
                @foreach($productTypes as $type)
                    <li><a data-pjax
                           href="{{ route('category', $type->id) }}"
                           class="nav-sub-link nav-sub-image">
                            {!! $type->name !!}
                        </a></li>
                @endforeach
            </ul>
        </div>
    </div>
</li>