<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Explore Bitter') }}
        </h2>
    </x-slot>

    <x-submit-section>
    </x-submit-section>

    @if($posts->isEmpty())
        <x-no-posts-section>
        </x-no-posts-section>
    @else
        @foreach ($posts as $post)
            <x-post-section :text="$post->text" :username="$post->user->name" :images="$post->images">
            </x-post-section>
        @endforeach
    @endif
</x-app-layout>
