@extends('layouts.app')
@section('title', 'Contact')
@section('content')

    <section id="main-home">
        <div class="main-home">
            <div class="main-img-area app">
                <div class="container">
                    <h1>Hubungi Kami</h1>
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
                            {{Form::open(['url'=>'/contact', 'method' => 'POST'])}}
                            <div class="small-border"></div>
                            <small></small>
                            <h1>Formulir Kontak</h1>
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
                                <input type="text"  name="nama" class="form-control" value="{{ old('name') }}" required/>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Email:</label>
                                <input type="email"  name="email" class="form-control"  value="{{ old('email') }}" required/>
                            </div>


                            <div class="form-group">
                                <label class="control-label">Judul:</label>
                                <input type="text"  name="judul" class="form-control"  value="{{ old('subject') }}" required/>
                            </div>
<!--description-->
                            <div class="form-group">
                                <label class="control-label">Isi Pesan:</label>
                                <textarea name="pesan" class="form-control">{{ old('description') }}</textarea>

                            </div>
                            <div class="form-group">{!! app('captcha')->display(); !!}</div>
                           
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
            $('.navbar-default .navbar-nav li').removeClass('active');
            $('.navbar-default .navbar-nav li.contact').addClass('active');
        });
    </script>
@stop
