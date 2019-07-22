<div class="flex flex-col mb-4">
{{--    <p class="text-grey-darker font-medium my-2">--}}
{{--        {{ $post->getDate()->format('F j, Y') }}--}}
{{--    </p>--}}

{{--    <h2 class="text-3xl mt-0">--}}
{{--        <a--}}
{{--            href="{{ $post->getUrl() }}"--}}
{{--            title="Read more - {{ $post->title }}"--}}
{{--            class="text-black font-extrabold"--}}
{{--        >{{ $post->title }}</a>--}}
{{--    </h2>--}}

{{--    <p class="mb-4 mt-0">{!! $post->getExcerpt(200) !!}</p>--}}

{{--    <a--}}
{{--        href="{{ $post->getUrl() }}"--}}
{{--        title="Read more - {{ $post->title }}"--}}
{{--        class="uppercase font-semibold tracking-wide mb-2"--}}
{{--    >Read</a>--}}
    <div class="rounded overflow-hidden shadow-lg">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">
                <a
                        href="{{ $post->getUrl() }}"
                        title="Read more - {{ $post->title }}"
                        class="text-black font-extrabold"
                >{{ $post->title }}</a>
            </div>
            <p class="text-gray-700 text-base">
            <p class="text-grey-darker font-medium my-2">
                {{ $post->getDate()->format('F j, Y') }}
            </p>
            {!! $post->getExcerpt(200) !!}
            </p>
        </div>
        <div class="px-6 py-4">
{{--            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>--}}
{{--            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>--}}
{{--            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>--}}
        </div>
    </div>
</div>
