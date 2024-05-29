<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update theme') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Update the theme of :app_name.', ['app_name' => config('app.name', 'Bitter')]) }}
        </p>
    </header>

    <form class="" id="send-verification" method="post" action="{{ route('profile.updateTheme') }}">
        @csrf
        @method('PUT')
        <x-primary-button>
            @if(auth()->check() && auth()->user()->theme == 'light')
                Set to Dark
            @else
                Set to Light
            @endif
        </x-primary-button>
    </form>
</section>