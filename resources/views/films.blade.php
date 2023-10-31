<x-layout title="Movies">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 my-5">
                <h1 class="text-center">Movies</h1>
            </div>

            @foreach ($films as $movie)
                <x-card :data="$movie" route="movies"/>
            @endforeach
        </div>
    </div>

</x-layout>

    

