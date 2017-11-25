@extends('layouts.app')
@section('title', 'Profile')
@section('content')

    <section id="main-home">
        <div class="main-home">
            <div class="main-img-area app">
                <div class="container">
                    <h1>Profile</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="category-one">
        <div class="category-one">
            <div class="container contact">
                <div class="submit-area">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            {{Form::open(['url'=>'/profile/settings', 'files' => true])}}
                            <div class="small-border"></div>
                            <small></small>
                            <h1>Pengaturan Profil</h1>
                            <hr>
                            @if(count($errors->all()))
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissable">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Peringatan!</strong> {{ $error }}
                                    </div>
                                @endforeach
                            @endif

                            @if(Session::has('message'))
                                <div class="alert alert-success alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Selamat!</strong> {{ Session::get('message') }}
                                </div>
                            @endif

                            <div class="form-group">
                                <label class="control-label">Nama:</label>
                                <input type="text"  name="name" class="form-control" value="{{$user->name}}" required/>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Username:</label>
                                <input type="text"  name="username" class="form-control" value="{{$user->username}}" required readonly/>
                            </div>


                            <div class="form-group">
                                <label class="control-label">Email:</label>
                                <input type="email"  name="email" class="form-control" value="{{$user->email}}" required/>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Avatar:</label>
                                <div class="custom-file-upload">
                                    <input type="file" id="file" name="file" />
                                </div>
                            </div>

                            <div class="submit-button">
                                <button type="submit" class="btn btn-default">SUBMIT</button>
                            </div>

                            {{Form::close()}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('script')
    <script>
        $(document).ready(function () {
            $('.file-upload-input').attr('value', '{{$user->avatar}}');
        });
    </script>
@stop
