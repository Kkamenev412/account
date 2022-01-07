<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="container py-5">
        @if(session('success'))
            <div class="alert alert-success" style="margin-top: 10px">
                {{session('success')}}
            </div>
        @endif
        <form action="{{route('submit-addAccount',$idparent)}}" method="post">

            @csrf
            <div class="row">
                <div class="col-6 py-3">
                    <div class="form-group">
                        <label for="title" class="form-label">Название</label>
                        <input type="text" name="title" class="form-control"  placeholder="Введите название" id="title" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="login" class="form-label">Логин</label>
                        <input type="text" name="login" class="form-control"  placeholder="Введите логин" id="login" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="text" name="password" class="form-control"  placeholder="Введите пароль" id="pass" class="form-control">
                    </div>
                </div>

                <div class="col-6 py-3">

                    <div class="form-group">
                        <label for="info" class="form-label">Дополнительная информация</label>
                        <textarea name="info" class="form-control" id="info" cols="20" rows="8"></textarea>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-warning">Отправить</button>
                </div>

            </div>
        </form>
    </div>
</x-app-layout>
