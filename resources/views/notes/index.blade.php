<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mis Notas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">

            @if (session('status'))
                <div class="mb-4 text-green-600">{{ session('status') }}</div>
            @endif

            <a href="{{ route('notes.create') }}" class="text-blue-600 underline">
                + Nueva nota
            </a>

            <div class="mt-4 space-y-4">
                @forelse ($notes as $note)
                    <div class="bg-white p-4 shadow rounded">
                        <h3 class="font-bold">{{ $note->title }}</h3>
                        <p>{{ $note->content }}</p>
                        <form action="{{ route('notes.destroy', $note) }}" method="POST" class="mt-2">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 text-sm">Eliminar</button>
                        </form>
                    </div>
                @empty
                    <p>No tienes notas todavía.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>