@extends('layouts.app')
@section('title', 'Home')

@section('content')

    <section>
        <p></p>
    </section>
 
    <section id="login-role">
            <div class="login-role">
                <div class="container">
                <div class="text-area">
                     <h1><img src="{{asset('uploads')}}/{{$settings->footer_logo}}" class="text-center" alt="helpdesk"><p class="media-body" style="color:white;">Pemprov Banten
                                </p></h1> 
                    <h1><b>Selamat Datang</b><br>
                    <p class="text-center">Helpdesk adalah aplikasi Bantuan Teknis yang diperuntukan bagi OPD Pemprov Banten <br>Untuk menunjang kelancaran dalam operasional yang berhubungan dengan Dinas Komunikasi, Informasi, Statistik Dan Persandian</p></h1>
                </div>
            </div>
        </div>
    </section>
    <section id="follow-ticket">
        <div class="follow-ticket">
            <div class="follow-text">
                <div class="container">
                    <a href="{{url('/new/ticket')}}" class="btn btn-default">Kirim Tiket Bantuan</a>
                </div>
            </div>
        </div>
    </section> 


    <div class="content faq">
        <div class="container">
            <h1><b>FAQ</b> | Frequently Asked Questions</h1>
            <ul class="nav nav-tabs">
                @foreach($departmetns as $departmetn)
                    <li>
                        <a href="#{{str_replace(' ', '-', strtolower($departmetn)) }}" data-toggle="tab">
                            {{ucwords($departmetn) }} <i class="fa fa-caret-up"></i>
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content">
                @foreach($departmetns as $departmetn)
                    <div id="{{str_replace(' ', '-', strtolower($departmetn)) }}" class="tab-pane ">
                        @foreach($faqs as $faq)
                            @if(str_replace(' ', '-', strtolower($faq->departments->name)) == str_replace(' ', '-', strtolower($departmetn)))
                                <div class="tab-text">
                                    <a data-toggle="collapse" class="" href="#{{$faq->id}}">
                                        <i class="fa fa-plus"></i> {{$faq->subject}}
                                    </a>
                                    <div id="{{$faq->id}}" class="panel-collapse collapse in">
                                        <p>
                                            {{$faq->description}}
                                        </p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop