<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>

    <img src=" {{ asset('/storage/' . $post->image) }} " alt="">

    <div>
        {{ $post->content }}
    </div>
        
    @include('partials.footer')

</x-app-layout>
