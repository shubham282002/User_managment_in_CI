<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Language" content="en" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="This is an example dashboard created using build-in elements and components." />
        <meta name="msapplication-tap-highlight" content="no" />
        <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet" />
    </head>
    <body>
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
            <div class="app-header header-shadow">
                <div class="app-header__logo">
                    <div class=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNcps4CNjX_hfKX6u8HpE3FyJ4Hti491AAQA&usqp=CAU" width=70% alt=""></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box"> <span class="hamburger-inner"></span> </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box"> <span class="hamburger-inner"></span> </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper"> <i class="fa fa-ellipsis-v fa-w-6"></i> </span>
                        </button>
                    </span>
                </div>
                <div class="app-header__content">
                    <div class="app-header-right">
                        <div class="header-btn-lg pr-0">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="btn-group">
                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                                <img width="42" class="rounded-circle" src="" alt="" /> <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                            </a>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                                <button type="button" tabindex="0" class="dropdown-item">User Account</button> <button type="button" tabindex="0" class="dropdown-item">Logout</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-left ml-3 header-user-info">
                                        <div class="widget-heading">Login page</div>
                                        <div class="widget-subheading"></div>
                                    </div>
                                    <div class="widget-content-right header-user-info ml-3">
                                        <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example"><i class="fa text-white fa-calendar pr-1 pl-1"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box"> <span class="hamburger-inner"></span> </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box"> <span class="hamburger-inner"></span> </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper"> <i class="fa fa-ellipsis-v fa-w-6"></i> </span>
                            </button>
                        </span>
                    </div>
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <!-- <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Menus</li>
                                <li>
                                    <a href="#"> <i class="metismenu-icon pe-7s-car"></i> Users <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i> </a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url().'staff/staff_screen'; ?>"> <i class="metismenu-icon"> </i>Staff </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url().'student/student_screen'; ?>"> <i class="metismenu-icon"> </i>Students </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon"><i class="pe-7s-car icon-gradient bg-mean-fruit"> </i></div>
                                    <div>
                                        Log In Admin Panel
                                        <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>
                                    </div>
                                </div>
                                <!-- <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group"><a href="<?php echo base_url().'student_staff/add'?>"><button class="active btn btn-focus">Create</button></a></div>
                                </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <form action=""method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="">User_Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Username" id=""name="l_email">
                                    </div>
                                    <div class="form-group">
                                        <label for="wd">Password:</label>
                                        <input type="password" class="form-control" placeholder="Enter password" id=""name="l_password">
                                    </div> 
                                    <hr>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                   
                            </div>
                        </div>
                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"> Footer Link 1 </a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"> Footer Link 2 </a></li>
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"> Footer Link 3 </a></li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <div class="badge badge-success mr-1 ml-0"><small>NEW</small></div>
                                                Footer Link 4
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
            </div>
        </div>
        <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>
    </body>
</html>
