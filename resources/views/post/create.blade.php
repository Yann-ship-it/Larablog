<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>

        @foreach($errors->all() as $error)
            <span class="block text-red-500">{{ $error }}</span>
        @endforeach

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data" class="mt-10">

            @csrf

            <x-input-label for="title" value="Titre du post"/>
            <x-text-input id="title" name="title"/>

            <x-input-label for="content" value="Contenu du post"/>
            <textarea id="content" name="content"></textarea>

            <x-input-label for="image" value="Image du post"/>
            <x-text-input id="image" type="file" name="image"/>

            <x-input-label for="category" value="Catégorie"/>
            <select name="category" id="category">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name  }} </option>
                @endforeach
            </select>

            <button class="text-white">Créer mon post </button>
        </form>
    </div>

    @include('partials.footer')

</x-app-layout>
