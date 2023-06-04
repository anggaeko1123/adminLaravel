<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Data Ebook - Admin') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <a href="{{ route('posts.create') }}"
                    class="inline-flex items-center px-4 py-2 mb-4 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md hover:bg-green-500 active:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-gray disabled:opacity-25">
                    Tambah Data Ebook
                </a>
                @if ($message = Session::get('success'))
                    <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md my-3"
                        role="alert">
                        <div class="flex">
                            <div>
                                <p class="text-sm">{{ $message }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                <table class="w-full table-fixed">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 border">Judul</th>
                            <th class="px-4 py-2 border">Cover</th>
                            <th class="px-4 py-2 border">Tahun Terbit</th>
                            <th class="px-4 py-2 border">Kategori 1</th>
                            <th class="px-4 py-2 border">Kategori 2</th>
                            <th class="px-4 py-2 border">Rating</th>
                            <th class="px-4 py-2 border">Jenis</th>
                            <th class="px-4 py-2 border">Penulis</th>
                            <th class="px-4 py-2 border">Deskripsi</th>
                            <th class="px-4 py-2 border">Isi</th>
                            <th class="px-4 py-2 border">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($posts))
                            @foreach ($posts as $row)
                                <tr>
                                    <td class="px-4 py-2 border">{{ $row->judul }}</td>
                                    <td class="px-4 py-2 border">
                                        <img src="{{ Storage::url($row->cover) }}" alt="Cover" class="h-16 w-16">
                                    </td>
                                    <td class="px-4 py-2 border">{{ $row->terbit }}</td>
                                    <td class="px-4 py-2 border">{{ $row->kategori_1 }}</td>
                                    <td class="px-4 py-2 border">{{ $row->kategori_2 }}</td>
                                    <td class="px-4 py-2 border">{{ $row->rating }}</td>
                                    <td class="px-4 py-2 border">{{ $row->jenis }}</td>
                                    <td class="px-4 py-2 border">{{ $row->penulis }}</td>
                                    <td class="px-4 py-2 border"
                                        style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                        {{ $row->deskripsi }}
                                    </td>
                                    <td class="px-4 py-2 border">
                                        <a href="{{ Storage::url($row->isi) }}"
                                            class="text-blue-500 hover:underline">Lihat</a>
                                    </td>
                                    <td class="px-4 py-2 border">
                                        <form action="{{ route('posts.destroy', $row->id) }}" method="POST">
                                            <a href="{{ route('posts.show', $row->id) }}"
                                                class="inline-flex items-center px-4 py-2 mx-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                                                Show
                                            </a>
                                            <a href="{{ route('posts.edit', $row->id) }}"
                                                class="inline-flex items-center px-4 py-2 mx-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                                                Edit
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" title="delete"
                                                class="inline-flex items-center px-4 py-2 mx-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-red-600 border border-transparent rounded-md hover:bg-red-500 active:bg-red-700 focus:outline-none focus:border-red-700 focus:shadow-outline-gray disabled:opacity-25">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="px-4 py-2 border text-red-500" colspan="3">No data found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
