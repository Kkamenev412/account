<x-app-layout>
    <x-slot name="header">
        <a href="{{route('submit-features',$titles->id)}}"><button type="button" class="btn btn-warning"><i class="bi bi-plus-square"></i> Добавить доступ</button></a>
        Проект: {{$titles->title}}
    </x-slot>
    <div class="container py-5">


                    @foreach($data as $el)
                <div class="shadow-sm p-3 mb-2 bg-white rounded">
                    <div class="row">
                        <div class="col-12"> <h5>{{ $el->title }}</h5></div>
                        <div class="col-12"><b>login: </b> {{ $el->login }}</div>
                        <div class="col-12"><b>Password: </b>{{ $el->password }}</div>
                        <div class="col-12"><b>Информация: </b> {{ $el->info }}</div>
                        <div class="col-12"><b>Дата изменения:- </b> {{$el->updated_at}} </div>
                        <div class="col-12">
                            <a href="{{route('accesses-update', $el->id)}}"><button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button> </a>
                            <a href="{{route('features-delite1', $el->id)}}"><button class="btn btn-danger"><i class="bi bi-cart-x-fill"></i></button> </a>
                        </div>
                    </div>
                </div>
                    @endforeach

    </div>

</x-app-layout>
