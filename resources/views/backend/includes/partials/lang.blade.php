<div class="ml-3 relative">
    <x-jet-dropdown align="right" width="48">
        <x-slot name="trigger">
                <span class="inline-flex rounded-md">
                    <a type="button" class="inline-flex items-center px-3 py-2  border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                        <i class="fa fa-language"></i> &nbsp; @lang("menus.language-picker.language")

                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </span>
        </x-slot>

        <x-slot name="content">
            @foreach (array_keys(config('locale.languages')) as $lang)
                @if ($lang != App::getLocale())
                    <x-jet-dropdown-link href="{{ url('/') }}/lang/{{$lang}}">
                        {{ trans('menus.language-picker.langs.'.$lang) }}
                    </x-jet-dropdown-link>
                @endif
            @endforeach
        </x-slot>
    </x-jet-dropdown>
</div>
