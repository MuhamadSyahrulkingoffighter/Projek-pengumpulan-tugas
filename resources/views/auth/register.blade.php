<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register - Animex</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: #f6f5f7;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
                  0 10px 10px rgba(0, 0, 0, 0.22);
      width: 900px;
      max-width: 100%;
      min-height: 540px;
      display: flex;
      overflow: hidden;
    }

    .info-panel {
      background: linear-gradient(135deg, #a18cd1, #fbc2eb);
      color: white;
      flex: 1;
      padding: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      border-top-left-radius: 12px;
      border-bottom-left-radius: 12px;
    }

    .info-panel h1 {
      font-size: 28px;
      margin-bottom: 16px;
    }

    .info-panel p {
      font-size: 16px;
      margin-bottom: 30px;
    }

    .info-panel button {
      padding: 12px 28px;
      border: none;
      border-radius: 25px;
      background-color: #00b09b;
      color: white;
      font-weight: 600;
      font-size: 16px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .info-panel button:hover {
      background-color: #01917a;
      transform: scale(1.05);
    }

    .form-panel {
      flex: 1;
      padding: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .form-panel h1 {
      text-align: center;
      font-size: 26px;
      margin-bottom: 20px;
      color: #333;
    }

    .social-container {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .social-container a {
      width: 40px;
      height: 40px;
      margin: 0 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #eee;
      border-radius: 50%;
      color: #333;
      font-size: 18px;
      text-decoration: none;
      transition: 0.3s;
    }

    .social-container a:hover {
      background-color: #00b09b;
      color: white;
    }

    form {
      max-width: 340px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
    }

    input {
      background: #eee;
      border: none;
      padding: 12px 18px;
      margin: 10px 0;
      border-radius: 25px;
      font-size: 15px;
      transition: background-color 0.3s ease;
    }

    input:focus {
      background-color: #ddd;
      outline: none;
    }

    button[type="submit"] {
      margin-top: 20px;
      padding: 12px;
      background-color: #00b09b;
      color: white;
      font-weight: 600;
      border: none;
      border-radius: 25px;
      font-size: 16px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #01917a;
      transform: scale(1.05);
    }

    .form-panel a {
      margin-top: 20px;
      text-align: center;
      color: #00b09b;
      text-decoration: none;
      font-weight: 600;
    }

    .form-panel a:hover {
      text-decoration: underline;
    }

    .error-message, .success-message {
      padding: 12px;
      border-radius: 10px;
      font-size: 15px;
      text-align: center;
      margin-bottom: 15px;
    }

    .error-message {
      background: #ff4d6d;
      color: white;
    }

    .success-message {
      background: #4caf50;
      color: white;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        width: 90%;
        min-height: auto;
      }

      .info-panel, .form-panel {
        border-radius: 0;
        padding: 30px;
      }

      .info-panel {
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
      }

      .form-panel {
        border-bottom-left-radius: 12px;
        border-bottom-right-radius: 12px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="info-panel">
      <h1>Halo, Teman!</h1>
      <p>Daftarkan diri anda dan mulai gunakan layanan kami segera</p>
      <button onclick="window.location.href='{{ route('login') }}'">Sign In</button>
    </div>
    <div class="form-panel">
      <h1>Register</h1>
      <div class="social-container">
        <a href="#" title="Facebook">f</a>
        <a href="#" title="Google">G+</a>
        <a href="#" title="LinkedIn">in</a>
      </div>

      {{-- Notifikasi Error --}}
      @if ($errors->any())
        <div class="error-message">
          {{ $errors->first() }}
        </div>
      @endif

      {{-- Form Register --}}
      <form method="POST" action="{{ route('register') }}" autocomplete="off">
        @csrf
        <input type="text" name="name" placeholder="Full Name" required value="{{ old('name') }}" />
        <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}" />
        <input type="password" name="password" placeholder="Password" required />
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required />
        <button type="submit">Register</button>
      </form>

      <a href="{{ route('login') }}">Sudah punya akun? Masuk di sini</a>
    </div>
  </div>
</body>
</html>
