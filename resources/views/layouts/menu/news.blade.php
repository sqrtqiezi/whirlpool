<li>
    <div class="top-nav">
        <a data-pjax href="{{ route('news') }}" class="js-top-nav" data-sub-nav="news-sub-nav">
            <span data-hover="新闻中心">新闻中心</span>
        </a>
        <div class="nav-sub-list">
            <ul class="menuIn animated">
                <li><a data-pjax
                       href="{{ route('news') }}?type={{ \Whirlpool\News\Entities\News::TYPE_COMPANY }}"
                       class="nav-sub-link nav-sub-text">企业内讯</a>
                </li>
                <li><a data-pjax
                       href="{{ route('news') }}?type={{ \Whirlpool\News\Entities\News::TYPE_MEDIA }}"
                       class="nav-sub-link nav-sub-text">媒体报道</a>
                </li>
                <li><a data-pjax
                       href="{{ route('news') }}?type={{ \Whirlpool\News\Entities\News::TYPE_PROMOTION }}"
                       class="nav-sub-link nav-sub-text">促销活动</a>
                </li>
            </ul>
        </div>
    </div>
</li>