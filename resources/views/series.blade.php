<x-layout title="TV series">

    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <h1 class="text-center">TV series</h1>
            </div>
            @foreach ($serieTV as $serie)
                <x-card :data="$serie" route="series"/>
            @endforeach

        </div>
    </div>

</x-layout>
