@extends('layouts.app')
@section('title', 'About')

@section('content')
    <section id="main-home">
        <div class="main-home">
            <div class="main-img-area app">
                <div class="container">
                    <h1>Tentang HelpDesk</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <div class="about-page">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="{{asset('images/about3.jpg')}}" class="img-responsive" alt="about us"/>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="about-text">
                            <p align="justify">
                                Aplikasi Ini Dikelola oleh Dinas Komunikasi, Informasi, Statistik dan Persandian Pemerintah Provinsi Banten Untuk menunjang kelancaran dalam operasional yang berhubungan dengan Dinas Komunikasi, Informasi, Statistik Dan Persandian. 
                                <br><br>
                                    Seperti Permasalahan Bandwidth, Website, Server dan Aplikasi.
                                    <br><hr>
                                    Dengan hadirnya aplikasi Helpdesk diharapkan dapat mempermudah dan mempercepat penyelesaian dan solusi dari permasalahan yang disampaikan.
                                
                            </p>
                        </div>
                    </div>
                </div>

                

                
            </div>

            <!--<div class="about-text">
                <h2>MISI</h2>
                <p>
                   
                </p>
            </div>-->
        </div>
    </section>
@stop
@section('script')
    <script>
        $(document).ready(function () {
            $('.navbar-default .navbar-nav li').removeClass('active');
            $('.navbar-default .navbar-nav li.about').addClass('active');
        });
    </script>
@stop