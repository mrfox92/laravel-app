@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card user-friends-box mb-30 my-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Agenda de Contactos</h3>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-friends-box d-flex align-items-center">
                        <img src="{{ asset('/img/user1.jpg') }}" alt="image">

                        <div class="info ml-3">
                            <h5><a href="#" class="d-inline-block">John Smith</a></h5>
                            <span><a href="#" class="d-inline-block">2 mutual friends</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-friends-box d-flex align-items-center">
                        <img src="{{ asset('/img/user2.jpg') }}" alt="image">

                        <div class="info ml-3">
                            <h5><a href="#" class="d-inline-block">Sarah Taylor</a></h5>
                            <span><a href="#" class="d-inline-block">20 mutual friends</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-friends-box d-flex align-items-center">
                        <img src="{{ asset('/img/user3.jpg') }}" alt="image">

                        <div class="info ml-3">
                            <h5><a href="#" class="d-inline-block">James Anderson</a></h5>
                            <span><a href="#" class="d-inline-block">10 mutual friends</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-friends-box d-flex align-items-center">
                        <img src="{{ asset('/img/user4.jpg') }}" alt="image">

                        <div class="info ml-3">
                            <h5><a href="#" class="d-inline-block">David Warner</a></h5>
                            <span><a href="#" class="d-inline-block">2 mutual friends</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-friends-box d-flex align-items-center">
                        <img src="{{ asset('/img/user5.jpg') }}" alt="image">

                        <div class="info ml-3">
                            <h5><a href="#" class="d-inline-block">Eva Smith</a></h5>
                            <span><a href="#" class="d-inline-block">20 mutual friends</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-friends-box d-flex align-items-center">
                        <img src="{{ asset('/img/user6.jpg') }}" alt="image">

                        <div class="info ml-3">
                            <h5><a href="#" class="d-inline-block">Sam Curran</a></h5>
                            <span><a href="#" class="d-inline-block">10 mutual friends</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-friends-box d-flex align-items-center">
                        <img src="{{ asset('/img/user7.jpg') }}" alt="image">

                        <div class="info ml-3">
                            <h5><a href="#" class="d-inline-block">Mark Wood</a></h5>
                            <span><a href="#" class="d-inline-block">2 mutual friends</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-friends-box d-flex align-items-center">
                        <img src="{{ asset('/img/user8.jpg') }}" alt="image">

                        <div class="info ml-3">
                            <h5><a href="#" class="d-inline-block">Lucy Lanning</a></h5>
                            <span><a href="#" class="d-inline-block">20 mutual friends</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-friends-box d-flex align-items-center">
                        <img src="{{ asset('/img/user9.jpg') }}" alt="image">

                        <div class="info ml-3">
                            <h5><a href="#" class="d-inline-block">Josh Butler</a></h5>
                            <span><a href="#" class="d-inline-block">10 mutual friends</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-friends-box d-flex align-items-center">
                        <img src="{{ asset('/img/user1.jpg') }}" alt="image">

                        <div class="info ml-3">
                            <h5><a href="#" class="d-inline-block">John Smith</a></h5>
                            <span><a href="#" class="d-inline-block">2 mutual friends</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-friends-box d-flex align-items-center">
                        <img src="{{ asset('/img/user2.jpg') }}" alt="image">

                        <div class="info ml-3">
                            <h5><a href="#" class="d-inline-block">Sarah Taylor</a></h5>
                            <span><a href="#" class="d-inline-block">20 mutual friends</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-friends-box d-flex align-items-center">
                        <img src="{{ asset('/img/user3.jpg') }}" alt="image">

                        <div class="info ml-3">
                            <h5><a href="#" class="d-inline-block">James Anderson</a></h5>
                            <span><a href="#" class="d-inline-block">10 mutual friends</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-friends-box d-flex align-items-center">
                        <img src="{{ asset('/img/user4.jpg') }}" alt="image">

                        <div class="info ml-3">
                            <h5><a href="#" class="d-inline-block">David Warner</a></h5>
                            <span><a href="#" class="d-inline-block">2 mutual friends</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-friends-box d-flex align-items-center">
                        <img src="{{ asset('/img/user5.jpg') }}" alt="image">

                        <div class="info ml-3">
                            <h5><a href="#" class="d-inline-block">Eva Smith</a></h5>
                            <span><a href="#" class="d-inline-block">20 mutual friends</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-friends-box d-flex align-items-center">
                        <img src="{{ asset('/img/user6.jpg') }}" alt="image">

                        <div class="info ml-3">
                            <h5><a href="#" class="d-inline-block">Sam Curran</a></h5>
                            <span><a href="#" class="d-inline-block">10 mutual friends</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-friends-box d-flex align-items-center">
                        <img src="{{ asset('/img/user7.jpg') }}" alt="image">

                        <div class="info ml-3">
                            <h5><a href="#" class="d-inline-block">Mark Wood</a></h5>
                            <span><a href="#" class="d-inline-block">2 mutual friends</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-friends-box d-flex align-items-center">
                        <img src="{{ asset('/img/user8.jpg') }}" alt="image">

                        <div class="info ml-3">
                            <h5><a href="#" class="d-inline-block">Lucy Lanning</a></h5>
                            <span><a href="#" class="d-inline-block">20 mutual friends</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="single-friends-box d-flex align-items-center">
                        <img src="{{ asset('/img/user9.jpg') }}" alt="image">

                        <div class="info ml-3">
                            <h5><a href="#" class="d-inline-block">Josh Butler</a></h5>
                            <span><a href="#" class="d-inline-block">10 mutual friends</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection