{{-- @extends('layouts.app')

@section('content')
<div class="jumbotron p-5 jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">{{ $service->name }}</h1>
    </div>
</div>
@endsection --}}


@extends('layouts.app')

@section('content')
 <!-- Start Profile Area -->
 <section class="profile-area">
    <div class="profile-header mb-30">
        <div class="user-profile-images">

            @if ( $service->seller->banner )                
                <img src="{{ $service->seller->getImageBanner() }}" class="cover-image" alt="image">
            @else
            {{-- definir imagen de fondo por defecto --}}
                <img src="{{ asset('/img/profile-banner.jpg') }}" class="cover-image" alt="image">
            @endif

            <div class="profile-image">
                @if( $service->picture )
                    <img class="img-thumbnail" src="{{ $service->pathAttachment() }}" alt="image">
                @else
                    <img src="{{ asset('/img/user1.jpg') }}" alt="image">
                @endif
            </div>

            <div class="user-profile-text">
                <h3>{{ $service->seller->title }}</h3>
                <span class="d-block">{{ $service->seller->description }}</span>
            </div>
        </div>

        <div class="user-profile-nav">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="timeline-tab" data-toggle="tab" href="#timeline" role="tab" aria-controls="timeline" aria-selected="true">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">Información adicional</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="friends-tab" data-toggle="tab" href="#friends" role="tab" aria-controls="friends" aria-selected="false">Nuestra tienda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Contáctanos</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-9">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card user-intro-box mb-30">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3>Intro</h3>
                
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class='bx bx-dots-horizontal-rounded' ></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-show'></i> View
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-edit-alt'></i> Edit
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-trash'></i> Delete
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-printer'></i> Print
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-download'></i> Download
                                            </a>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="card-body">
                                    <p class="mb-0">Life Is Short Write Better Code....</p>

                                    <button type="submit">Edit Bio</button>
                                </div>
                            </div>

                            <div class="card user-info-box mb-30">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3>Información</h3>
                
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class='bx bx-dots-horizontal-rounded' ></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-show'></i> Ver
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-edit-alt'></i> Editar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="card-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="d-flex">
                                            <i class='bx bx-home-circle mr-2'></i>
                                            <span class="d-inline-block">Ubicación <a href="#" class="d-inline-block">Santiago de Chile</a></span>
                                        </li>
                                        <li class="d-flex">
                                            <i class='bx bx-map mr-2'></i>
                                            <span class="d-inline-block">From <a href="#" class="d-inline-block">New York, USA</a></span>
                                        </li>
                                        <li class="d-flex">
                                            <i class='bx bx-wifi mr-2'></i>
                                            <span class="d-inline-block">Followed by <a href="#" class="d-inline-block">111 people</a></span>
                                        </li>
                                        <li class="d-flex">
                                            <i class='bx bx-phone mr-2'></i>
                                            <span class="d-inline-block">Teléfono <a href="#" class="d-inline-block">+0 (123) 456 7892</a></span>
                                        </li>
                                        @if ( $service->seller->contact_email )
                                        <li class="d-flex">
                                            <i class='bx bx-envelope mr-2'></i>
                                            <span class="d-inline-block">Email <a href="#" class="d-inline-block">{{ $service->seller->contact_email }}</a></span>
                                        </li>
                                        @endif
                                        <li class="d-flex">
                                            <i class='bx bx-calendar mr-2'></i>
                                            <span class="d-inline-block">Joined <a href="#" class="d-inline-block">March 2009</a></span>
                                        </li>
                                    </ul>

                                    <button type="submit">Edit Info</button>
                                </div>
                            </div>

                            <div class="card user-photos-box mb-30">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3>Photos</h3>
                
                                    <button type="submit" class="photo-upload-btn"><i class='bx bx-upload'></i> Upload</button>
                                </div>
                
                                <div class="card-body">
                                    <ul class="list-unstyled mb-0 d-flex flex-wrap">
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('/img/user1.jpg') }}" alt="image">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('/img/user2.jpg') }}" alt="image">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('/img/user3.jpg') }}" alt="image">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('/img/user4.jpg') }}" alt="image">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('/img/user5.jpg') }}" alt="image">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('/img/user6.jpg') }}" alt="image">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card user-skills-box mb-30">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3>Etiquetas</h3>
                
                                    <button type="submit" class="create-btn">Crear</button>
                                </div>
                
                                <div class="card-body">
                                    <label class="badge">Servicios profesionales</label>
                                    <label class="badge">Venta accesorios</label>
                                    <label class="badge"> Cursos capacitación</label>
                                </div>
                            </div>

                            <div class="card user-social-box mb-30">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3>Redes Sociales</h3>
                
                                    <button type="submit" class="add-btn">Agregar</button>
                                </div>
                
                                <div class="card-body">
                                    <a href="#" class="facebook" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook"><i class='bx bxl-facebook'></i></a>
                                    <a href="#" class="twitter" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter"><i class='bx bxl-twitter'></i></a>
                                    <a href="#" class="instagram" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram"><i class='bx bxl-instagram'></i></a>
                                    <a href="#" class="linkedin" target="_blank" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class='bx bxl-linkedin'></i></a>
                                    <a href="#" class="pinterest" target="_blank" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class='bx bxl-pinterest-alt'></i></a>
                                    <a href="#" class="stack-overflow" target="_blank" data-toggle="tooltip" data-placement="top" title="Stack Overflow"><i class='bx bxl-stack-overflow'></i></a>
                                </div>
                            </div>
                        </div>

                        {{-- Contenido central --}}
                        <div class="col-lg-8">
                            {{--  --}}
                        {{-- @forelse ($services as $service)
                            
                        <div class="card user-events-box mb-30">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h3>{{ $service->name }}</h3>
            
                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class='bx bx-dots-horizontal-rounded' ></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <i class='bx bx-show'></i> Ver
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <i class='bx bx-edit-alt'></i> Editar
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <i class='bx bx-trash'></i> Eliminar
                                        </a>
                                    </div>
                                </div>
                            </div>
            
                            <div class="card-body">
                                <img src="{{ $service->pathAttachment() }}" alt="image">
                            </div>
                            <div class="card-body p-2">
                                <small class=" text-light badge badge-info">{{ $service->category->name }}</small>
                                <p class="mb-2">{{ $service->description }}</p>
                                <small class="text-muted">{{ $service->created_at->format('d/m/Y') }}</small>
                            </div>
                        </div>
                        @empty
                            
                        @endforelse --}}
                        {{--  --}}
                            <div class="post-share-content mb-30">
                                <div class="post-share-field">
                                    <label><img src="{{ asset('/img/user1.jpg') }}" alt="image"></label>
                                    <textarea cols="30" rows="4" class="form-control" placeholder="What's on your mind?"></textarea>
                                </div>

                                <div class="post-share-footer d-flex align-items-center justify-content-between mt-4 pt-4">
                                    <div class="post-share-info">
                                        <a href="#" class="d-inline-block" data-toggle="tooltip" data-placement="top" title="Photo/Video"><i class="bx bx-camera"></i></a>
                                        <a href="#" class="d-inline-block" data-toggle="tooltip" data-placement="top" title="Tag Friends"><i class='bx bx-user-circle'></i></a>
                                        <a href="#" class="d-inline-block" data-toggle="tooltip" data-placement="top" title="Feeling/Activity"><i class='bx bx-smile'></i></a>
                                        <a href="#" class="d-inline-block" data-toggle="tooltip" data-placement="top" title="Share Your Location"><i class='bx bx-map'></i></a>
                                    </div>

                                    <div class="post-btn">
                                        <a href="#" class="d-inline-block">Post</a>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-story-content">
                                <div class="card mb-30">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <div class="timeline-story-header d-flex align-items-center">
                                            <img src="{{ asset('/img/user1.jpg') }}" width="50" height="50" class="rounded-circle" alt="image">

                                            <div class="info ml-3">
                                                <h6><a href="#">Andro Smith</a> updated his cover photo.</h6>
                                                <span class="d-block">December 7 at 11:01 AM</span>
                                            </div>
                                        </div>

                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-dots-horizontal-rounded' ></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-show'></i> View
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-edit-alt'></i> Edit
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-trash'></i> Delete
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-printer'></i> Print
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-download'></i> Download
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolor eos id ipsa nobis omnis, tenetur? Dolor officiis omnis quo?</p>

                                        <a href="#" class="d-block">
                                            <img src="{{ asset('/img/slider/1.jpg') }}" alt="image">
                                        </a>

                                        <div class="feedback-summary mt-4">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Like"><i class='bx bx-like'></i> 9898</a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Comment"><i class='bx bx-comment'></i> 898</a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Share"><i class='bx bx-share'></i> 354</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-30">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <div class="timeline-story-header d-flex align-items-center">
                                            <img src="{{ asset('/img/user1.jpg') }}" width="50" height="50" class="rounded-circle" alt="image">

                                            <div class="info ml-3">
                                                <h6><a href="#">Andro Smith</a> updated his status.</h6>
                                                <span class="d-block">December 7 at 11:01 AM</span>
                                            </div>
                                        </div>

                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-dots-horizontal-rounded' ></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-show'></i> View
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-edit-alt'></i> Edit
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-trash'></i> Delete
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-printer'></i> Print
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-download'></i> Download
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                                        <div class="feedback-summary mt-4">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Like"><i class='bx bx-like'></i> 9898</a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Comment"><i class='bx bx-comment'></i> 898</a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Share"><i class='bx bx-share'></i> 354</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-30">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <div class="timeline-story-header d-flex align-items-center">
                                            <img src="{{ asset('/img/user1.jpg') }}" width="50" height="50" class="rounded-circle" alt="image">

                                            <div class="info ml-3">
                                                <h6><a href="#">Andro Smith</a> updated his profile picture.</h6>
                                                <span class="d-block">December 7 at 11:01 AM</span>
                                            </div>
                                        </div>

                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-dots-horizontal-rounded' ></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-show'></i> View
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-edit-alt'></i> Edit
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-trash'></i> Delete
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-printer'></i> Print
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-download'></i> Download
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <a href="#" class="d-block">
                                            <img src="{{ asset('/img/slider/2.jpg') }}" alt="image">
                                        </a>

                                        <div class="feedback-summary mt-4">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Like"><i class='bx bx-like'></i> 9898</a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Comment"><i class='bx bx-comment'></i> 898</a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Share"><i class='bx bx-share'></i> 354</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-30">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <div class="timeline-story-header d-flex align-items-center">
                                            <img src="{{ asset('/img/user1.jpg') }}" width="50" height="50" class="rounded-circle" alt="image">

                                            <div class="info ml-3">
                                                <h6><a href="#">Andro Smith</a> updated his status.</h6>
                                                <span class="d-block">December 7 at 11:01 AM</span>
                                            </div>
                                        </div>

                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-dots-horizontal-rounded' ></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-show'></i> View
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-edit-alt'></i> Edit
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-trash'></i> Delete
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-printer'></i> Print
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-download'></i> Download
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                                        <div class="feedback-summary mt-4">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Like"><i class='bx bx-like'></i> 5874</a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Comment"><i class='bx bx-comment'></i> 541</a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Share"><i class='bx bx-share'></i> 24</a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        <p class="mb-0">When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                                        <div class="feedback-summary mt-4">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Like"><i class='bx bx-like'></i> 541</a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Comment"><i class='bx bx-comment'></i> 555</a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Share"><i class='bx bx-share'></i> 54</a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                                        <div class="feedback-summary mt-4">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Like"><i class='bx bx-like'></i> 5874</a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Comment"><i class='bx bx-comment'></i> 541</a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Share"><i class='bx bx-share'></i> 24</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-30">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <div class="timeline-story-header d-flex align-items-center">
                                            <img src="{{ asset('/img/user1.jpg') }}" width="50" height="50" class="rounded-circle" alt="image">

                                            <div class="info ml-3">
                                                <h6><a href="#">Andro Smith</a> updated his video.</h6>
                                                <span class="d-block">December 5 at 12:01 AM</span>
                                            </div>
                                        </div>

                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-dots-horizontal-rounded' ></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-show'></i> View
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-edit-alt'></i> Edit
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-trash'></i> Delete
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-printer'></i> Print
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class='bx bx-download'></i> Download
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>

                                        <div class="feedback-summary mt-3">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Like"><i class='bx bx-like'></i> 8541</a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Comment"><i class='bx bx-comment'></i> 599</a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Share"><i class='bx bx-share'></i> 54</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card user-intro-box mb-30">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3>Intro</h3>
                
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class='bx bx-dots-horizontal-rounded' ></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-show'></i> View
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-edit-alt'></i> Edit
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-trash'></i> Delete
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-printer'></i> Print
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-download'></i> Download
                                            </a>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="card-body">
                                    <p class="mb-0">Life Is Short Write Better Code....</p>
                                </div>
                            </div>

                            <div class="card user-skills-box mb-30">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3>Skills</h3>
                                </div>
                
                                <div class="card-body">
                                    <label class="badge">HTML5</label>
                                    <label class="badge">CSS3</label>
                                    <label class="badge">JavaScript</label>
                                    <label class="badge">PHP</label>
                                    <label class="badge">Java</label>
                                    <label class="badge">WordPress</label>
                                    <label class="badge">UX/UI</label>
                                    <label class="badge">React</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="card user-info-box mb-30">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3>Info</h3>
                
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class='bx bx-dots-horizontal-rounded' ></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-show'></i> View
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-edit-alt'></i> Edit
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-trash'></i> Delete
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-printer'></i> Print
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-download'></i> Download
                                            </a>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="card-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="d-flex">
                                            <i class="bx bx-briefcase mr-2"></i>
                                            <span class="d-inline-block">Full Stack Developer at <a href="#" class="d-inline-block">EnvyTheme</a></span>
                                        </li>
                                        <li class="d-flex">
                                            <i class="bx bx-briefcase mr-2"></i>
                                            <span class="d-inline-block">Former UI Designer at <a href="#" class="d-inline-block">ThemeForest</a></span>
                                        </li>
                                        <li class="d-flex">
                                            <i class='bx bxs-graduation mr-2'></i>
                                            <span class="d-inline-block">Studies Computer Science Engineering at <a href="#" class="d-inline-block">ABC University</a></span>
                                        </li>
                                        <li class="d-flex">
                                            <i class='bx bxs-graduation mr-2'></i>
                                            <span class="d-inline-block">Went to <a href="#" class="d-inline-block">Government High School, USA</a></span>
                                        </li>
                                        <li class="d-flex">
                                            <i class='bx bx-home-circle mr-2'></i>
                                            <span class="d-inline-block">Lives in <a href="#" class="d-inline-block">USA</a></span>
                                        </li>
                                        <li class="d-flex">
                                            <i class='bx bx-map mr-2'></i>
                                            <span class="d-inline-block">From <a href="#" class="d-inline-block">New York, USA</a></span>
                                        </li>
                                        <li class="d-flex">
                                            <i class='bx bx-wifi mr-2'></i>
                                            <span class="d-inline-block">Followed by <a href="#" class="d-inline-block">111 people</a></span>
                                        </li>
                                        <li class="d-flex">
                                            <i class='bx bx-phone mr-2'></i>
                                            <span class="d-inline-block">Phone <a href="#" class="d-inline-block">+0 (123) 456 7892</a></span>
                                        </li>
                                        <li class="d-flex">
                                            <i class='bx bx-envelope mr-2'></i>
                                            <span class="d-inline-block">Email <a href="#" class="d-inline-block">hello@andro.com</a></span>
                                        </li>
                                        <li class="d-flex">
                                            <i class='bx bx-calendar mr-2'></i>
                                            <span class="d-inline-block">Joined <a href="#" class="d-inline-block">March 2009</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- <div class="card user-about-me-box mb-30">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3>About Me</h3>
                
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class='bx bx-dots-horizontal-rounded' ></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-show'></i> View
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-edit-alt'></i> Edit
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-trash'></i> Delete
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-printer'></i> Print
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-download'></i> Download
                                            </a>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="card-body">
                                    <p>Hi I'm Andro Smith,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>

                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                </div>
                            </div> --}}

                            <div class="card user-biography-box mb-30">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3>Acerca de nosotros</h3>
                
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class='bx bx-dots-horizontal-rounded' ></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-show'></i> View
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-edit-alt'></i> Edit
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-trash'></i> Delete
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-printer'></i> Print
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class='bx bx-download'></i> Download
                                            </a>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="card-body">
                                    <h6 class="font-weight-bold">Una pequeña reseña de {{ $service->seller->title }}</h6>
                                    <p>{{ $service->seller->bio }}</p>
                                </div>
                            </div>

                            <div class="card user-social-box mb-30">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3 class="text-capitalize">nuestras redes sociales</h3>
                                </div>
                
                                <div class="card-body">
                                    <a href="#" class="facebook" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook"><i class='bx bxl-facebook'></i></a>
                                    <a href="#" class="twitter" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter"><i class='bx bxl-twitter'></i></a>
                                    <a href="#" class="instagram" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram"><i class='bx bxl-instagram'></i></a>
                                    <a href="#" class="linkedin" target="_blank" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class='bx bxl-linkedin'></i></a>
                                    <a href="#" class="pinterest" target="_blank" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class='bx bxl-pinterest-alt'></i></a>
                                    <a href="#" class="stack-overflow" target="_blank" data-toggle="tooltip" data-placement="top" title="Stack Overflow"><i class='bx bxl-stack-overflow'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="friends" role="tabpanel" aria-labelledby="friends-tab">
                    <div class="card user-friends-box mb-30">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3>Friends</h3>
        
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-dots-horizontal-rounded' ></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class='bx bx-show'></i> View
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class='bx bx-edit-alt'></i> Edit
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class='bx bx-trash'></i> Delete
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class='bx bx-printer'></i> Print
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class='bx bx-download'></i> Download
                                    </a>
                                </div>
                            </div>
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

                <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    <div class="card text-left">
                      <img class="card-img-top" src="holder.js/100px180/" alt="">
                      <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Body</p>
                      </div>
                    </div>
                    {{-- <div class="card user-settings-box mb-30">
                        <div class="card-body">
                            <form>
                                <h3><i class='bx bx-user-circle'></i> Información Personal</h3>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control"
                                                name="name"
                                                value="{{ old('name') ?: auth()->user()->name }}"
                                                placeholder="Ingrese Nombre"
                                            >
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Apellido</label>
                                            <input class="form-control"
                                                name="last_name"
                                                value="{{ old('last_name') ?: auth()->user()->last_name }}"
                                                placeholder="Ingrese Apellido"
                                            >
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Biografía</label>
                                            <textarea class="form-control" name="description" cols="30" rows="5" placeholder="Write something...">{{ old('description') ?: auth()->user()->description }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Fecha de ingreso</label>
                                            <input class="form-control"
                                                disabled
                                                type="datetime"
                                                name="created_at"
                                                value="{{ old('created_at') ?: auth()->user()->created_at }}"
                                                placeholder="dd/mm/yy"
                                            >
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Fecha de Cumpleaños</label>
                                            <input type="text" class="form-control" placeholder="dd/mm/yy">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control"
                                                name="email"
                                                value="{{ old('email') ?: auth()->user()->email }}"
                                                placeholder="Enter job name"
                                            >
                                            <span class="form-text text-muted d-block">
                                                <small>Si quieres cambiar tu Email <a href="#" class="d-inline-block">click</a> aquí.</small>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Telefono</label>
                                            <input type="text" class="form-control" placeholder="Ingresa número telefono">
                                            <span class="form-text text-muted d-block">
                                                <small>Si quieres cambiar tu número de telefono <a href="#" class="d-inline-block">click</a> aquí.</small>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input type="password" class="form-control" placeholder="Ingrese contraseña">
                                            <span class="form-text text-muted d-block">
                                                <small>Si quieres cambiar tu contraseña, por favor <a href="#" class="d-inline-block">click</a> aquí.</small>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <h3><i class='bx bx-building'></i> Información empresa</h3>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nombre Empresa o PYME</label>
                                            <input class="form-control"
                                                name="title"
                                                value="{{ old('title') ?: $service->seller->title }}"
                                                placeholder="Ingrese nombre empresa o PYME"
                                            >
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Sitio Web</label>
                                            <input class="form-control"
                                                name="website_url"
                                                value="{{ old('website_url') ?: $service->seller->website_url }}"
                                                placeholder="Ingrese URL sitio web"
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Acerca de nosotros</label>
                                            <textarea class="form-control" name="bio" cols="30" rows="5" placeholder="Acerca de nosotros...">{{ old('bio') ?: $service->seller->bio }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <h3><i class='bx bx-world'></i> Redes Sociales</h3>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" class="form-control" placeholder="ingrese url facebook">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text" class="form-control" placeholder="ingrese url twitter">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <input type="text" class="form-control" placeholder="ingrese url instagram">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Linkedin</label>
                                            <input type="text" class="form-control" placeholder="ingrese url linkedin">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Pinterest</label>
                                            <input type="text" class="form-control" placeholder="ingrese url pinterest">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Stack Overflow</label>
                                            <input type="text" class="form-control" placeholder="ingrese url stack overflow">
                                        </div>
                                    </div>
                                </div>

                                <div class="btn-box text-right">
                                    <button type="submit" class="submit-btn"><i class='bx bx-save'></i> Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card user-events-box mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Today's Events</h3>

                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class='bx bx-dots-horizontal-rounded' ></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-show'></i> View
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-edit-alt'></i> Edit
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-trash'></i> Delete
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-printer'></i> Print
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-download'></i> Download
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <ul class="list-unstyled d-flex flex-wrap mb-0">
                        <li>
                            <a href="#">
                                <i class="bx bx-briefcase"></i>
                                <span>Designing Fiva Admin</span>
                                9:00 AM
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="bx bx-briefcase"></i>
                                <span>Coding with React Next</span>
                                6:00 AM
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card user-friend-request-box mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Friend Request</h3>

                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class='bx bx-dots-horizontal-rounded' ></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-show'></i> View
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-edit-alt'></i> Edit
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-trash'></i> Delete
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-printer'></i> Print
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-download'></i> Download
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li class="d-flex align-items-center">
                            <img src="{{ asset('/img/user2.jpg') }}" width="70" height="70" class="rounded-circle" alt="image">

                            <div class="info ml-3">
                                <h6><a href="#">Charlotte Mia</a></h6>
                                <span class="d-block"><a href="#">3 mutual friends</a></span>
                                <div class="btn-box">
                                    <a href="#" role="button" class="mr-1"><i class='bx bx-check'></i></a>
                                    <a href="#" role="button"><i class='bx bx-x'></i></a>
                                </div>
                            </div>
                        </li>

                        <li class="d-flex align-items-center">
                            <img src="{{ asset('/img/user3.jpg') }}" width="70" height="70" class="rounded-circle" alt="image">

                            <div class="info ml-3">
                                <h6><a href="#">Steven Smith</a></h6>
                                <span class="d-block"><a href="#">3 mutual friends</a></span>
                                <div class="btn-box">
                                    <a href="#" role="button" class="mr-1"><i class='bx bx-check'></i></a>
                                    <a href="#" role="button"><i class='bx bx-x'></i></a>
                                </div>
                            </div>
                        </li>

                        <li class="d-flex align-items-center">
                            <img src="{{ asset('/img/user4.jpg') }}" width="70" height="70" class="rounded-circle" alt="image">

                            <div class="info ml-3">
                                <h6><a href="#">James Anderson</a></h6>
                                <span class="d-block"><a href="#">3 mutual friends</a></span>
                                <div class="btn-box">
                                    <a href="#" role="button" class="mr-1"><i class='bx bx-check'></i></a>
                                    <a href="#" role="button"><i class='bx bx-x'></i></a>
                                </div>
                            </div>
                        </li>

                        <li class="d-flex align-items-center">
                            <img src="{{ asset('/img/user5.jpg') }}" width="70" height="70" class="rounded-circle" alt="image">

                            <div class="info ml-3">
                                <h6><a href="#">Ellie Emma</a></h6>
                                <span class="d-block"><a href="#">3 mutual friends</a></span>
                                <div class="btn-box">
                                    <a href="#" role="button" class="mr-1"><i class='bx bx-check'></i></a>
                                    <a href="#" role="button"><i class='bx bx-x'></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card user-trends-box mb-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Trends for you</h3>

                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class='bx bx-dots-horizontal-rounded' ></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-show'></i> View
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-edit-alt'></i> Edit
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-trash'></i> Delete
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-printer'></i> Print
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class='bx bx-download'></i> Download
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#">
                                Trending in New York
                                <span>#WordPress</span>
                                1.16M Tweets
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Trending in USA
                                <span>#DigitalMarketing</span>
                                10.29M Tweets
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Trending in Canada
                                <span>#Coding</span>
                                15.54M Tweets
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Profile Area -->
@endsection