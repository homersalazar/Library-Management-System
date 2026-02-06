{{-- @extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col md:flex-row">
    <!-- Left side: Background image with overlay -->
    <div class="relative md:flex-1 w-full h-64 md:h-auto flex items-center justify-center text-center bg-cover bg-center"
            style="background-image: url('{{ asset('storage/cover/cover_photo1.png') }}');">
        <!-- Overlay for readability -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <!-- Text content -->
        <div class="relative px-6 md:px-12 text-white">
            <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                Welcome to the Library Management System
            </h1>
            <p class="text-md md:text-lg lg:text-xl">
                Manage your library efficiently and effortlessly.
            </p>
        </div>
    </div>

    <!-- Right side: Login Form -->
    <div class="flex-1 w-full flex items-center justify-center p-6 md:p-12 bg-gray-50">
        <form class="w-full max-w-md bg-white p-8 rounded-xl shadow-xl space-y-6">
            <h2 class="text-2xl font-bold text-gray-700">Login</h2>

            <!-- Email -->
            <div>
                <x-label for="email" class="mb-2" variant="green">Email</x-label>
                <x-input type="email" id="email" placeholder="name@gmail.com" required class="block w-full focus:ring-green-500 focus:border-green-500" />
            </div>

            <!-- Password -->
            <div>
                <x-label for="password" class="mb-2" variant="green">Password</x-label>
                <x-input type="password" id="password" placeholder="••••••••" required class="block w-full focus:ring-green-500 focus:border-green-500" />
            </div>

            <!-- Remember me + Forgot Password -->
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <x-checkbox id="remember" variant="green" />
                    <x-label for="remember" class="ml-2 text-gray-600">Remember me</x-label>
                </div>
                <a href="#" class="text-green-500 hover:underline text-sm">Forgot password?</a>
            </div>

            <!-- Submit button -->
            <x-button type="submit" class="w-full py-3 text-white bg-green-500 hover:bg-green-600 transition duration-300">
                Login
            </x-button>

        </form>
    </div>
</div>
@endsection --}}
@extends('layouts.app')

@section('content')
<div class="p-6 space-y-6 bg-gray-50 min-h-screen">

    {{-- TOP BAR --}}
    <div class="flex flex-wrap items-center justify-between gap-4">
        <div class="flex gap-6 text-sm font-medium">
            <span class="border-b-2 border-blue-600 pb-2">
                All books <span class="ml-1 text-blue-600"></span>
            </span>
            <span class="text-gray-500">Lent </span>
            <span class="text-gray-500">Returned </span>
            <span class="text-gray-500">Overdue</span>
            <span class="text-gray-500">Requests </span>
        </div>

        <div class="flex items-center gap-3">
            <span class="text-sm text-gray-500">
                <i class="fa-regular fa-calendar"></i>
                01 Jan 2022 – 14 Dec 2022
            </span>

            <a href=""
               class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700">
                + Add Book
            </a>
        </div>
    </div>

    {{-- SEARCH + FILTERS --}}
    <div class="flex flex-wrap items-center gap-4">
        <div class="relative w-full max-w-sm">
            <input type="text"
                placeholder="Search"
                class="w-full pl-10 pr-4 py-2 rounded-lg border focus:ring-blue-500">
            <span class="absolute left-3 top-2.5 text-gray-400">🔍</span>
        </div>

        <div class="flex gap-2">
            {{-- @foreach(['All','Available','Borrowed','Overdue','Damaged','Missing'] as $filter)
                <button class="px-4 py-2 text-sm rounded-lg
                    {{ $filter === 'All'
                        ? 'bg-blue-100 text-blue-700'
                        : 'bg-white border text-gray-600 hover:bg-gray-100' }}">
                    {{ $filter }}
                </button>
            @endforeach --}}
        </div>
    </div>

    {{-- TABLE --}}
    <div class="bg-white rounded-xl shadow overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-100 text-gray-600">
                <tr>
                    <th class="p-4"><input type="checkbox"></th>
                    <th class="p-4">Thumbnail</th>
                    <th class="p-4 text-left">Title & Author</th>
                    <th class="p-4">Publisher</th>
                    <th class="p-4">Book ID</th>
                    <th class="p-4">ISBN</th>
                    <th class="p-4">Status</th>
                    <th class="p-4">Requests</th>
                    <th class="p-4">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y">
                {{-- @foreach($books as $book)
                    <tr class="hover:bg-gray-50">
                        <td class="p-4"><input type="checkbox"></td>

                        <td class="p-4">
                            <img src="{{ $book->cover_image }}"
                                class="w-12 h-16 rounded object-cover">
                        </td>

                        <td class="p-4 text-left">
                            <div class="font-semibold">{{ $book->title }}</div>
                            <div class="text-xs text-gray-500">
                                by {{ $book->authors->pluck('name')->join(', ') }}
                            </div>
                        </td>

                        <td class="p-4">{{ $book->publisher }}</td>
                        <td class="p-4">#{{ $book->id }}</td>
                        <td class="p-4">{{ $book->isbn }}</td>

                        <td class="p-4">
                            @if($book->status === 'borrowed')
                                <span class="px-3 py-1 rounded-full bg-red-100 text-red-700 text-xs">
                                    Borrowed
                                </span>
                            @else
                                <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs">
                                    Available
                                </span>
                            @endif
                        </td>

                        <td class="p-4 text-center">
                            {{ $book->requests_count ?? 0 }}
                        </td>

                        <td class="p-4">
                            <div class="flex gap-2 justify-center">
                                <button class="p-2 bg-gray-100 rounded hover:bg-gray-200">✏️</button>
                                <button class="p-2 bg-gray-100 rounded hover:bg-gray-200">📄</button>
                                <button class="p-2 bg-gray-100 rounded hover:bg-gray-200">🗑️</button>
                            </div>
                        </td>
                    </tr>

                    <tr class="bg-gray-50 text-xs text-gray-600">
                        <td colspan="9" class="p-4">
                            <div class="grid grid-cols-4 gap-4">
                                <div><strong>Edition:</strong> {{ $book->edition }}</div>
                                <div><strong>Language:</strong> {{ $book->language }}</div>
                                <div><strong>Published:</strong> {{ $book->publication_year }}</div>
                                <div><strong>Pages:</strong> {{ $book->pages ?? '—' }}</div>

                                <div><strong>Keywords:</strong> science, research</div>
                                <div><strong>Series:</strong> N/A</div>
                                <div><strong>Added:</strong> {{ $book->created_at->format('d M Y') }}</div>
                                <div><strong>Call No:</strong> QA-200-BB-550</div>
                            </div>
                        </td>
                    </tr>

                @endforeach --}}
            </tbody>
        </table>
    </div>
