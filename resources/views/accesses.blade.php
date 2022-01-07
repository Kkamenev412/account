<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Добавить доступ') }}
        </h2>
    </x-slot>

<div class="container py-5">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('accesses-add')}}" method="post">
        @csrf
        <div class="row">
        <div class="col-6 py-3">
            <div class="form-group">
                <label for="title" class="form-label">Название проекта</label>
                <input type="text" name="title"class="form-control"  placeholder="Введите имя" id="title" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="host" class="form-label">Хостинг</label>
                <textarea name="host" class="form-control" id="host" cols="20" rows="6"></textarea>
            </div>

        </div>
            

        <div class="col-12">
            <button type="submit" class="btn btn-warning">Отправить</button>
        </div>

        </div>
    </form>
</div>
    <hr>

</x-app-layout>
