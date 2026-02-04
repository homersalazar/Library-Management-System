@props(['name' => ''])

<label class="inline-flex items-center cursor-pointer">
    <input name="{{ $name }}" type="checkbox" value="" class="sr-only peer">
    <div class="relative w-11 h-6 bg-white peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-100 after:border after:rounded-full after:h-5 after:w-3.5 after:transition-all dark:border-gray-400 peer-checked:bg-green-600 dark:peer-checked:bg-green-600"></div>
</label>
