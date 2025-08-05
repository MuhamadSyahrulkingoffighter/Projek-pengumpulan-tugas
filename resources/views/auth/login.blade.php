
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(to right, #f8f9fa, #e0eafc);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
      width: 920px;
      max-width: 100%;
      display: flex;
      overflow: hidden;
    }

    .form-panel {
      flex: 1;
      padding: 60px 50px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    h1 {
      font-size: 34px;
      font-weight: 700;
      margin-bottom: 20px;
      color: #333;
    }

    .social-container {
      margin-bottom: 25px;
    }

    .social-container a {
      border: 1px solid #ccc;
      border-radius: 50%;
      display: inline-flex;
      justify-content: center;
      align-items: center;
      margin-right: 12px;
      height: 42px;
      width: 42px;
      color: #555;
      text-decoration: none;
      font-size: 18px;
      transition: all 0.3s ease;
    }

    .social-container a:hover {
      background-color: #00b09b;
      color: #fff;
      transform: scale(1.1);
    }

    span {
      display: block;
      margin-bottom: 20px;
      color: #777;
      font-size: 16px;
    }

    input {
      width: 100%;
      padding: 14px 18px;
      margin-bottom: 18px;
      border: 1px solid #ccc;
      border-radius: 30px;
      font-size: 16px;
      outline: none;
      background-color: #f9f9f9;
      transition: 0.3s ease;
    }

    input:focus {
      background-color: #fff;
      border-color: #00b09b;
      box-shadow: 0 0 0 3px rgba(0, 176, 155, 0.2);
    }

    .forgot-password {
      font-size: 14px;
      color: #999;
      margin-bottom: 25px;
      text-align: right;
    }

    .forgot-password a {
      color: inherit;
      text-decoration: none;
    }

    .forgot-password a:hover {
      text-decoration: underline;
    }

    button {
      width: 180px;
      padding: 14px 0;
      border: none;
      border-radius: 25px;
      background-color: #00b09b;
      color: white;
      font-weight: 700;
      font-size: 17px;
      cursor: pointer;
      transition: all 0.3s ease;
      align-self: flex-start;
    }

    button:hover {
      background-color: #01917a;
      transform: scale(1.05);
    }

    .error-message {
      background: #ff4d6d;
      padding: 10px;
      border-radius: 8px;
      margin-bottom: 15px;
      font-size: 14px;
      color: white;
      text-align: center;
    }

    .info-panel {
      background: linear-gradient(135deg, #a18cd1, #fbc2eb);
      color: white;
      flex: 1;
      padding: 60px 50px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      text-align: center;
    }

    .info-panel h1 {
      font-size: 34px;
      font-weight: 700;
      margin-bottom: 15px;
    }

    .info-panel p {
      font-size: 18px;
      margin-bottom: 30px;
    }

    .info-panel button {
      width: 180px;
      padding: 14px 0;
      border: none;
      border-radius: 25px;
      background-color: #00b09b;
      color: white;
      font-weight: 700;
      font-size: 17px;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.3s ease;
      align-self: center;
    }

    .info-panel button:hover {
      background-color: #01917a;
      transform: scale(1.05);
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        width: 95%;
      }

      .info-panel {
        border-radius: 0 0 16px 16px;
        padding: 40px;
      }

      .form-panel {
        padding: 40px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="form-panel">
      <h1>Sign In</h1>
      <div class="social-container">
        <a href="#" title="Facebook">f</a>
        <a href="#" title="Google">G+</a>
        <a href="#" title="LinkedIn">in</a>
      </div>
      <span>atau gunakan akun anda</span>

      @if (session('status'))
          <div class="error-message">{{ session('status') }}</div>
      @endif

      @if ($errors->any())
          <div class="error-message">
              {{ $errors->first() }}
          </div>
      @endif

      <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}" />
        <input type="password" name="password" placeholder="Password" required />
        <div class="forgot-password">
          <a href="{{ route('password.request') }}">Lupa kata sandi anda?</a>
        </div>
        <button type="submit">Sign In</button>
      </form>
    </div>
    <div class="info-panel">
      <h1>Halo, Teman!</h1>
      <p>Daftarkan diri anda dan mulai gunakan layanan kami segera</p>
      <button onclick="window.location.href='{{ route('register') }}'">Sign Up</button>
    </div>
  </div>
</body>
</html>