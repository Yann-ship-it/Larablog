<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Créer un post') }}
        </h2>
    </x-slot>

    <div>

        @foreach($errors->all() as $error)
            <span class="block text-red-500">{{ $error }}</span>
        @endforeach
        
    </div>
        

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data" class="mt-10">

            @csrf

            <x-input-label class="mt-5" for="title" value="Titre du post"/>
            <x-text-input class="bg-white" id="title" name="title"/>

            <x-input-label class="mt-5" for="content" value="Contenu du post"/>
            <textarea id="content" name="content"></textarea>

            <x-input-label class="mt-5" for="image" value="Image du post"/>
            <x-text-input id="image" type="file" name="image"/>

            <x-input-label class="mt-5" for="category" value="Catégorie"/>
            <select name="category" id="category">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }} </option>
                @endforeach
            </select>

            <x-primary-button class="mt-5 block text-white">Créer mon post </x-primary-button>
        </form>
    </div>

    @include('partials.footer')

</x-app-layout>
