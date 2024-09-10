<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
  <meta charset="utf-8">
  <link href="<?= site_url('asset') ?>/admin/dist/images/logo.png" rel="shortcut icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="LEFT4CODE">
  <title><?= $title ?> | IEG</title>
  <!-- BEGIN: CSS Assets-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.css">
  <link rel="stylesheet" href="<?= site_url('asset') ?>/admin/dist/css/app.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
  </link>
  <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="login">
  <div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
      <!-- BEGIN: Login Info -->
      <div class="hidden xl:flex flex-col min-h-screen">
        <a href="" class="-intro-x flex items-center pt-5">
          <img alt="Midone - HTML Admin Template" class="w-6" style="width: auto; height: 40px" src="<?= site_url('asset') ?>/admin/dist/images/logo.png">
          <span class="text-white text-lg ml-3" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"> IEGCODE </span>
        </a>
        <div class="my-auto">
          <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="<?= site_url('asset') ?>/admin/dist/images/illustration.svg">
          <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
            A few more clicks to
            <br>
            sign in to your account.
          </div>
          <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Manage all your e-commerce accounts in one place</div>
        </div>
      </div>
      <!-- END: Login Info -->
      <!-- BEGIN: Login Form -->
      <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-0 xl:my-0">
        <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
          <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
            Sign In
          </h2>
          <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
          <form action="<?= site_url('welcome') ?>" method="post">
            <div class="intro-x mt-8">
              <input type="text" class="intro-x login__input form-control py-3 px-4 block" name="email" required autocomplete="off" placeholder="Email">
              <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" name="password" required autocomplete="off" placeholder="Password">
            </div>
            <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4 flex-col sm:flex-row" style="align-items: flex-start;">
              <div class="flex items-center mb-2 sm:mb-0 sm:mr-auto">
                <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
              </div>
              <div class="flex items-center ml-auto ml-auto-sm">
                <p class="select-none">Lupa Password?&nbsp;</p>
                <a href="https://wa.me/6285876076005?text=Hallo%20IEGCODE..." class="cursor-pointer select-none" style="color: blue;">Hub Admin 👨🏻‍💻</a>
              </div>
            </div>
            <style>
              @media screen and (max-width: 767px) {
                .ml-auto-sm {
                  margin-left: auto !important;
                  margin-top: -25px !important;
                }
              }
            </style>
            <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
              <button type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button>
              <a href="<?= site_url('register') ?>" class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Register</a>
            </div>
          </form>
            <hr class="mt-6">
          <button class="mt-5 gsi-material-button">
            <div class="gsi-material-button-state"></div>
            <div class="gsi-material-button-content-wrapper">
              <div class="gsi-material-button-icon">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: block;">
                  <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                  <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                  <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                  <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                  <path fill="none" d="M0 0h48v48H0z"></path>
                </svg>
              </div>
              <span class="gsi-material-button-contents">Continue with Google</span>
              <span style="display: none;">Continue with Google</span>
            </div>
          </button>
          <style>
            .gsi-material-button {
              -moz-user-select: none;
              -webkit-user-select: none;
              -ms-user-select: none;
              -webkit-appearance: none;
              background-color: #ffffff;
              /* Latar belakang putih */
              background-image: none;
              border: 1px solid #dcdcdc;
              /* Border abu-abu muda */
              border-radius: 20px;
              /* Radius sudut */
              box-sizing: border-box;
              color: #333333;
              /* Warna teks */
              cursor: pointer;
              font-family: 'Roboto', Arial, sans-serif;
              font-size: 14px;
              height: 48px;
              /* Lebar tombol */
              letter-spacing: 0.5px;
              /* Jarak huruf */
              outline: none;
              overflow: hidden;
              padding: 0 16px;
              /* Padding horizontal */
              position: relative;
              text-align: center;
              transition: background-color 0.3s, border-color 0.3s, box-shadow 0.3s;
              white-space: nowrap;
              width: auto;
              max-width: 400px;
              min-width: min-content;
            }

            .gsi-material-button:hover {
              background-color: #f1f1f1;
              /* Latar belakang saat hover */
              border-color: #bfbfbf;
              /* Warna border saat hover */
            }

            .gsi-material-button:focus {
              box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.2);
              /* Bayangan saat tombol fokus */
            }

            .gsi-material-button-state {
              display: none;
              /* Elemen ini mungkin tidak diperlukan, bisa dihapus */
            }

            .gsi-material-button-content-wrapper {
              display: flex;
              align-items: center;
              justify-content: center;
            }

            .gsi-material-button-icon {
              margin-right: 8px;
              /* Jarak antara ikon dan teks */
            }

            .gsi-material-button-contents {
              font-weight: 500;
              /* Berat font untuk teks tombol */
            }

            svg {
              width: 24px;
              /* Ukuran ikon */
              height: 24px;
            }
          </style>
          <div class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left"> By signin up, you agree to our <a class="text-primary dark:text-slate-200" href="">Terms and Conditions</a> & <a class="text-primary dark:text-slate-200" href="">Privacy Policy</a> </div>
        </div>
      </div>
      <!-- END: Login Form -->
    </div>
  </div>


  <!-- BEGIN: JS Assets-->
  <script src="<?= site_url('asset') ?>/admin/dist/js/app.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

  <?php if (@$_SESSION['sukses']) { ?>
    <script>
      swal("Good job!", "<?php echo $_SESSION['sukses']; ?>", "success");
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
  <?php unset($_SESSION['sukses']);
  } ?>


  <?php if (@$_SESSION['gagal']) { ?>
    <script>
      swal("Please Wait", "<?php echo $_SESSION['gagal']; ?>", "warning");
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
  <?php unset($_SESSION['gagal']);
  } ?>


  <?php if (@$_SESSION['pending']) { ?>
    <script>
      swal("Please Wait", "<?php echo $_SESSION['pending']; ?>", "warning");
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
  <?php unset($_SESSION['pending']);
  } ?>
  <!-- END: JS Assets-->
</body>

</html>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("form").addEventListener("submit", function(event) {
      event.preventDefault(); // Mencegah form submit secara default

      // Simulasi proses login
      // Di sini Anda bisa menambahkan logika untuk memeriksa kredensial, misalnya dengan AJAX request

      // Tampilkan pop-up "Anda berhasil login"
      Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: 'Anda berhasil login',
        confirmButtonText: 'OK'
      }).then(() => {
        // Setelah pop-up ditutup, lanjutkan ke halaman selanjutnya
        this.submit();
      });
    });
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.js"></script>