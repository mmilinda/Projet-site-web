<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ url('update-blog/'.$blog->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div>
                        <x-input-label for="titre" :value="__('Titre')" />
                        <x-text-input id="titre" class="block mt-1 w-full" type="text" name="titre" :value="$blog->titre" required autofocus />
                    </div>
                    <div>
                        <x-input-label for="description" :value="__('Description')" />
                        <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="$blog->description" required autofocus />
                    </div>
                    <div>
                        <x-input-label for="image" :value="__('Image')" />
                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="$blog->image" required autofocus />
                    </div>
                    <div>
                        <x-primary-button class="ms-3">{{ __('Update Blog') }}</x-primary-button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</x-app-layout>