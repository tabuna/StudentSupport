@extends('layouts.accounts')

@section('accounts')


    <div class="wrapper-md">


        <form class="form-horizontal" action="{{route('account.update')}}" method="POST" enctype="multipart/form-data">


            <div class="col-md-12 m-b">
            <div class="fileinput fileinput-exists thumb-lg pull-left m-r-md" data-provides="fileinput">

                <div class="btn-file">
                    <div class="fileinput-preview  thumb-lg pull-left m-r-md">
                        <img src="{{$user->avatar or '/dist/img/a0.jpg' }}" alt="..."
                             class="img-circle">
                    </div>

                    <input type="file" name="avatar">
                </div>

            </div>


            <div class="clear m-b">
                <div class="m-b m-t-sm">
                    <span class="h3 text-black">{{$user->name}}</span>
                    <small class="m-l block">{{$user->nickname}}</small>
                </div>
            </div>
            </div>


            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif


            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Имя</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{$user->name}}" placeholder="Name">
                </div>
            </div>

            <div class="line line-dashed b-b line-lg"></div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Электронная почта</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" value="{{$user->email}}" placeholder="Email">
                </div>
            </div>

            <div class="line line-dashed b-b line-lg"></div>

            <div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Псевдоним</label>
                <div class="col-sm-10">
                    <input type="text" name="nickname" class="form-control" value="{{$user->nickname}}"
                           placeholder="NickName">
                </div>
            </div>

            <div class="line line-dashed b-b line-lg"></div>

            <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Веб-сайи</label>
                <div class="col-sm-10">
                    <input type="url" name="website" class="form-control" value="{{$user->website}}"
                           placeholder="Web Site">
                </div>
            </div>

            <div class="line line-dashed b-b line-lg"></div>


            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Телефон</label>
                <div class="col-sm-10">
                    <input type="tel" name="phone" class="form-control" value="{{$user->phone}}" placeholder="Phone">
                </div>
            </div>

            <div class="line line-dashed b-b line-lg"></div>

            <div class="form-group{{ $errors->has('about') ? ' has-error' : '' }}">
                <label class="col-sm-2 control-label">Обомне</label>
                <div class="col-sm-10">
                    <textarea class="form-control no-resize" rows="6" name="about"
                              placeholder="About">{{$user->about}}</textarea>
                </div>
            </div>

            <div class="line line-dashed b-b line-lg"></div>

            <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                <div class="col-sm-offset-2 col-sm-10">
                    <label class="i-checks i-checks-sm">
                        <input type="radio" name="sex" value="1" @if($user->sex) checked @endif>
                        <i></i>
                        Мужчина
                    </label>

                    <label class="i-checks i-checks-sm">
                        <input type="radio" name="sex" value="0" @if(!$user->sex) checked @endif>
                        <i></i>
                        Женщина
                    </label>

                </div>
            </div>

            <div class="line line-dashed b-b line-lg"></div>

            <div class="form-group{{ $errors->has('notification') ? ' has-error' : '' }}">
                <div class="col-sm-offset-2 col-sm-10">
                    <label class="i-checks i-checks-sm">
                        <input type="radio" name="notification" value="1" @if($user->notification) checked @endif>
                        <i></i>
                        Подписаться на уведомления
                    </label>

                    <label class="i-checks i-checks-sm">
                        <input type="radio" name="notification" value="0" @if(!$user->notification) checked @endif>
                        <i></i>
                        Не присылать уведомления
                    </label>

                </div>
            </div>


            {!! csrf_field() !!}
            <input name="_method" value="PUT" type="hidden">
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 text-right">
                    <button type="submit" class="btn btn-info">Сохранить</button>
                </div>
            </div>
        </form>


    </div>








@endsection
