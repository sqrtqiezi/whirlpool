<li>
    <div class="top-nav">
        <a data-pjax href="{{ route('life') }}" class="js-top-nav" data-sub-nav="life-sub-nav">
            <span data-hover="“会”生活">“会”生活</span>
        </a>
        <div class="nav-sub-list">
            <ul class="menuIn animated">
                <li><a data-pjax
                       href="{{ route('life') }}?type={{ \Whirlpool\Life\Entities\Life::TYPE_PEOPLE }}"
                       class="nav-sub-link nav-sub-text">厨电创想人</a>
                </li>
                <li><a data-pjax
                       href="{{ route('life') }}?type={{ \Whirlpool\Life\Entities\Life::TYPE_APPLIANCE }}"
                       class="nav-sub-link nav-sub-text">“懂”厨电</a>
                </li>
                <li><a data-pjax
                       href="{{ route('life') }}?type={{ \Whirlpool\Life\Entities\Life::TYPE_DELICIOUS }}"
                       class="nav-sub-link nav-sub-text">“品”美味</a>
                </li>
                <li><a data-pjax
                       href="{{ route('life') }}?type={{ \Whirlpool\Life\Entities\Life::TYPE_KITCHEN }}"
                       class="nav-sub-link nav-sub-text">“绘”厨房</a>
                </li>
            </ul>
        </div>
    </div>
</li>