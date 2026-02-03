@extends('layouts.app')

@section('content')
    <div class="flex flex-col gap-4">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-5">
            <h1 class="font-semibold text-lg text-green-900">Roles</h1>

            <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto md:justify-end">
                <x-search
                    placeholder="Search Role"
                    class="w-full sm:w-64"
                />

                <x-button type="button"
                    data-modal-target="createModal"
                    data-modal-toggle="createModal"
                    variant="green"
                    class="w-full sm:w-auto"
                    icon="fa fa-plus"
                >
                    Add Roles
                </x-button>
            </div>
        </div>

        <x-table :headers="['Name', 'Action']">
            <tr class="border-b text-gray-700">
                <td class="px-3 py-2">1</td>
                <td class="px-3 py-2">The Great Gatsby</td>
            </tr>
            <tr class="border-b text-gray-700">
                <td class="px-3 py-2">2</td>
                <td class="px-3 py-2">1984</td>
            </tr>
        </x-table>

        {{-- Create Role Modal --}}
        <x-modal id="createModal" title="Create Role" :buttons="[
            ['label'=>'Create','type'=>'submit','color'=>'bg-green-600','form'=>'createForm']
        ]">
            <form id="createForm">
                <!-- form fields -->
            </form>
        </x-modal>
    </div>
@endsection
