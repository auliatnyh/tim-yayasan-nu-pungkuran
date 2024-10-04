<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleSignInButton() {
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const signInButton = document.getElementById('sign-in-button');

            // Enable the button if both inputs are filled
            if (emailInput.value !== '' && passwordInput.value !== '') {
                signInButton.classList.remove('opacity-50', 'cursor-not-allowed');
                signInButton.classList.add('hover:bg-green-800');
                signInButton.href = "/pendaftaran"; // Update link when ready
            } else {
                signInButton.classList.add('opacity-50', 'cursor-not-allowed');
                signInButton.classList.remove('hover:bg-green-800');
                signInButton.href = "#"; // Prevent navigation if fields are empty
            }
        }
    </script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="w-full max-w-4xl bg-white shadow-md rounded-lg overflow-hidden flex">
        <!-- Left side: Image -->
        <div class="w-1/2 bg-green-200">
            <img src="/img/login.png" alt="PPDB Image" class="w-full h-full object-cover">
        </div>

        <!-- Right side: Login Form -->
        <div class="w-1/2 p-8 flex flex-col justify-center">
            <div class="mb-4">
                <img src="/img/logo.png" alt="Logo" class="mx-auto" style="width: 3cm; height: 3cm;">
            </div>
            <h2 class="text-2xl font-bold text-center text-green-800 mb-6">PPDB Yayasan Nurul Ulum Pungkuran</h2>
            <p class="text-center text-gray-600 mb-6">Tahun Ajaran 2025/2026</p>
            <p class="text-center text-gray-700 mb-6">Buat akun untuk melanjutkan</p>
            
            <form action="/login" method="POST">
                <div class="mb-4">
                    <input type="email" id="email" name="email" placeholder="Email" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500" oninput="toggleSignInButton()">
                </div>
                <div class="mb-6">
                    <input type="password" id="password" name="password" placeholder="Password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-green-500" oninput="toggleSignInButton()">
                </div>
                <!-- Tombol SIGN IN yang dapat diakses hanya jika email dan password terisi -->
                <a id="sign-in-button" href="#" class="w-full bg-green-700 text-white py-2 rounded-lg text-center block opacity-50 cursor-not-allowed">
                    SIGN IN
                </a>
            </form>

            <p class="text-center text-gray-500 mt-4">Belum Punya Akun? <a href="/register" class="text-green-600 hover:underline">Buat Akun</a></p>
        </div>
    </div>
</body>
</html>
