<!-- Footer -->
<footer>
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="list-inline social-list mb-5">
                        <a class="list-inline-item" href="https://www.facebook.com/neda.srilanka">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a class="list-inline-item" href="https://www.youtube.com/user/nedasrilanka">
                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        </a>
                        <a class="list-inline-item d-none" href="#">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div>
                        <img src="{{asset('images/gov-lg.png')}}" class="float-left mr-4">
                        <div class="p-4">
                            <p class="text-white small"> {{ __('Copyright') }} © {{ date('Y') }}
                                <br>{{ __('National Enterprise Development Authority') }}.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        @if($full_menu && $full_menu->count())
                            @foreach($full_menu->split(4) as $menu_collection)
                                <ul class="col-md nav flex-column">
                                    @foreach($menu_collection as $menu_item)
                                        <li class="nav-item">
                                            <a
                                                class="nav-link"
                                                href="/{{ $language }}/{{ $menu_item->model_type ? $menu_item->model_type.'/' : '' }}{{ $menu_item->url }}">
                                                {{ $menu_item->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-secondary text-center small pt-4">
        <div class="row">
            <div class="col">
                <img src="{{asset('images/gic.png')}}">
            </div>
            <div class="col">
                <p class="text-muted">Design & Developed By <a
                        href="https://www.adlux.asia/?utm_source=Neda_Web&utm_medium=Footer&utm_campaign=Footer_CallOut"
                        target="_blank"
                        class="adlux">Adlux Software</a></p>
            </div>
        </div>
    </div>
</footer>
