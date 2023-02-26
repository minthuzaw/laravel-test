<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('QR Generator') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-white-300 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex gap-2">
                    <input type="text"
                           id="text" placeholder="Enter text..."
                           class="px-3 py-2 bg-white border shadow-sm border-slate-300
                           placeholder-slate-400 focus:outline-none text-black
                           focus:border-sky-500 focus:ring-sky-500 block w-full
                           rounded-md sm:text-sm focus:ring-1"
                    />
                    <button type="button"
                            class="bg-sky-400 hover:bg-sky-500 rounded p-1"
                            onclick="generateQR()">
                        Generate
                    </button>

                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100 content-center">
                    <div id="qr-image">
                        <span class="error"></span><br>
                        <img src="" id="img" alt="qr">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
