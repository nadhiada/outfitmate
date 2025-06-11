<?php
session_start();
$error_message = '';
if (isset($_SESSION['error_message'])) {
    $error_message = $_SESSION['error_message'];
    unset($_SESSION['error_message']);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - WebsiteKu</title>
    <link rel="stylesheet" href="register.css">
    <style>
        .modal {
      display: none; /* Modal disembunyikan secara default */
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4); /* Latar belakang transparan */
      padding-top: 60px;
    }

    .modal-content {
      background-color: #fff;
      margin: 5% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      max-width: 500px;
      border-radius: 8px;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    .error-box {
      color: #cc0000;
    }
    </style>
</head>
<body>
    <!-- Modal untuk Error -->
    <div id="errorModal" class="modal">
        <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <h2 class="error-box">Terjadi Kesalahan:</h2>
        <p><?= $error_message ?></p>
        </div>
    </div>
    <div class="container">
        <div class="register-card">
            <div class="logo">
                <h1>Outfit<span>Mate</span></h1>
            </div>
            <div class="register-form">
                <h2>Buat Akun Baru</h2>
                <form action="process-register.php" method="POST">
                    <div class="input-row">
                        <div class="input-group">
                            <label for="first-name">Nama Depan</label>
                            <input type="text" name="firstname" id="first_name" placeholder="Nama depan" required>
                        </div>
                        <div class="input-group">
                            <label for="last-name">Nama Belakang</label>
                            <input type="text" name="lastname" id="last_name" placeholder="Nama belakang" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Masukkan email Anda" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" name="password" id="password" placeholder="Buat kata sandi" required>
                        <div class="password-requirements">
                            Minimal 8 karakter dengan kombinasi huruf, angka, dan simbol
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="confirm-password">Konfirmasi Kata Sandi</label>
                        <input type="password" name="confirm_password" id="confirm-password" placeholder="Konfirmasi kata sandi" required>
                    </div>
                    <div class="terms">
                        <input type="checkbox" name="terms" id="terms" required>
                        <label for="terms">
                            Saya menyetujui <a href="#">Syarat & Ketentuan</a> dan <a href="#">Kebijakan Privasi</a>
                        </label>
                    </div>
                    <button type="submit" class="btn-register">Daftar</button>
                </form>
                <div class="login">
                    Sudah punya akun? <a href="../login/login.html">Masuk di sini</a>
                </div>
                <div class="social-register">
                    <p>Atau daftar melalui</p>
                    <div class="social-icons">
                        <div class="social-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#4267B2">
                                <path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127c-.82-.088-1.643-.13-2.467-.127-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"></path>
                            </svg>
                        </div>
                        <div class="social-icon">
                            <a href="../login/google_login.php" target="blank" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#DB4437">
                                    <path d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="social-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#1DA1F2">
                                <path d="M23.643 4.937c-.835.37-1.732.62-2.675.733a4.67 4.67 0 0 0 2.048-2.578 9.3 9.3 0 0 1-2.958 1.13 4.66 4.66 0 0 0-7.938 4.25 13.229 13.229 0 0 1-9.602-4.868c-.4.69-.63 1.49-.63 2.342A4.66 4.66 0 0 0 3.96 9.824a4.647 4.647 0 0 1-2.11-.583v.06a4.66 4.66 0 0 0 3.737 4.568 4.692 4.692 0 0 1-2.104.08 4.661 4.661 0 0 0 4.352 3.234 9.348 9.348 0 0 1-5.786 1.995 9.5 9.5 0 0 1-1.112-.065 13.175 13.175 0 0 0 7.14 2.093c8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602a9.47 9.47 0 0 0 2.323-2.41z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    // Cek jika ada error message
    <?php if (!empty($error_message)): ?>
      // Jika ada error, tampilkan modal
      var modal = document.getElementById("errorModal");
      var closeModal = document.getElementById("closeModal");
      modal.style.display = "block";

      // Tutup modal jika klik tombol close
      closeModal.onclick = function() {
        modal.style.display = "none";
      }

      // Tutup modal jika klik di luar modal
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    <?php endif; ?>
  </script>
</body>
</html>