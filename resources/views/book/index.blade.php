@extends('layouts.app')

@section('content')
    <div class="flex flex-col gap-4">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="flex flex-col gap-1">
                <h1 class="font-semibold text-lg text-green-900">Books</h1>
            </div>
        </div>

        {{-- TOP BAR --}}
        <div class="flex items-center justify-between gap-4 flex-nowrap">
            <div class="flex gap-6 text-sm font-medium whitespace-nowrap">
                <span class="border-b-2 border-green-600 pb-2">
                    All books <span class="ml-1 text-green-600"></span>
                </span>
                <span class="text-gray-500">Lent</span>
                <span class="text-gray-500">Returned</span>
                <span class="text-gray-500">Overdue</span>
                <span class="text-gray-500">Requests</span>
            </div>

            <div class="flex items-center gap-3 whitespace-nowrap">
                <span class="text-sm text-gray-500">
                    <i class="fa-regular fa-calendar"></i>
                    {{ date('l, F j, Y') }}
                </span>
                <x-button
                    icon="fa-solid fa-plus"
                    class="max-w-32"
                    variant="green"
                    data-modal-target="createModal"
                    data-modal-toggle="createModal"
                >
                    Add Book
                </x-button>
            </div>
        </div>

        {{-- SEARCH + FILTERS --}}
        <div class="flex flex-wrap items-center gap-4">
            <x-search
                placeholder="Search by title, author, ISBN, category..."
                class="w-full sm:w-80 md:w-96"
            />

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
        <x-table :headers="['', 'Thumbnail', 'Title & Author', 'Publisher', 'Book ID', 'ISBN', 'Status', 'Requests', 'Action']">
            <tr class="border-b text-gray-700">
                <td class="px-3 py-2">1</td>
                <td class="px-3 py-2">The Great Gatsby</td>
                <td class="px-3 py-2">F. Scott Fitzgerald</td>
                <td class="px-3 py-2">Borrowed</td>
                <td class="px-3 py-2">Borrowed</td>
                <td class="px-3 py-2">Borrowed</td>
                <td class="px-3 py-2">Borrowed</td>
                <td class="px-3 py-2">Borrowed</td>
                <td class="px-3 py-2">Borrowed</td>
            </tr>
            <tr class="border-b text-gray-700">
                <td class="px-3 py-2">2</td>
                <td class="px-3 py-2">1984</td>
                <td class="px-3 py-2">George Orwell</td>
                <td class="px-3 py-2">Returned</td>
                <td class="px-3 py-2">Returned</td>
                <td class="px-3 py-2">Returned</td>
                <td class="px-3 py-2">Returned</td>
                <td class="px-3 py-2">Returned</td>
                <td class="px-3 py-2">Returned</td>
            </tr>
        </x-table>

        <x-modal id="createModal" title="Add New Book" size="lg" :buttons="[
            ['label'=>'Create','type'=>'submit', 'color'=>'bg-green-600', 'form'=>'createForm']
        ]">
            <form id="createForm" enctype="multipart/form-data" method="POST" class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                @csrf

                {{-- LEFT COLUMN (COVER) --}}
                <div>
                    <h3 class="font-semibold mb-4">Book Cover</h3>

                    <div class="flex flex-col items-center gap-4">
                        <img id="preview"
                            src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/contemporary-fiction-night-time-book-cover-design-template-1be47835c3058eb42211574e0c4ed8bf_screen.jpg?ts=1734004864"
                            class="w-40 h-60 object-cover rounded-lg border">

                        <input type="file" name="cover_image"
                            accept="image/*"
                            onchange="previewImage(event)"
                            class="block w-full text-sm text-gray-500
                                    file:mr-4 file:py-2 file:px-4
                                    file:rounded-lg file:border-0
                                    file:bg-green-50 file:text-green-700
                                    hover:file:bg-green-100">
                    </div>
                </div>

                {{-- RIGHT COLUMN (DETAILS) --}}
                <div class="lg:col-span-2 rounded-xl p-6 space-y-6">

                    {{-- BASIC INFO --}}
                    <div>
                        <h3 class="font-semibold mb-4">Basic Information</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <x-input placeholder="ISBN" required/>

                            <x-input placeholder="Title" required/>

                            <x-input placeholder="Publisher" required/>

                            <x-input placeholder="Edition" required/>

                            <x-input placeholder="Publication Year" required/>

                            <x-select
                                name="language"
                                label="Select language"
                                required
                            >
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Spanish">Spanish</option>
                            </x-select>

                        </div>
                    </div>

                    {{-- AUTHORS --}}
                    <div>
                        <h3 class="font-semibold mb-4">Authors</h3>
                        <x-select
                            name="authors[]"
                            label="Select Authors"
                            required
                            multiple
                        >
                            <option value="English">English</option>
                        </x-select>

                        <p class="text-xs text-gray-500 mt-1">
                            Hold CTRL / CMD to select multiple
                        </p>
                    </div>

                    {{-- CLASSIFICATION --}}
                    <div>
                        <h3 class="font-semibold mb-4">Classification</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <x-select
                                name="language"
                                label="Select language"
                                required
                            >
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Spanish">Spanish</option>
                            </x-select>

                            <x-input placeholder="Shelf / Rack Location" required/>
                        </div>
                    </div>

                    {{-- DESCRIPTION --}}
                    <div>
                        <h3 class="font-semibold mb-4">Description</h3>
                        <x-textarea
                            name="description"
                            rows="4"
                            placeholder="Short description of the book..."
                        ></x-textarea>
                    </div>

                    {{-- COPIES --}}
                    <div>
                        <h3 class="font-semibold mb-4">Inventory</h3>
                        <x-input placeholder="Number of copies" class="max-w-1/4" type="number" min="1" name="copies"/>
                    </div>

                </div>
            </form>
        </x-modal>
    </div>
@endsection
