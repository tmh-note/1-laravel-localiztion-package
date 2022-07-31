<ul>
    <li><a href="/">@lang('nav.Page.Home')</a></li>
    <li><a href="/about">@lang('nav.About')</a></li>
    -------------------------
    <li><a href="/lang/en">@lang('English')</a></li>
    {{-- <li><a href="/lang/my">@lang('Myanmar')</a></li> --}}
    {{-- <li><a href="/lang/my">{{ __('Myanmar') }}</a></li> --}}
    {{-- <li><a href="/lang/my">{{ trans('Myanmar') }}</a></li> --}}
    <li><a href="/lang/my">{{ Lang::get('Myanmar') }}</a></li>
</ul>