<x-app-layout>
<header id="header" class="header py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32">
<div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
    <!-- message -->
    <div class="w-full px-5 flex flex-col justify-between">
        <div class="flex flex-col mt-5">
        @foreach($talks as $talk)
        @if($talk->user->is(auth()->user()))
          <div class="flex justify-end mb-4">
            <div class="mr-2 py-3 px-4 bg-blue-400 rounded-bl-3xl rounded-tl-3xl rounded-tr-xl text-white">
                <small>
                    <small class="ml-2 text-sm text-gray-600">{{ $talk->created_at->format('j M Y, g:i a') }}</small>
                      @unless ($talk->created_at->eq($talk->updated_at))
                        <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                      @endunless
                    </small><br>
              {{$talk->message}}
            </div>
            <x-dropdown>
                <x-slot name="trigger">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                        </svg>
                    </button>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link :href="route('talks.edit', $talk)">
                        {{ __('Edit') }}
                    </x-dropdown-link>
                    <form method="POST" action="{{ route('talks.destroy', $talk) }}">
                        @csrf
                        @method('delete')
                        <x-dropdown-link :href="route('talks.destroy', $talk)" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Delete') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
          </div>
        @else
        <div class="flex justify-start mb-4">
            <div class="ml-2 py-3 px-4 bg-gray-400 rounded-br-3xl rounded-tr-3xl rounded-tl-xl text-white">
            <small><small><span class="text-gray-800">{{$talk->user->name}}</span>
            <small class="ml-2 text-sm text-gray-600">{{ $talk->created_at->format('j M Y, g:i a') }}</small>
              @unless ($talk->created_at->eq($talk->updated_at))
                <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
              @endunless
            </small></small><br>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
            </svg>
            {{$talk->message}}
            </div>
        </div>
        @endif
        @endforeach
        </div>
        <form method="POST" action="{{ route('talks.store') }}">
            @csrf
            <textarea
                name="message"
                placeholder="{{ __('What\'s on your mind?') }}"
                class="w-full py-5 px-3 rounded-xl"
            >{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Talk') }}</x-primary-button>
        </form>
    </div>
</div> <!-- end of container -->
</header>
</x-app-layout>
