<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <x-success-status class="mb-4" :status="session('message')" />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{url('add-blog')}}" method="post">
                    @csrf

                    <div>
                        <x-input-label for="titre" :value="__('Titre')" />
                        <x-text-input id="titre" class="block mt-1 w-full" type="text" name="titre" :value="old('titre')" required autofocus />
                    </div>
                    <div>
                        <x-input-label for="description" :value="__('Description')" />
                        <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />
                    </div>
                    <div>
                        <x-input-label for="image" :value="__('Image')" />
                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required autofocus />
                    </div>
                    <div>
                        <x-primary-button class="ms-3">{{ __('Save Blog') }}</x-primary-button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</x-app-layout>