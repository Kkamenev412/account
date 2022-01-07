<x-app-layout>
    <x-slot name="header">
        <a href="{{route('accesses')}}"><button type="button" class="btn btn-warning"><i class="bi bi-plus-square"></i> Добавить проект</button></a>
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
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
            <form action="{{route('submit-update', $data->id)}}" method="post" >
                @csrf
                <div class="row">
                    <div class="col-6 py-3">
                        <div class="form-group">
                            <label for="title" class="form-label">Название проекта</label>
                            <input type="text" name="title"class="form-control" value="{{$data->title}}" placeholder="Введите имя" id="title" class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="host" class="form-label">Хостинг</label>
                            <textarea name="host" class="form-control" id="host" cols="20" rows="6">{{$data->host}}</textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="ftp" class="form-label">FTP</label>
                            <textarea name="ftp" id="ftp" cols="30" class="form-control" rows="6">{{$data->ftp}}</textarea>
                        </div>
                    </div>

                    <div class="col-6 py-3">

                        <div class="form-group">
                            <label for="information" class="form-label">Дополнительная информация</label>
                            <textarea name="information" class="form-control" id="information" cols="30" rows="12">{{$data->information}}</textarea>
                        </div>
                    </div>

                </div>

                <br>
                <button type="submit" class="btn btn-success">Обновить</button>

            </form>
    </div>
</x-app-layout>
