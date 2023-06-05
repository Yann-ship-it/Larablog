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
                <div class="justify-center py-3 pl-3 pb-5">
                    <h2 class="text-white text-4xl font-semibold pb-1">{{ $post->title }}</h2>

                    <div class="flex">
                        <x-link href="{{ route('posts.edit', $post) }}">Modifier</x-link>

                        <form class="pl-5" action={{ route('posts.destroy', $post) }} method="post" id="post-destroy">
                            @csrf
                            <input type="hidden" name="article_id" id="article_id">
                            <input class="items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800" 
                            type="submit" 
                            value="Supprimer">
                            @method('delete')
                        </form>
                    </div> 
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
