<x-app-layout>
    <header id="header" class="header py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
            <div class="mb-16 lg:mt-32 xl:mt-40 xl:mr-12">
                <h1 class="h1-large mb-5">Team talk about web applications</h1>
                <p class="p-large mb-8">Hello everyone, I am happy to start this and make it run, It is a simple Laravel project that I have develop for interactions. Share either simple or Huge ideas to add to it. HAPPY CODDING!</p>
                <a class="btn-solid-lg" href="{{route('talks.index')}}"></i>Share Something</a>
            </div>
            <div class="xl:text-right">
                <img class="inline" src="images/backg.jpg" alt="alternative" />
            </div>
        </div> <!-- end of container -->
    </header>
</x-app-layout>
