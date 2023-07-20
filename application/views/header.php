<!DOCTYPE html>
<html lang="en">

<head>
  <!--  Title -->
  <title>VetConnect</title>
  <!--  Required Meta Tag -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="handheldfriendly" content="true" />
  <meta name="MobileOptimized" content="width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />


  <!--  Favicon -->
  <link rel="shortcut icon" href="<?= base_url() ?>assets/img/icon.png" />
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/tabler-icons/tabler-icons.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/owl.carousel.min.css">
  <!-- Core Css -->
  <link id="themeColors" rel="stylesheet" href="<?= base_url() ?>assets/dist/css/style.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css"
    integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="<?= base_url() ?>assets/img/Vetconnect.png" class="dark-logo" width="180" alt="" />

          </a>
          <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8 text-muted"></i>
          </div>
        </div>
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Principal</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.html" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Home</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index2.html" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-users"></i>
                </span>
                <span class="hide-menu">Personal</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index3.html" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-paw fa-bounce fa-lg"></i>
                </span>
                <span class="hide-menu">Mascotas</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index4.html" aria-expanded="false">
                <span>
                  <i class="fa-regular fa-calendar"></i>
                </span>
                <span class="hide-menu">Citas</span>
              </a>
            </li>
            <!-- ============================= -->
            <!-- Contable -->
            <!-- ============================= -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Finanzas</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./app-calendar.html" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-truck-ramp-box"></i>
                </span>
                <span class="hide-menu">Inventario</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./app-chat.html" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-cash-register"></i>
                </span>
                <span class="hide-menu">Ventas</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./app-notes.html" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-cash-register"></i>
                </span>
                <span class="hide-menu">Informe</span>
              </a>
            </li>
            <!-- ============================= -->
            <!-- Gestion -->
            <!-- ============================= -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Gestión</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./app-email.html" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-envelope"></i>
                </span>
                <span class="hide-menu">Email</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./app-email.html" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-comments"></i>
                </span>
                <span class="hide-menu">Chat</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index5.html" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-book"></i>
                </span>
                <span class="hide-menu">Notas</span>
              </a>
            </li>
          </ul>
        </nav>
        <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
          <div class="hstack gap-3">
            <div class="john-img">
              <img src="../../dist/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" alt="">
            </div>
            <div class="john-title">
              <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
              <span class="fs-2 text-dark">Designer</span>
            </div>
            <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout"
              data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
              <i class="ti ti-power fs-6"></i>
            </button>
          </div>
        </div>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                <i class="ti ti-search"></i>
              </a>
            </li>
          </ul>
          <div class="d-block d-lg-none">
            <img src="../../dist/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="" />
            <img src="../../dist/images/logos/light-logo.svg" class="light-logo" width="180" alt="" />
          </div>
          <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="p-2">
              <i class="ti ti-dots fs-7"></i>
            </span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <div class="d-flex align-items-center justify-content-between">
              <a href="javascript:void(0)" class="nav-link d-flex d-lg-none align-items-center justify-content-center"
                type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                aria-controls="offcanvasWithBothOptions">
                <i class="ti ti-align-justified fs-7"></i>
              </a>
              <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                <li class="nav-item">
                  <a class="nav-link notify-badge nav-icon-hover" href="javascript:void(0)" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <i class="ti ti-basket"></i>
                    <span class="badge rounded-pill bg-danger fs-2">2</span>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="ti ti-bell-ringing"></i>
                    <div class="notification bg-primary rounded-circle"></div>
                  </a>
                  <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                    aria-labelledby="drop2">
                    <div class="d-flex align-items-center justify-content-between py-3 px-7">
                      <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                      <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                    </div>
                    <div class="message-body" data-simplebar>
                      <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                        <span class="me-3">
                          <img src="../../dist/images/profile/user-1.jpg" alt="user" class="rounded-circle" width="48"
                            height="48" />
                        </span>
                        <div class="w-75 d-inline-block v-middle">
                          <h6 class="mb-1 fw-semibold">Roman Joined the Team!</h6>
                          <span class="d-block">Congratulate him</span>
                        </div>
                      </a>
                      <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                        <span class="me-3">
                          <img src="../../dist/images/profile/user-2.jpg" alt="user" class="rounded-circle" width="48"
                            height="48" />
                        </span>
                        <div class="w-75 d-inline-block v-middle">
                          <h6 class="mb-1 fw-semibold">New message</h6>
                          <span class="d-block">Salma sent you new message</span>
                        </div>
                      </a>
                      <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                        <span class="me-3">
                          <img src="../../dist/images/profile/user-3.jpg" alt="user" class="rounded-circle" width="48"
                            height="48" />
                        </span>
                        <div class="w-75 d-inline-block v-middle">
                          <h6 class="mb-1 fw-semibold">Bianca sent payment</h6>
                          <span class="d-block">Check your earnings</span>
                        </div>
                      </a>
                      <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                        <span class="me-3">
                          <img src="../../dist/images/profile/user-4.jpg" alt="user" class="rounded-circle" width="48"
                            height="48" />
                        </span>
                        <div class="w-75 d-inline-block v-middle">
                          <h6 class="mb-1 fw-semibold">Jolly completed tasks</h6>
                          <span class="d-block">Assign her new tasks</span>
                        </div>
                      </a>
                      <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                        <span class="me-3">
                          <img src="../../dist/images/profile/user-5.jpg" alt="user" class="rounded-circle" width="48"
                            height="48" />
                        </span>
                        <div class="w-75 d-inline-block v-middle">
                          <h6 class="mb-1 fw-semibold">John received payment</h6>
                          <span class="d-block">$230 deducted from account</span>
                        </div>
                      </a>
                      <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                        <span class="me-3">
                          <img src="../../dist/images/profile/user-1.jpg" alt="user" class="rounded-circle" width="48"
                            height="48" />
                        </span>
                        <div class="w-75 d-inline-block v-middle">
                          <h6 class="mb-1 fw-semibold">Roman Joined the Team!</h6>
                          <span class="d-block">Congratulate him</span>
                        </div>
                      </a>
                    </div>
                    <div class="py-6 px-7 mb-1">
                      <button class="btn btn-outline-primary w-100"> See All Notifications </button>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <div class="d-flex align-items-center">
                      <div class="user-profile-img">
                        <img src="<?= base_url() ?>assets/img/home/profile.jpg" class="rounded-circle" width="35"
                          height="35" alt="" />
                      </div>
                    </div>
                  </a>
                  <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                    aria-labelledby="drop1">
                    <div class="profile-dropdown position-relative" data-simplebar>
                      <div class="py-3 px-7 pb-0">
                        <h5 class="mb-0 fs-5 fw-semibold">Perfil</h5>
                      </div>
                      <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                        <img src="<?= base_url() ?>assets/img/home/profile.jpg" class="rounded-circle" width="80"
                          height="80" alt="" />
                        <div class="ms-3">
                          <h5 class="mb-1 fs-3">Diego Arenas</h5>
                          <span class="mb-1 d-block text-dark">CEO</span>
                          <p class="mb-0 d-flex text-dark align-items-center gap-2">
                            <i class="ti ti-mail fs-4"></i> diegoaarenas06@gmail.com
                          </p>
                        </div>
                      </div>
                      <div class="message-body">
                        <a href="./page-user-profile.html" class="py-8 px-7 mt-8 d-flex align-items-center">
                          <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                            <img src="<?= base_url() ?>assets/img/home/icon-account.svg" alt="" width="24" height="24">
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3">
                            <h6 class="mb-1 bg-hover-primary fw-semibold"> Perfil </h6>
                            <span class="d-block text-dark">Configuraciòn cuenta</span>
                          </div>
                        </a>
                        <a href="./app-email.html" class="py-8 px-7 d-flex align-items-center">
                          <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                            <img src="<?= base_url() ?>assets/img/home/icon-inbox.svg" alt="" width="24" height="24">
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3">
                            <h6 class="mb-1 bg-hover-primary fw-semibold">My correo</h6>
                            <span class="d-block text-dark">Mensajes </span>
                          </div>
                        </a>
                        <a href="./app-notes.html" class="py-8 px-7 d-flex align-items-center">
                          <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                            <img src="<?= base_url() ?>assets/img/home/icon-tasks.svg" alt="" width="24" height="24">
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3">
                            <h6 class="mb-1 bg-hover-primary fw-semibold">Deberes</h6>
                            <span class="d-block text-dark">Pendientes</span>
                          </div>
                        </a>
                      </div>
                      <div class="d-grid py-4 px-7 pt-8">
                        <a href="<?= base_url() ?>" class="btn btn-outline-primary">Cerrar Sesiòn</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!--  Mobilenavbar -->
      <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar"
        aria-labelledby="offcanvasWithBothOptionsLabel">
        <nav class="sidebar-nav scroll-sidebar">
          <div class="offcanvas-header justify-content-between">
            <img src="../../dist/images/logos/favicon.ico" alt="" class="img-fluid">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body profile-dropdown mobile-navbar" data-simplebar="" data-simplebar>
            <ul id="sidebarnav">
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span>
                    <i class="ti ti-apps"></i>
                  </span>
                  <span class="hide-menu">Apps</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level my-3">
                  <li class="sidebar-item py-2">
                    <a href="#" class="d-flex align-items-center">
                      <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="../../dist/images/svgs/icon-dd-chat.svg" alt="" class="img-fluid" width="24"
                          height="24">
                      </div>
                      <div class="d-inline-block">
                        <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                        <span class="fs-2 d-block fw-normal text-muted">New messages arrived</span>
                      </div>
                    </a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a href="#" class="d-flex align-items-center">
                      <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="../../dist/images/svgs/icon-dd-invoice.svg" alt="" class="img-fluid" width="24"
                          height="24">
                      </div>
                      <div class="d-inline-block">
                        <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                        <span class="fs-2 d-block fw-normal text-muted">Get latest invoice</span>
                      </div>
                    </a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a href="#" class="d-flex align-items-center">
                      <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="../../dist/images/svgs/icon-dd-mobile.svg" alt="" class="img-fluid" width="24"
                          height="24">
                      </div>
                      <div class="d-inline-block">
                        <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                        <span class="fs-2 d-block fw-normal text-muted">2 Unsaved Contacts</span>
                      </div>
                    </a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a href="#" class="d-flex align-items-center">
                      <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="../../dist/images/svgs/icon-dd-message-box.svg" alt="" class="img-fluid" width="24"
                          height="24">
                      </div>
                      <div class="d-inline-block">
                        <h6 class="mb-1 bg-hover-primary">Email App</h6>
                        <span class="fs-2 d-block fw-normal text-muted">Get new emails</span>
                      </div>
                    </a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a href="#" class="d-flex align-items-center">
                      <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="../../dist/images/svgs/icon-dd-cart.svg" alt="" class="img-fluid" width="24"
                          height="24">
                      </div>
                      <div class="d-inline-block">
                        <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                        <span class="fs-2 d-block fw-normal text-muted">learn more information</span>
                      </div>
                    </a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a href="#" class="d-flex align-items-center">
                      <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="../../dist/images/svgs/icon-dd-date.svg" alt="" class="img-fluid" width="24"
                          height="24">
                      </div>
                      <div class="d-inline-block">
                        <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                        <span class="fs-2 d-block fw-normal text-muted">Get dates</span>
                      </div>
                    </a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a href="#" class="d-flex align-items-center">
                      <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="../../dist/images/svgs/icon-dd-lifebuoy.svg" alt="" class="img-fluid" width="24"
                          height="24">
                      </div>
                      <div class="d-inline-block">
                        <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                        <span class="fs-2 d-block fw-normal text-muted">Add new contact</span>
                      </div>
                    </a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a href="#" class="d-flex align-items-center">
                      <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                        <img src="../../dist/images/svgs/icon-dd-application.svg" alt="" class="img-fluid" width="24"
                          height="24">
                      </div>
                      <div class="d-inline-block">
                        <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                        <span class="fs-2 d-block fw-normal text-muted">To-do and Daily tasks</span>
                      </div>
                    </a>
                  </li>
                  <ul class="px-8 mt-7 mb-4">
                    <li class="sidebar-item mb-3">
                      <h5 class="fs-5 fw-semibold">Quick Links</h5>
                    </li>
                    <li class="sidebar-item py-2">
                      <a class="fw-semibold text-dark" href="#">Pricing Page</a>
                    </li>
                    <li class="sidebar-item py-2">
                      <a class="fw-semibold text-dark" href="#">Authentication Design</a>
                    </li>
                    <li class="sidebar-item py-2">
                      <a class="fw-semibold text-dark" href="#">Register Now</a>
                    </li>
                    <li class="sidebar-item py-2">
                      <a class="fw-semibold text-dark" href="#">404 Error Page</a>
                    </li>
                    <li class="sidebar-item py-2">
                      <a class="fw-semibold text-dark" href="#">Notes App</a>
                    </li>
                    <li class="sidebar-item py-2">
                      <a class="fw-semibold text-dark" href="#">User Application</a>
                    </li>
                    <li class="sidebar-item py-2">
                      <a class="fw-semibold text-dark" href="#">Account Settings</a>
                    </li>
                  </ul>
                </ul>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="app-chat.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-message-dots"></i>
                  </span>
                  <span class="hide-menu">Chat</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="app-calendar.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-calendar"></i>
                  </span>
                  <span class="hide-menu">Calendar</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="app-email.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-mail"></i>
                  </span>
                  <span class="hide-menu">Email</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <!--  Search Bar -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
          <div class="modal-content rounded-1">
            <div class="modal-header border-bottom">
              <input type="search" class="form-control fs-3" placeholder="Search here" id="search" />
              <span data-bs-dismiss="modal" class="lh-1 cursor-pointer">
                <i class="ti ti-x fs-5 ms-3"></i>
              </span>
            </div>
            <div class="modal-body message-body" data-simplebar="">
              <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
              <ul class="list mb-0 py-2">
                <li class="p-1 mb-1 bg-hover-light-black">
                  <a href="#">
                    <span class="fs-3 text-black fw-normal d-block">Modern</span>
                    <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                  </a>
                </li>
                <li class="p-1 mb-1 bg-hover-light-black">
                  <a href="#">
                    <span class="fs-3 text-black fw-normal d-block">Dashboard</span>
                    <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                  </a>
                </li>
                <li class="p-1 mb-1 bg-hover-light-black">
                  <a href="#">
                    <span class="fs-3 text-black fw-normal d-block">Contacts</span>
                    <span class="fs-3 text-muted d-block">/apps/contacts</span>
                  </a>
                </li>
                <li class="p-1 mb-1 bg-hover-light-black">
                  <a href="#">
                    <span class="fs-3 text-black fw-normal d-block">Posts</span>
                    <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                  </a>
                </li>
                <li class="p-1 mb-1 bg-hover-light-black">
                  <a href="#">
                    <span class="fs-3 text-black fw-normal d-block">Detail</span>
                    <span
                      class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                  </a>
                </li>
                <li class="p-1 mb-1 bg-hover-light-black">
                  <a href="#">
                    <span class="fs-3 text-black fw-normal d-block">Shop</span>
                    <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                  </a>
                </li>
                <li class="p-1 mb-1 bg-hover-light-black">
                  <a href="#">
                    <span class="fs-3 text-black fw-normal d-block">Modern</span>
                    <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                  </a>
                </li>
                <li class="p-1 mb-1 bg-hover-light-black">
                  <a href="#">
                    <span class="fs-3 text-black fw-normal d-block">Dashboard</span>
                    <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                  </a>
                </li>
                <li class="p-1 mb-1 bg-hover-light-black">
                  <a href="#">
                    <span class="fs-3 text-black fw-normal d-block">Contacts</span>
                    <span class="fs-3 text-muted d-block">/apps/contacts</span>
                  </a>
                </li>
                <li class="p-1 mb-1 bg-hover-light-black">
                  <a href="#">
                    <span class="fs-3 text-black fw-normal d-block">Posts</span>
                    <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                  </a>
                </li>
                <li class="p-1 mb-1 bg-hover-light-black">
                  <a href="#">
                    <span class="fs-3 text-black fw-normal d-block">Detail</span>
                    <span
                      class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                  </a>
                </li>
                <li class="p-1 mb-1 bg-hover-light-black">
                  <a href="#">
                    <span class="fs-3 text-black fw-normal d-block">Shop</span>
                    <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--  Customizer -->
      <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
        type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="ti ti-settings fs-7" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Settings"></i>
      </button>
      <div class="offcanvas offcanvas-end customizer" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel" data-simplebar="">
        <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
          <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">Settings</h4>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-4">
          <div class="theme-option pb-4">
            <h6 class="fw-semibold fs-4 mb-1">Temas</h6>
            <div class="d-flex align-items-center gap-3 my-3">
              <a href="javascript:void(0)" onclick="toggleTheme('<?= base_url() ?>assets/dist/css/style.min.css')"
                class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 light-theme text-dark">
                <i class="ti ti-brightness-up fs-7 text-primary"></i>
                <span class="text-dark">Light</span>
              </a>
              <a href="javascript:void(0)" onclick="toggleTheme('<?= base_url() ?>assets/dist/css/style-dark.min.css')"
                class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 dark-theme text-dark">
                <i class="ti ti-moon fs-7 "></i>
                <span class="text-dark">Dark</span>
              </a>
            </div>
          </div>
          <div class="theme-colors pb-4">
            <h6 class="fw-semibold fs-4 mb-1">Theme Colors</h6>
            <div class="d-flex align-items-center gap-3 my-3">
              <ul class="list-unstyled mb-0 d-flex gap-3 flex-wrap change-colors">
                <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                  <a href="javascript:void(0)"
                    class="rounded-circle position-relative d-block customizer-bgcolor skin1-bluetheme-primary active-theme "
                    onclick="toggleTheme('../../dist/css/style.min.css')" data-color="blue_theme"
                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="BLUE_THEME"><i
                      class="ti ti-check text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                </li>
                <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                  <a href="javascript:void(0)"
                    class="rounded-circle position-relative d-block customizer-bgcolor skin6-orangetheme-primary"
                    onclick="toggleTheme('../../dist/css/style-orange.min.css')" data-bs-toggle="tooltip"
                    data-bs-placement="top" data-bs-title="ORANGE_THEME"><i
                      class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!--  Shopping Cart -->
      <div class="offcanvas offcanvas-end shopping-cart" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header py-4">
          <h5 class="offcanvas-title fs-5 fw-semibold" id="offcanvasRightLabel">Shopping Cart</h5>
          <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
        </div>
        <div class="offcanvas-body h-100 px-4 pt-0" data-simplebar>
          <ul class="mb-0">
            <li class="pb-7">
              <div class="d-flex align-items-center">
                <img src="../../dist/images/products/product-1.jpg" width="95" height="75"
                  class="rounded-1 me-9 flex-shrink-0" alt="" />
                <div>
                  <h6 class="mb-1">Supreme toys cooker</h6>
                  <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                  <div class="d-flex align-items-center justify-content-between mt-2">
                    <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                    <div class="input-group input-group-sm w-50">
                      <button class="btn border-0 round-20 minus p-0 bg-light-success text-success " type="button"
                        id="add1">
                        - </button>
                      <input type="text"
                        class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty"
                        placeholder="" aria-label="Example text with button addon" aria-describedby="add1" value="1" />
                      <button class="btn text-success bg-light-success  p-0 round-20 border-0 add" type="button"
                        id="addo2"> +
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="pb-7">
              <div class="d-flex align-items-center">
                <img src="../../dist/images/products/product-2.jpg" width="95" height="75"
                  class="rounded-1 me-9 flex-shrink-0" alt="" />
                <div>
                  <h6 class="mb-1">Supreme toys cooker</h6>
                  <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                  <div class="d-flex align-items-center justify-content-between mt-2">
                    <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                    <div class="input-group input-group-sm w-50">
                      <button class="btn border-0 round-20 minus p-0 bg-light-success text-success " type="button"
                        id="add2">
                        - </button>
                      <input type="text"
                        class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty"
                        placeholder="" aria-label="Example text with button addon" aria-describedby="add2" value="1" />
                      <button class="btn text-success bg-light-success  p-0 round-20 border-0 add" type="button"
                        id="addon34">
                        + </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="pb-7">
              <div class="d-flex align-items-center">
                <img src="../../dist/images/products/product-3.jpg" width="95" height="75"
                  class="rounded-1 me-9 flex-shrink-0" alt="" />
                <div>
                  <h6 class="mb-1">Supreme toys cooker</h6>
                  <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                  <div class="d-flex align-items-center justify-content-between mt-2">
                    <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                    <div class="input-group input-group-sm w-50">
                      <button class="btn border-0 round-20 minus p-0 bg-light-success text-success " type="button"
                        id="add3">
                        - </button>
                      <input type="text"
                        class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty"
                        placeholder="" aria-label="Example text with button addon" aria-describedby="add3" value="1" />
                      <button class="btn text-success bg-light-success  p-0 round-20 border-0 add" type="button"
                        id="addon3">
                        + </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <div class="align-bottom">
            <div class="d-flex align-items-center pb-7">
              <span class="text-dark fs-3">Sub Total</span>
              <div class="ms-auto">
                <span class="text-dark fw-semibold fs-3">$2530</span>
              </div>
            </div>
            <div class="d-flex align-items-center pb-7">
              <span class="text-dark fs-3">Total</span>
              <div class="ms-auto">
                <span class="text-dark fw-semibold fs-3">$6830</span>
              </div>
            </div>
            <a href="./eco-checkout.html" class="btn btn-outline-primary w-100">Go to shopping cart</a>
          </div>
        </div>
      </div>