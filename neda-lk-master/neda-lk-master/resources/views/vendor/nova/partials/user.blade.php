<dropdown-trigger class="h-9 flex items-center">
    @isset($user->email)
        <img
            src="https://secure.gravatar.com/avatar/{{ md5(\Illuminate\Support\Str::lower($user->email)) }}?size=512"
            class="rounded-full w-8 h-8 mr-3"
        />
    @endisset

    <span class="text-90">
        {{ $user->name ?? $user->email ?? __('Nova User') }}
    </span>
</dropdown-trigger>

<dropdown-menu slot="menu" width="200" direction="rtl">
    <ul class="list-reset">
        <li class="px-3 py-2">
            <label for="active_language" class="inline-block text-80 pt-2 leading-tight pb-2">
                {{ __('Language') }}
            </label>
            <select name="active_language"
                    id="active_language"
                    class="w-full form-control form-select"
                    onchange="location.href=this.value">
                @foreach(config('app.languages') as $locale => $label)
                    <option value="{{ route('language.switch', $locale) }}?redirect=/admin/dashboards/main" {{ $locale === app()->getLocale() ? 'selected' : '' }}>
                        {{ $label }}
                    </option>
                @endforeach
            </select>
        </li>
        <li>
            <a href="{{ route('nova.logout') }}" class="block no-underline text-90 hover:bg-30 p-3">
                {{ __('Logout') }}
            </a>
        </li>
    </ul>
</dropdown-menu>