</div>
<div class="p-6 bg-gray-50 min-h-screen">

    {{-- PAGE HEADER --}}
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Add New Book</h1>
            <p class="text-sm text-gray-500">Enter complete book information</p>
        </div>

        <a href=""
           class="text-sm text-gray-600 hover:underline">
            ← Back to books
        </a>
    </div>

    <form method="POST" action="" enctype="multipart/form-data"
          class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        @csrf

        {{-- LEFT COLUMN (COVER) --}}
        <div class="bg-white rounded-xl shadow p-6">
            <h3 class="font-semibold mb-4">Book Cover</h3>

            <div class="flex flex-col items-center gap-4">
                <img id="preview"
                     src="https://via.placeholder.com/160x240"
                     class="w-40 h-60 object-cover rounded-lg border">

                <input type="file" name="cover_image"
                       accept="image/*"
                       onchange="previewImage(event)"
                       class="block w-full text-sm text-gray-500
                              file:mr-4 file:py-2 file:px-4
                              file:rounded-lg file:border-0
                              file:bg-blue-50 file:text-blue-700
                              hover:file:bg-blue-100">
            </div>
        </div>

        {{-- RIGHT COLUMN (DETAILS) --}}
        <div class="lg:col-span-2 bg-white rounded-xl shadow p-6 space-y-6">

            {{-- BASIC INFO --}}
            <div>
                <h3 class="font-semibold mb-4">Basic Information</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input name="isbn" placeholder="ISBN"
                           class="input" required>

                    <input name="title" placeholder="Title"
                           class="input" required>

                    <input name="publisher" placeholder="Publisher"
                           class="input">

                    <input name="edition" placeholder="Edition"
                           class="input">

                    <input name="publication_year" placeholder="Publication Year"
                           class="input">

                    <select name="language" class="input">
                        <option>English</option>
                        <option>Filipino</option>
                        <option>Spanish</option>
                    </select>
                </div>
            </div>

            {{-- AUTHORS --}}
            <div>
                <h3 class="font-semibold mb-4">Authors</h3>
                <select name="authors[]" multiple class="input">
                    {{-- @foreach($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach --}}
                </select>
                <p class="text-xs text-gray-500 mt-1">
                    Hold CTRL / CMD to select multiple
                </p>
            </div>

            {{-- CLASSIFICATION --}}
            <div>
                <h3 class="font-semibold mb-4">Classification</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <select name="category_id" class="input">
                        <option value="">Select Category</option>
                        {{-- @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach --}}
                    </select>

                    <input name="shelf_location" placeholder="Shelf / Rack Location"
                           class="input">
                </div>
            </div>

            {{-- DESCRIPTION --}}
            <div>
                <h3 class="font-semibold mb-4">Description</h3>
                <textarea name="description" rows="4"
                          class="input"
                          placeholder="Short description of the book..."></textarea>
            </div>

            {{-- COPIES --}}
            <div>
                <h3 class="font-semibold mb-4">Inventory</h3>
                <input name="copies" type="number" min="1"
                       class="input"
                       placeholder="Number of copies">
            </div>

            {{-- ACTIONS --}}
            <div class="flex justify-end gap-3 pt-4 border-t">
                <a href=""
                   class="px-4 py-2 border rounded-lg text-sm">
                    Cancel
                </a>

                <button type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Save Book
                </button>
            </div>

        </div>
    </form>
</div>

{{-- IMAGE PREVIEW SCRIPT --}}
<script>
function previewImage(event) {
    document.getElementById('preview').src =
        URL.createObjectURL(event.target.files[0]);
}
</script>
@endsection

