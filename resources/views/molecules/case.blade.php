<article>
    <a href="#" class="m-case{{ empty($complete) ? ' -small' : '' }}" title="{{ $item->title }}">
        <div class="a-ratio m-case__thumb" data-ratio="1/1">
            <img src="{{asset('uploads/placeholder.jpg')}}" alt="{{ $item->title }}">
        </div>
        <div class="m-case__content">
            <p class="a-h3">{{ $item->title }}</p>
            @if (isset($complete))
                <div class="m-case__content--cols mgt-1">
                    <p class="text-cgraydark -small">Lorem ipsum dolor sit amet consectetur. Adipiscing dolor augue dictum justo gravida. Laoreet senectus egestas a quam egestas magna imperdiet et. Hac non sapien nibh pellentesque feugiat. Magna nunc in vitae sit dolor non sed in sit. Platea tincidunt scelerisque nulla tempus sed.</p>
                    <div>
                        <p class="a-h5 mgb-1">Plateformes activées</p>
                        <ul class="no-bullet">
                            <li class="a-text -small text-cgraydark">Tiktok</li>
                            <li class="a-text -small text-cgraydark">Instagram</li>
                            <li class="a-text -small text-cgraydark">Youtube</li>
                        </ul>
                    </div>
                </div>
            @else
                <p class="text-cgraydark -small">Une petite phrase de description de l’aperçu</p>
            @endif
            <span class="m-case__arrow">
                <svg class="icon" aria-hidden="true" focusable="false">
                    <use xlink:href="#icon-add" />
                </svg>
            </span>
        </div>
    </a>
</article>

