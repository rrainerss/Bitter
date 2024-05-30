<div class="pt-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __("You're logged in!") }}
            </div>
        </div>
    </div>
</div>

<form method="post" action="{{ route('home.storePost') }}" class="mt-6 mb-6 space-y-6">
    @csrf
    @method('post')

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden p-6 shadow-sm sm:rounded-lg w-full flex flex-wrap">
            <div class="flex flex-col sm:flex-row w-full">
                <x-input-label for="text" value="Share your thoughts here.." class="w-max pb-2 sm:pb-0 sm:pr-4"/>
            </div>
            <div class="flex flex-col sm:flex-row w-full">
                <x-text-input id="text" name="text" type="text" class="mt-1 block w-full sm:flex-grow" required autofocus/>
                <x-primary-button class="w-24 h-10 justify-center mt-1 ml-3">
                    Submit
                </x-primary-button>
            </div>
            <x-input-error class="mt-2" :messages="$errors->get('text')" />
        </div>
    </div>
</form>