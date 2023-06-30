<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if(!isset($response))
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"
                     style="max-width: 38rem;">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form action="{{ route('check-payment') }}" method="POST">
                            @csrf
                            <label for="payload" class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">
                                Payload
                            </label>
                            <div class="flex justify-between mt-4">
                                <input type="text" id="payload" name="payload"
                                       class="mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="Something"
                                       autocomplete="off"
                                >

                                <button type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Submit
                                </button>
                            </div>
                            @error('payload')
                            <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(isset($response))
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="grid gap-1 mb-6 md:grid-cols-2">
                            @foreach($response as $key => $value)
                                <div>
                                    <label class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">
                                        <span class="text-blue-500">{{$key}}</span>
                                        <span class="text-green-300"> => </span>
                                        <span class="text-red-400">{{$value}}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

</x-app-layout>
