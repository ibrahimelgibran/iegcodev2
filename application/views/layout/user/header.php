<!DOCTYPE html>
<!--
Template Name: iegcode - HTML Admin Dashboard Template
Author: iegcode
Website: http://www.iegcode.my.id/
Contact: iegcodeid@gmail.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="<?= site_url('asset') ?>/admin/dist/images/logo.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title><?= $title ?> | IEGCODE</title>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="<?= site_url('asset') ?>/admin/dist/css/app.css" />
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-kmbmTlxtNRFjaL3L"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="main">



    <!-- BEGIN: Mobile Menu -->
    <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="" class="flex mr-auto">
                <img alt="IEG PHOTO" class="w-6" style="width: auto; height: 40px" src="<?= site_url('asset') ?>/admin/dist/images/logo.png">
            </a>
            <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        </div>
        <div class="scrollable">
            <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            <ul class="scrollable__content py-2">
                <li>
                    <a href="<?= base_url('dashboard') ?>" class="menu">
                        <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                        <div class="side-menu__title" style="margin-left: 10px;">
                            Dashboard
                            <div class="side-menu__sub-icon transform rotate-180"> </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('order') ?>" class="menu">
                        <div class="side-menu__icon"> <i data-lucide="shopping-bag"></i> </div>
                        <div class="side-menu__title" style="margin-left: 10px;">
                            Order History
                            <div class="side-menu__sub-icon "></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('bill') ?>" class="menu">
                        <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                        <div class="side-menu__title" style="margin-left: 10px;"> Billing History </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('pay') ?>" class="menu">
                        <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                        <div class="side-menu__title" style="margin-left: 10px;"> Invoice History </div>
                    </a>
                </li>
                <li>
                    <a href="https://wa.me/6285876076005?text=Hallo%20IEGCODE..." class="menu">
                        <div class="side-menu__icon"> <i data-lucide="message-square-text"></i> </div>
                        <div class="side-menu__title" style="margin-left: 10px;"> Live Chat </div>
                    </a>
                </li>
                <li>
                    <a href="https://profile.iegcode.com" class="menu">
                        <div class="side-menu__icon"> <i data-lucide="globe"></i> </div>
                        <div class="side-menu__title" style="margin-left: 10px;">What is IEGCODE?</div>
                    </a>
                </li>
                <li>
                    <a href="https://donasin.vercel.app" class="menu">
                        <div class="side-menu__icon"> <i data-lucide="hand-heart"></i> </div>
                        <div class="side-menu__title" style="margin-left: 10px;"> OPEN DONASI</div>
                    </a>
                </li>
                <li>
                    <a href="https://chat-cici.vercel.app" class="menu">
                        <div class="side-menu__icon"> <i data-lucide="bot-message-square"></i> </div>
                        <div class="side-menu__title" style="margin-left: 10px;"> CHAT AI by Cici</div>
                    </a>
                </li>
                <li>
                    <a href="https://ieggame.vercel.app" class="menu">
                        <div class="side-menu__icon"> <i data-lucide="gamepad-2"></i> </div>
                        <div class="side-menu__title" style="margin-left: 10px;"> MAIN GAME GRATIS </div>
                    </a>
                </li>
                <li class="side-nav__devider my-6"></li>
                <li>
                    <a href="<?= base_url('profile') ?>" class="menu">
                        <div class="side-menu__icon"> <i data-lucide="settings"></i> </div>
                        <div class="side-menu__title" style="margin-left: 10px;"> Settings </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('change_password') ?>" class="menu">
                        <div class="side-menu__icon"> <i data-lucide="lock"></i> </div>
                        <div class="side-menu__title" style="margin-left: 10px;"> Change Password </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Mobile Menu -->
    <!-- BEGIN: Top Bar -->
    <div class="top-bar-boxed h-[70px] z-[51] relative border-b border-white/[0.08] mt-12 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
        <div class="h-full flex items-center">
            <!-- BEGIN: Logo -->
            <a href="" class="-intro-x hidden md:flex">
                <img alt="IEG PHOTO" class="w-6" style="width: auto; height: 30px" src="<?= site_url('asset') ?>/admin/dist/images/logo.png">
                <span class="text-white text-lg ml-3" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"> IEGCODE </span>
            </a>
            <!-- END: Logo -->
            <!-- BEGIN: Breadcrumb -->
            <nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
                <ol class="breadcrumb breadcrumb-light">
                    <li class="breadcrumb-item"><a href=""><?= $title ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="<?= site_url('admin/dashboard') ?>"></a>Dashboard</li>
                </ol>
            </nav>
            <!-- END: Breadcrumb -->

            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown mr-4 sm:mr-6">
                <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="shopping-cart" class="notification__icon dark:text-slate-500"></i> </div>
                <div class="notification-content pt-2 dropdown-menu">
                    <div class="notification-content__box dropdown-content">
                        <div class="notification-content__title"> <?php $keranjang = 'Shopping Cart : ' . $this->cart->total_items() . ' items ' ?>&nbsp; <?php echo $keranjang ?></div>

                        <?php foreach ($this->cart->contents() as $items) : ?>
                            <div class="cursor-pointer relative flex items-center ">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="IEG PHOTO" class="rounded-full" src="<?= base_url() . '/uploads/' . $items['options']['gambar']; ?>">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5"> <?php echo $items['name']; ?> &nbsp; <small>x <?php echo $items['qty']; ?></small></a>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5"><?php echo $items['options']['keterangan']; ?> </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <br>
                        <hr>
                        <button class="btn btn-sm btn-rounded-primary mt-4"><span class="text-uppercase"><a href="<?= site_url('dashboard/detail_cart') ?>">DETAIL CART</a></span></button>
                    </div>
                </div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                    <?php
                    $avatar = $this->session->userdata('avatar');
                    if (!$avatar) {
                        $avatar = 'user.png'; // Gambar default
                    }
                    ?>
                    <img class="rounded-full" src="<?= base_url('uploads/profiles/' . $avatar) ?>">
                </div>
                <div class="dropdown-menu w-56">
                    <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                        <li class="p-2">
                            <div class="font-medium"> <?php echo $this->session->userdata('nama_user') ?></div>
                            <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500"> <?php echo $this->session->userdata('email') ?></div>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="<?= site_url('profile') ?>" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> My Profile </a>
                        </li>
                        <li>
                            <a href="<?= site_url('change_password') ?>" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="<?= site_url('') ?>" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
    </div>
    <!-- END: Top Bar -->

    <!-- Sidebar Aplikasi -->

    <div class="wrapper">
        <div class="wrapper-box">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <ul>
                    <li>
                        <a href="<?= base_url('dashboard') ?>" class="side-menu side-menu">
                            <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard
                                <div class="side-menu__sub-icon transform rotate-180"> </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('order') ?>" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="shopping-bag"></i> </div>
                            <div class="side-menu__title">
                                Order History
                                <div class="side-menu__sub-icon "></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('bill') ?>" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                            <div class="side-menu__title"> Billing History </div>
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url('pay') ?>" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                            <div class="side-menu__title"> Invoice History </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/6285876076005?text=Hallo%20IEGCODE..." class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="message-square-text"></i> </div>
                            <div class="side-menu__title"> Live Chat </div>
                        </a>
                    </li>
                    <li class="side-nav__devider my-6"></li>
                    <li>
                        <a href="https://profile.iegcode.com" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="globe"></i> </div>
                            <div class="side-menu__title">What is IEGCODE? </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://donasin.vercel.app" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="hand-heart"></i> </div>
                            <div class="side-menu__title">OPEN DONASI </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://chat-cici.vercel.app" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="bot-message-square"></i> </div>
                            <div class="side-menu__title">CHAT AI by Cici</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://ieggame.vercel.app/" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="gamepad-2"></i> </div>
                            <div class="side-menu__title">MAIN GAME GRATIS </div>
                        </a>
                    </li>
                    <li class="side-nav__devider my-6"></li>
                    <li>
                        <a href="<?= base_url('profile') ?>" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="settings"></i> </div>
                            <div class="side-menu__title"> Settings </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('change_password') ?>" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="lock"></i> </div>
                            <div class="side-menu__title"> Change Password </div>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- END: Side Menu -->


            <footer>
                made with ❤️ by
                <a href="http://ibrahimelgibran.com">iegcode </a>
                <style>
                    footer {
                        color: #fff;
                        margin-bottom: -70px;
                        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                        text-align: center;
                        font-size: 15px;
                        position: fixed;
                        padding: 20px 0;
                        font-weight: bold;
                        bottom: 0;
                        width: 100%;
                    }

                    @media (max-width: 768spx) {
                        footer {
                            margin-left: 0;
                            /* Reset margin-left */
                        }
                    }
                </style>
            </footer>
            <script>
                lucide.createIcons();
            </script>