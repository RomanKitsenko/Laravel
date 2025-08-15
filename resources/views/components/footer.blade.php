@php

    $items = [
        route('index') => 'Home',
        route('courses') => 'Courses',
        route('contacts') => 'Contacts',
        route('terms') => 'Terms',
        route('privacy') => 'Privacy',
    ];

@endphp

<footer class="bg-violet-600">
    <div class="container flex flex-col gap-8 py-10 px-4">
        <div class="flex items-center gap-8 justify-between">
            <ul class="flex gap-4">
                @foreach($items as $href => $label)
                    <a class="font-medium text-white hover:text-purple-200" href="{{ $href }}">{{ $label }}</a>
                @endforeach

            </ul>
            <ul>
                <li>
                    <a href=""></a>
                </li>
            </ul>
        </div>
        <div class="">
            <p class="text-sm text-violet-200 text-center">
                &copy; {{ config('app.name') }} {{ date('Y') }}. All rights reserved
            </p>
        </div>
    </div>
</footer>
