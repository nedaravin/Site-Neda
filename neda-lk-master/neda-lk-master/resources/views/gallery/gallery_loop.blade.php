@if($galleries && $galleries->count())
    @foreach($galleries as $gallery)
        @if($gallery && $gallery->hasMedia('gallery'))
            <h4>{{ $gallery->title }}</h4>
            <div class="gallery-page mb-5">
                @foreach($gallery->getMedia('gallery') as $item)
                    <div class="gallery-item">
                        <img src="{{ $item->getUrl('thumb') }}"/>
                        <a href="{{ $item->getUrl() }}"
                           data-lightbox="{{ $gallery->title }}" class="gallery-img"></a>
                    </div>
                @endforeach
            </div>
        @endif
    @endforeach
@endif
