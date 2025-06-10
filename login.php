<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2GetherEvent - Event Management</title>
    <link rel="stylesheet" href="src/output.css">
</head>
<body class="bg-[#f8fcff]">
    <main>
        <div class="flex justify-center gap-4 items-center min-h-screen p-4 relative">

            <!-- Left Panel - Login/Register Form -->
            <div class="bg-gray-100 flex flex-col justify-center gap-4 w-full max-w-md lg:w-[48vw] lg:max-w-none h-auto lg:h-[95vh] p-8 lg:p-14 py-12 rounded-3xl" id="left-banner">
                <h1 class="text-2xl font-bold" id="judul">2GetherEvent</h1>
                <h1 class="text-4xl font-bold">Selamat datang di 2GetherEvent</h1>
                <p class="text-gray-400">Lihat dan daftar di website resmi 2GetherEvent, agar anda mendapatkan benefit lebih!</p>
                
                <!-- Login Form -->
                <form method="POST" class="flex flex-col gap-4" id="loginForm"> 
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                    <div class="flex flex-col gap-1">
                        <label for="login-email" class="font-medium">Email</label>
                        <input type="email" id="login-email" name="email" placeholder="e.g example@gmail.com" class="border mx-2 border-gray-400 rounded-full px-6 py-2 focus:outline-none focus:ring-2 focus:ring-slate-500" required/>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="login-password" class="font-medium">Password</label>
                        <input type="password" id="login-password" name="password" placeholder="e.g user123" class="border mx-2 border-gray-400 rounded-full px-6 py-2 focus:outline-none focus:ring-2 focus:ring-slate-500" required/>
                    </div>
                    <button type="submit" name="login" class="bg-slate-900 px-6 py-2 rounded-full text-white hover:bg-slate-800 transition-colors duration-150">
                        Sign in
                    </button>
                </form>

                <!-- Register Form (Hidden by default) -->
                <form method="POST" class="flex flex-col gap-4" id="registerForm" style="display: none;">
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                    <div class="flex flex-col gap-1">
                        <label for="register-email" class="font-medium">Email</label>
                        <input type="email" id="register-email" name="email" placeholder="e.g example@gmail.com" class="border mx-2 border-gray-400 rounded-full px-6 py-2 focus:outline-none focus:ring-2 focus:ring-red-500" required/>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="register-password" class="font-medium">Password</label>
                        <input type="password" id="register-password" name="password" placeholder="Minimal 6 karakter" class="border mx-2 border-gray-400 rounded-full px-6 py-2 focus:outline-none focus:ring-2 focus:ring-red-500" required minlength="6"/>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="confirm-password" class="font-medium">Konfirmasi Password</label>
                        <input type="password" id="confirm-password" name="confirm_password" placeholder="Ulangi password" class="border mx-2 border-gray-400 rounded-full px-6 py-2 focus:outline-none focus:ring-2 focus:ring-red-500" required minlength="6"/>
                    </div>
                    <button type="submit" name="register" class="bg-red-600 px-6 py-2 rounded-full text-white hover:bg-red-700 transition-colors duration-150">
                        Sign up
                    </button>
                </form>

                <div class="flex items-center justify-center gap-2">
                    <div class="h-[1px] w-full bg-gray-500"></div>
                    <div class="text-gray-500"><p>or</p></div>
                    <div class="h-[1px] w-full bg-gray-500"></div>
                </div>
                
                <button type="button" id="toggleBtn" onclick="toggleForm()" class="border-[2px] border-red-600 px-6 py-2 rounded-full text-black bg-red-50 hover:bg-red-600 hover:text-white transition-colors duration-150">
                    Sign up
                </button>
            </div>

            <!-- Right Panel - Banner -->
            <div class="hidden lg:flex flex-col items-center gap-2 h-[95vh]" id="right-banner">
                <div id="bannerlogin" class="flex flex-col justify-between h-full w-[48vw] rounded-3xl">
                    <h1 class="text-3xl p-4">Tunjukkan bakat anda di 2GetherEvent agar anda lebih dikenal oleh banyak orang</h1>
                    <div class="bg-gray-600 bg-opacity-50 rounded-3xl p-2 flex flex-col gap-2 backdrop-blur-lg">
                        <div class="flex items-end justify-between">
                            <div class="flex items-center relative px-4">
                                <div class="h-12 w-12 rounded-full border-[2px] border-white absolute"></div>
                                <h2 class="text-lg border-[2px] border-white rounded-full py-2 px-5 text-center relative left-8">Creating</h2>
                            </div>
                            <div class="flex gap-2">
                                <div class="p-3 rounded-full border border-gray-400 w-fit rotate-90">
                                    <svg class="w-8 h-8 text-gray-400 rotate-45" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                    </svg>
                                </div>
                                <div class="p-3 rounded-full border border-white w-fit">
                                    <svg class="w-8 h-8 text-white -rotate-45" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <p class="p-4">Buat kreasi dan tampilkan di 2GetherEvent. Hal unik, menarik, dan lucu ada disini semua.</p>
                    </div>
                </div>
                <div class="flex justify-between items-center bg-gray-100 p-3 rounded-3xl w-[48vw]">
                    <div class="flex gap-4 lg:gap-16 items-center p-2">
                        <div class="relative flex items-center">
                            <div class="w-11 h-11 rounded-full bg-gray-300 border-2 border-white"></div>
                            <div class="w-11 h-11 rounded-full bg-gray-400 absolute left-7 border-2 border-white"></div>
                            <div class="w-11 h-11 rounded-full bg-gray-500 absolute left-14 border-2 border-white"></div>
                        </div>
                        <div>
                            <p class="text-sm">Bergabung acara 2GetherEvent di website resmi</p>
                            <p class="text-sm text-gray-500">Lebih cepat, lebih praktis!</p>
                        </div>
                    </div>
                    <div class="p-3 rounded-full border border-black w-fit">
                        <svg class="w-8 h-8 text-gray-800 -rotate-45" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <style>
        #bannerlogin {
            background: linear-gradient(45deg, #3b82f6, #8b5cf6);
            background-size: cover;
            background-position: center;
            color: white;
            padding: 12px;
        }
        
        @media (max-width: 1024px) {
            #right-banner {
                display: none !important;
            }
            #left-banner {
                width: 100% !important;
                max-width: 500px;
            }
        }
        
        @media (max-width: 664px) {
            #left-banner {
                border-radius: 0px;
                height: 100vh;
            }
        }
        
        @media (max-width: 396px) {
            #judul {
                display: none;
            }
        }

        #popup {
            transition: opacity 0.5s ease;
        }
        
        #popup.hide {
            opacity: 0;
        }
    </style>

    <script>
        function toggleForm() {
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            const toggleBtn = document.getElementById('toggleBtn');
            
            if (loginForm.style.display === 'none') {
                // Show login form
                loginForm.style.display = 'flex';
                registerForm.style.display = 'none';
                toggleBtn.textContent = 'Sign up';
                toggleBtn.className = 'border-[2px] border-red-600 px-6 py-2 rounded-full text-black bg-red-50 hover:bg-red-600 hover:text-white transition-colors duration-150';
            } else {
                // Show register form
                loginForm.style.display = 'none';
                registerForm.style.display = 'flex';
                toggleBtn.textContent = 'Sign in';
                toggleBtn.className = 'border-[2px] border-slate-600 px-6 py-2 rounded-full text-black bg-slate-50 hover:bg-slate-600 hover:text-white transition-colors duration-150';
            }
        }

        // Auto-hide popup messages after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const popup = document.getElementById("popup");
            if (popup) {
                setTimeout(function() {
                    popup.classList.add("hide");
                    setTimeout(() => {
                        popup.style.display = 'none';
                    }, 500);
                }, 5000);
            }
        });

        // Add client-side password confirmation validation
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            const password = document.querySelector('#register-password').value;
            const confirmPassword = document.querySelector('#confirm-password').value;
            
            if (password !== confirmPassword) {
                e.preventDefault();
                alert('Konfirmasi password tidak cocok!');
                return false;
            }
            
            if (password.length < 6) {
                e.preventDefault();
                alert('Password minimal 6 karakter!');
                return false;
            }
        });
    </script>
</body>
</html>