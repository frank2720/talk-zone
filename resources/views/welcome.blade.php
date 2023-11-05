<x-app-layout>
    <header id="header" class="header py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
            <div class="mb-16 lg:mt-32 xl:mt-40 xl:mr-12">
                <h1 class="h1-large mb-5">Team talk about web applications</h1>
                <p class="p-large mb-8">Start getting things done together with your team based on the things you discuss with your partner.</p>
                <a class="btn-solid-lg" href="{{route('talks.index')}}"></i>Share Something</a>
            </div>
            <div class="xl:text-right">
                <img class="inline" src="images/backg.jpg" alt="alternative" />
            </div>
        </div> <!-- end of container -->
    </header>
        <!-- end of features -->
</x-app-layout>
