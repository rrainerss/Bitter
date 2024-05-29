<div class="pt-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ $username }}
                <br>
                {{ $text }}
                <br>
                @if($images->isNotEmpty())
                    @foreach ($images as $image)
                        {{ $image }}
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>


{{-- @else
@foreach ($posts as $post)
    <x-post-section :text="$post->text" :username="$post->user->name" :images="$post->images">
    </x-post-section>
@endforeach
@endif --}}