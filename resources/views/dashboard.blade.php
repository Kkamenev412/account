<x-app-layout>
    <x-slot name="header">
        <a href="{{route('accesses')}}"><button type="button" class="btn btn-warning"><i class="bi bi-plus-square"></i> Добавить проект</button></a>
    </x-slot>
    <div class="container py-5">
        @if(session('success'))
            <div class="alert alert-success" style="margin-top: 10px">
                {{session('success')}}
            </div>
        @endif

        @foreach($data as $el)
            <div class="bg-light p-3 rounded mt-3">
                <h3>{{ $el->title }}</h3>

                <div> <smal>{{$el->created_at}}</smal></div>
                <hr>

                <a href="{{route('accesses-features', $el->id)}}"><button class="btn btn-warning"><i class="bi bi-folder2-open"></i></button> </a>
                <a href="{{route('accesses-update', $el->id)}}"><button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button> </a>
                <a href="{{route('accesses-delite', $el->id)}}"><button class="btn btn-danger"><i class="bi bi-cart-x-fill"></i></button> </a>

            </div>

        @endforeach
    </div>
</x-app-layout>
