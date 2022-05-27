<div class="row mb-5">
    <div class="col-md">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link {{ request()->getRequestUri() == '/'.$language.'/photos' ? 'active' : '' }}" id="pills-home-tab-all" href="{{ route('photos.index', [$language]) }}"
                   role="tab">{{ __('All') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->getRequestUri() == '/'.$language.'/photos/event' ? 'active' : '' }}" id="pills-home-tab-events" href="{{ route('photos.event', [$language]) }}"
                   role="tab">{{ __('Events') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->getRequestUri() == '/'.$language.'/photos/education' ? 'active' : '' }}" id="pills-profile-tab-education" href="{{ route('photos.education', [$language]) }}"
                   role="tab">{{ __('Education') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->getRequestUri() == '/'.$language.'/photos/general' ? 'active' : '' }}" id="pills-contact-tab-general" href="{{ route('photos.general', [$language]) }}"
                   role="tab">{{ __('General') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->getRequestUri() == '/'.$language.'/photos/other' ? 'active' : '' }}" id="pills-contact-tab-other" href="{{ route('photos.other', [$language]) }}"
                   role="tab">{{ __('Other') }}</a>
            </li>
        </ul>
    </div>
</div>
