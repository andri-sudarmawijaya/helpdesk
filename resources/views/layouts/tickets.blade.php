<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$settings->description}}">
    <meta name="keywords" content="{{$settings->keywords}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{asset('plugin/jquery/jquery.min.js')}}"></script>

    <title>HelpDesk Pemprov Banten | @yield('title')</title>

    <link rel="stylesheet" href="{{asset('plugin/bootstrap-3.3.7/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugin/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugin/sweetalert/dist/sweetalert.css')}}">
    <link rel="stylesheet" href="{{asset('plugin/datatable/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugin/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon"/>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand navbar-link" href="{{url('/')}}">
                <img src="{{asset('uploads')}}/{{$settings->logo}}" alt="LOGO"></a>
            <div class="visible-sm visible-xs pull-right" id="menu-btn">
                <span class="fa fa-ellipsis-v"></span>
            </div>
            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('/about')}}">Tentang Aplikasi</a></li>
                <li><a href="{{url('/')}}">Kontak</a></li>
                @if(Auth::user())
                    <li class="ticket"><a href="{{url('tickets')}}">Dashboard</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle clearfix" data-toggle="dropdown">
                            Notifikasi <span class="badge">{{count(Auth::user()->unreadNotifications)}}</span>
                        </a>
                        <ul class="dropdown-menu notification_dropdown">
                            @foreach (Auth::user()->notifications as $notification)
                                @if($notification->type == 'App\Notifications\TicketReply')
                                    <li>
                                        <a href="{{url('ticket')}}/{{$notification->data['ticket_id']}}/{{str_replace(' ', '-',   strtolower($notification->data['ticket_title']))}}">
                                            <strong class="badge">{{$notification->data['reply_user']}}</strong>
                                            <small>replied to a ticket</small>
                                            <br><span class="ticket_small_title">{{$notification->data['ticket_title']}}</span>
                                        </a>
                                    </li>
                                @endif

                                @if($notification->type == 'App\Notifications\TicketStatus')
                                    <li>
                                        <a href="{{url('ticket')}}/{{$notification->data['ticket_id']}}/{{str_replace(' ', '-',   strtolower($notification->data['ticket_title']))}}">
                                            <small>Status Tiket Berubah ke</small>
                                            <strong class="badge">{{$notification->data['status']}}</strong>
                                            <br>
                                            <span class="ticket_small_title"> {{$notification->data['ticket_title']}}</span>
                                        </a>
                                    </li>
                                @endif

                                @if($notification->type == 'App\Notifications\NewTicket')
                                    <li>
                                        <a href="{{url('ticket')}}/{{$notification->data['ticket_id']}}/{{str_replace(' ', '-',   strtolower($notification->data['ticket_title']))}}">
                                            <small>Tiket Baru dibuat Oleh</small>
                                            <strong class="badge">{{$notification->data['user_name']}}</strong>
                                            <br>
                                            <span class="ticket_small_title"> {{$notification->data['ticket_title']}}</span>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown profile">
                        <a href="#" class="dropdown-toggle clearfix" data-toggle="dropdown">
                            @if(Auth::user()->avatar == null)
                                <span class="avatar"><img src="{{asset('uploads/avatar.png')}}" alt="avatar"></span>
                            @else
                                <span class="avatar"><img src="{{asset('uploads')}}/{{Auth::user()->avatar}}" alt="avatar"></span>

                            @endif
                            <span class="user_name">{{Auth::user()->name}}</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('profile/settings')}}"><i class="fa fa-gear"></i> Profil</a></li>
                            <li><a href="{{url('change/password')}}"><i class="fa fa-lock"></i> Ganti Kata Kunci</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="fa fa-lock"></i> Keluar
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>

                @endif

                @if(Auth::guest())
                    <li><a href="{{url('login')}}">Login</a></li>
                    <li><a href="{{url('register')}}" >Register</a></li>
                @endif
                <li><a href="{{url('new/ticket')}}" class="new_ticket">Buat Tiket</a></li>
            </ul>
        </div>
    </div>
</nav>

<section id="main-home">
    <div class="main-home">
        <div class="main-img-area small-title">
            <div class="container">
                <h1>@yield('title')</h1>
            </div>
        </div>
    </div>
</section>

<div class="many-button-box text-center" id="ticket-setting">

    <div class="button-box dropdown">
        @if(Auth::user()->hasRole('admin'))
            <a  class="btn btn-default" href="{{asset('/admin/tickets')}}">
                <span class="button-text"><i class="fa fa-comment-o"></i> Tickets</span>
            </a>
        @else
            <a  class="btn btn-default" href="{{asset('/tickets')}}">
                <span class="button-text"> <i class="fa fa-comment-o"></i> Tickets</span>
            </a>
        @endif
    </div>

    <div class="button-box dropdown">
        <a  class="btn btn-default" href="{{asset('/admin/admins')}}">
           <span class="button-text"><i class="fa fa-user-circle-o"></i> Admin</span>
        </a>
    </div>

    <div class="button-box dropdown">
        <a  class="btn btn-default" href="{{asset('/admin/staff')}}">
             <span class="button-text"><i class="fa fa-users"></i> Staff</span>
        </a>
    </div>

    <div class="button-box dropdown">
        <a  class="btn btn-default" href="{{asset('/admin/clients')}}">
            <span class="button-text"><i class="fa fa-users"></i> Pengguna</span>
        </a>

    </div>

    <div class="button-box dropdown">
        <a class="btn btn-default" href="{{url('admin/faq')}}">
            <span class="button-text"><i class="fa fa-question-circle-o"></i> FAQ</span>
        </a>
    </div>

    <div class="button-box dropdown">

        <a href="{{url('admin/departments')}}" type="button" class="btn btn-default">
            <span class="button-text"><i class="fa fa-sitemap"></i> Department</span>
        </a>
    </div>

    <div class="button-box dropdown">
        <a href="{{url('/admin/settings')}}" type="button" class="btn btn-default">
            <span class="button-text"><i class="fa fa-gear"></i> Pengaturan</span>
        </a>

    </div>


</div>


@yield('content')

<section id="footer">
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-content">
                        <div class="col-md-12">
                            <div class="section-one">
                                <img src="{{asset('uploads')}}/{{$settings->footer_logo}}" class="img-responsive" alt="Nothing">
                           
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="registered">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="one text-center">
                                <p>© Copyrights 2017 <a href="https://diskominfo.bantenprov.go.id/" target="_blank">DISKOMINFOSP PROV BANTEN</a> All rights reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>

<!--jquery-->
<script src="{{asset('plugin/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugin/bootstrap-3.3.7/js/bootstrap.min.js')}}"></script>
<script src="{{asset('plugin/sweetalert/dist/sweetalert.min.js')}}"></script>
<script src="{{asset('plugin/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugin/slick/slick.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

<script>
    $('.notification_dropdown li a').on('click', function () {
        $.ajax({
            type: 'GET',
            url: '{{url('/markAsRead')}}'
        })
    });
</script>

@yield('script')

</body>
</html>
