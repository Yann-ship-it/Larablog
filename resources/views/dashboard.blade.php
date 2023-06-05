<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if( session ('succes'))
                {{ session('succes') }}
            @endif

            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                @foreach ($posts as $post)
                <div class="justify-center py-3 pl-3">
                    <h2 class="text-white">{{ $post->title }}</h2>

                    <x-link href="{{ route('posts.edit', $post) }}">Modifier mon post </x-link>


                    <x-link href="" 
                        onclick="event.preventDefault;
                            document.getElementById('post-destroy').submit();
                        ">Supprimer
                        <form action={{ route('posts.destroy', $post) }} method="post" id="post-destroy">
                            @csrf
                            @method('delete')
                        </form>
                    </x-link>
                </div> 
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
