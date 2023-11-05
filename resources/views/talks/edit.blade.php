<x-app-layout>
<header id="header" class="header py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32">
    <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
        <form method="POST" action="{{ route('talks.update', $talk) }}">
            @csrf
            @method('patch')
            <textarea
                name="message"
                class="w-full py-5 px-3 rounded-xl"
            >{{ old('message', $talk->message) }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('talks.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div> <!-- end of container -->
</header>
</x-app-layout> 