@extends('layouts.app')
@section('content')
<div class="todo-area">
    <div class="todo-content-area mt-20">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content d-flex email-sidebar" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -25px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden; padding-right: 0px; padding-bottom: 0px;"><div class="simplebar-content" style="padding: 25px;">
                    <div class="todo-menu">
                        <button type="button" class="btn btn-primary btn-block compose-btn mb-4"><i class="bx bx-plus"></i> New Task</button>

                        <div class="list-group list-group-messages">
                            <a href="#" class="list-group-item active">
                                <i class="bx bx-list-check"></i>
                                All
                            </a>

                            <a href="#" class="list-group-item">
                                <i class="bx bx-list-ol"></i>
                                New
                                <span class="badge badge-success d-inline-block">5</span>
                            </a>
                        </div>

                        <label class="d-block list-group-label text-uppercase">Labels</label>

                        <div class="list-group list-group-messages">
                            <a href="#" class="list-group-item">
                                <i class="bx bx-star"></i>
                                Favorite
                            </a>

                            <a href="#" class="list-group-item">
                                <i class="bx bx-check-double"></i>
                                Done
                            </a>

                            <a href="#" class="list-group-item">
                                <i class="bx bx-trash"></i>
                                Trashed
                            </a>
                        </div>

                        <label class="d-block list-group-label text-uppercase">Labels</label>

                        <div class="list-group list-group-labels">
                            <a href="#" class="list-group-item">
                                Categories
                            </a>

                            <a href="#" class="list-group-item">
                                Social
                            </a>

                            <a href="#" class="list-group-item">
                                Updates
                            </a>

                            <a href="#" class="list-group-item">
                                Forums
                            </a>

                            <a href="#" class="list-group-item">
                                Promotions
                            </a>
                        </div>
                    </div>
                </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 577px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none; width: 42px;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 360px; transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
            </div>
        </div>

        <div class="content-right justify-content-center">
            <div class="todo-area">
                <div class="todo-list-wrapper">
                    <div class="todo-list">
                        <div class="todo-list-header d-flex align-items-center">
                            <div class="header-left d-flex align-items-center mr-3">
                                <div class="checkbox mr-3">
                                    <input class="inp-cbx" id="cbx-all" type="checkbox" style="display: none;">
                                    <label class="cbx" for="cbx-all">
                                        <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                    </label>
                                </div>

                                <ul class="list-inline m-0 d-flex">
                                    <li class="list-inline-item email-delete">
                                        <button type="button" class="btn-icon">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </li>

                                    <li class="list-inline-item email-unread">
                                        <button type="button" class="btn-icon">
                                            <i class="bx bx-envelope"></i>
                                        </button>
                                    </li>

                                    <li class="list-inline-item email-unread">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle btn-icon" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-info-square"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class="bx bx-edit"></i> Drafts
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class="bx bx-info-square"></i> Spam
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class="bx bx-trash"></i> Delete
                                                </a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-inline-item email-unread">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle btn-icon" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-purchase-tag-alt"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class="bx bx-duplicate"></i> Categories
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class="bx bxs-user-detail"></i> Social
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class="bx bx-up-arrow"></i> Updates
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class="bx bx-chat"></i> Forums
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class="bx bx-trending-up"></i> Promotions
                                                </a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-inline-item email-unread">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle btn-icon" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-filter-alt"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class="bx bx-sort-up"></i> Ascending
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i class="bx bx-sort-down"></i> Descending
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="header-right w-100">
                                <form>
                                    <label><i class="bx bx-search"></i></label>
                                    <input type="text" class="form-control" placeholder="Search email...">
                                </form>
                            </div>
                        </div>

                        <ul class="list-wrapper" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -20px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll; padding-right: 20px; padding-bottom: 0px;"><div class="simplebar-content" style="padding: 0px;">
                            <li class="todo-list-item">
                                <div class="checkbox">
                                    <input class="inp-cbx" id="cbx" type="checkbox" style="display: none;">
                                    <label class="cbx" for="cbx">
                                        <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                    </label>
                                </div>

                                <div class="todo-item-title">
                                    <img src="{{ asset('/img/user1.jpg') }}" data-toggle="tooltip" data-placement="top" title="" alt="image" data-original-title="Sarah Taylor">
                                    <h3>Print bills</h3>
                                    <p>There are many variations of...</p>
                                </div>

                                <div class="todo-item-action">
                                    <a href="#" class="edit"><i class="bx bx-edit-alt"></i></a>
                                    <a href="#" class="delete"><i class="bx bx-trash"></i></a>
                                </div>
                            </li>

                            <li class="todo-list-item">
                                <div class="checkbox">
                                    <input class="inp-cbx" id="cbx2" type="checkbox" style="display: none;">
                                    <label class="cbx" for="cbx2">
                                        <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                    </label>
                                </div>

                                <div class="todo-item-title">
                                    <img src="assets/img/user2.jpg" data-toggle="tooltip" data-placement="top" title="" alt="image" data-original-title="Lucy Eva">
                                    <h3>Call Rampbo</h3>
                                    <p>There are many variations of...</p>
                                </div>

                                <div class="todo-item-action">
                                    <a href="#" class="edit"><i class="bx bx-edit-alt"></i></a>
                                    <a href="#" class="delete"><i class="bx bx-trash"></i></a>
                                </div>
                            </li>

                            <li class="todo-list-item">
                                <div class="checkbox">
                                    <input class="inp-cbx" id="cbx3" type="checkbox" style="display: none;">
                                    <label class="cbx" for="cbx3">
                                        <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                    </label>
                                </div>

                                <div class="todo-item-title">
                                    <img src="assets/img/user3.jpg" data-toggle="tooltip" data-placement="top" title="" alt="image" data-original-title="John Smith">
                                    <h3>Print Statements all</h3>
                                    <p>There are many variations of...</p>
                                </div>

                                <div class="todo-item-action">
                                    <a href="#" class="edit"><i class="bx bx-edit-alt"></i></a>
                                    <a href="#" class="delete"><i class="bx bx-trash"></i></a>
                                </div>
                            </li>

                            <li class="todo-list-item">
                                <div class="checkbox">
                                    <input class="inp-cbx" id="cbx4" type="checkbox" style="display: none;">
                                    <label class="cbx" for="cbx4">
                                        <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                    </label>
                                </div>

                                <div class="todo-item-title">
                                    <img src="assets/img/user4.jpg" data-toggle="tooltip" data-placement="top" title="" alt="image" data-original-title="Steven Smith">
                                    <h3>What reason think</h3>
                                    <p>There are many variations of...</p>
                                </div>

                                <div class="todo-item-action">
                                    <a href="#" class="edit"><i class="bx bx-edit-alt"></i></a>
                                    <a href="#" class="delete"><i class="bx bx-trash"></i></a>
                                </div>
                            </li>

                            <li class="todo-list-item">
                                <div class="checkbox">
                                    <input class="inp-cbx" id="cbx5" type="checkbox" style="display: none;">
                                    <label class="cbx" for="cbx5">
                                        <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                    </label>
                                </div>

                                <div class="todo-item-title">
                                    <img src="assets/img/user5.jpg" data-toggle="tooltip" data-placement="top" title="" alt="image" data-original-title="Lucy Smith">
                                    <h3>Think about business content?</h3>
                                    <p>There are many variations of...</p>
                                </div>

                                <div class="todo-item-action">
                                    <a href="#" class="edit"><i class="bx bx-edit-alt"></i></a>
                                    <a href="#" class="delete"><i class="bx bx-trash"></i></a>
                                </div>
                            </li>

                            <li class="todo-list-item">
                                <div class="checkbox">
                                    <input class="inp-cbx" id="cbx6" type="checkbox" style="display: none;">
                                    <label class="cbx" for="cbx6">
                                        <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                    </label>
                                </div>

                                <div class="todo-item-title">
                                    <img src="assets/img/user6.jpg" data-toggle="tooltip" data-placement="top" title="" alt="image" data-original-title="James Anderson">
                                    <h3>Reason would it be advisable</h3>
                                    <p>There are many variations of...</p>
                                </div>

                                <div class="todo-item-action">
                                    <a href="#" class="edit"><i class="bx bx-edit-alt"></i></a>
                                    <a href="#" class="delete"><i class="bx bx-trash"></i></a>
                                </div>
                            </li>

                            <li class="todo-list-item">
                                <div class="checkbox">
                                    <input class="inp-cbx" id="cbx7" type="checkbox" style="display: none;">
                                    <label class="cbx" for="cbx7">
                                        <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                    </label>
                                </div>

                                <div class="todo-item-title">
                                    <img src="assets/img/user1.jpg" data-toggle="tooltip" data-placement="top" title="" alt="image" data-original-title="Sarah Taylor">
                                    <h3>Print bills</h3>
                                    <p>There are many variations of...</p>
                                </div>

                                <div class="todo-item-action">
                                    <a href="#" class="edit"><i class="bx bx-edit-alt"></i></a>
                                    <a href="#" class="delete"><i class="bx bx-trash"></i></a>
                                </div>
                            </li>

                            <li class="todo-list-item">
                                <div class="checkbox">
                                    <input class="inp-cbx" id="cbx8" type="checkbox" style="display: none;">
                                    <label class="cbx" for="cbx8">
                                        <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                    </label>
                                </div>

                                <div class="todo-item-title">
                                    <img src="assets/img/user2.jpg" data-toggle="tooltip" data-placement="top" title="" alt="image" data-original-title="Lucy Eva">
                                    <h3>Call Rampbo</h3>
                                    <p>There are many variations of...</p>
                                </div>

                                <div class="todo-item-action">
                                    <a href="#" class="edit"><i class="bx bx-edit-alt"></i></a>
                                    <a href="#" class="delete"><i class="bx bx-trash"></i></a>
                                </div>
                            </li>

                            <li class="todo-list-item">
                                <div class="checkbox">
                                    <input class="inp-cbx" id="cbx9" type="checkbox" style="display: none;">
                                    <label class="cbx" for="cbx9">
                                        <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                    </label>
                                </div>

                                <div class="todo-item-title">
                                    <img src="assets/img/user3.jpg" data-toggle="tooltip" data-placement="top" title="" alt="image" data-original-title="John Smith">
                                    <h3>Print Statements all</h3>
                                    <p>There are many variations of...</p>
                                </div>

                                <div class="todo-item-action">
                                    <a href="#" class="edit"><i class="bx bx-edit-alt"></i></a>
                                    <a href="#" class="delete"><i class="bx bx-trash"></i></a>
                                </div>
                            </li>

                            <li class="todo-list-item">
                                <div class="checkbox">
                                    <input class="inp-cbx" id="cbx10" type="checkbox" style="display: none;">
                                    <label class="cbx" for="cbx10">
                                        <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                    </label>
                                </div>

                                <div class="todo-item-title">
                                    <img src="assets/img/user4.jpg" data-toggle="tooltip" data-placement="top" title="" alt="image" data-original-title="Steven Smith">
                                    <h3>What reason think</h3>
                                    <p>There are many variations of...</p>
                                </div>

                                <div class="todo-item-action">
                                    <a href="#" class="edit"><i class="bx bx-edit-alt"></i></a>
                                    <a href="#" class="delete"><i class="bx bx-trash"></i></a>
                                </div>
                            </li>

                            <li class="todo-list-item">
                                <div class="checkbox">
                                    <input class="inp-cbx" id="cbx11" type="checkbox" style="display: none;">
                                    <label class="cbx" for="cbx11">
                                        <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                    </label>
                                </div>

                                <div class="todo-item-title">
                                    <img src="assets/img/user5.jpg" data-toggle="tooltip" data-placement="top" title="" alt="image" data-original-title="Lucy Smith">
                                    <h3>Think about business content?</h3>
                                    <p>There are many variations of...</p>
                                </div>

                                <div class="todo-item-action">
                                    <a href="#" class="edit"><i class="bx bx-edit-alt"></i></a>
                                    <a href="#" class="delete"><i class="bx bx-trash"></i></a>
                                </div>
                            </li>

                            <li class="todo-list-item">
                                <div class="checkbox">
                                    <input class="inp-cbx" id="cbx12" type="checkbox" style="display: none;">
                                    <label class="cbx" for="cbx12">
                                        <span>
                                            <svg width="12px" height="10px" viewBox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                    </label>
                                </div>

                                <div class="todo-item-title">
                                    <img src="assets/img/user6.jpg" data-toggle="tooltip" data-placement="top" title="" alt="image" data-original-title="James Anderson">
                                    <h3>Reason would it be advisable</h3>
                                    <p>There are many variations of...</p>
                                </div>

                                <div class="todo-item-action">
                                    <a href="#" class="edit"><i class="bx bx-edit-alt"></i></a>
                                    <a href="#" class="delete"><i class="bx bx-trash"></i></a>
                                </div>
                            </li>
                        </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 947px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none; width: 26px;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 92px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection