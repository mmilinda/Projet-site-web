<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog Liste') }}
        </h2>
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-success-status class="mb-4" :status="session('message')" />

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Date de création</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($blogs as $blog )
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td>{{ $blog->titre }}</td>
                                <td>{{ $blog->description }}</td>
                                <td><img src="/public/img/{{ $blog->image }}" width="100px"></td>
                                <td>{{ $blog->created_at }}</td>
                                <td>
                                    <a href="{{ url('/edit-blog/'.$blog->id) }}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <!-- <a href="{{ url('/') }}" class="btn btn-danger">Delete</a> -->
                                    <form action="{{ url('/delete-blog/'.$blog->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button class="btn btn-danger">Delete</x-danger-button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6"> Aucun Blog trouvé !!!</td>
                            </tr>
                        @endforelse
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>