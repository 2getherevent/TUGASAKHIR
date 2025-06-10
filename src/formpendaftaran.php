<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2GetherEvent - Login</title>
    <link rel="stylesheet" href="output.css">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }
    </style>
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <!-- Logo/Brand Section -->
        <div class="text-center mb-8">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-2 tracking-tight">
                2GetherEvent
            </h1>
            <p class="text-white/80 text-lg">Mari bergabung bersama kami!</p>
        </div>

        <!-- Login Form -->
        <div class="glass-effect rounded-2xl p-8 shadow-2xl">
            <form id="loginForm" class="space-y-6">
                <div class="text-center mb-6">
                    <h2 class="text-2xl font-semibold text-white mb-2">Masuk ke Akun Anda</h2>
                    <p class="text-white/70">Silakan isi data Anda untuk melanjutkan</p>
                </div>

                <!-- Nama Field -->
                <div class="space-y-2">
                    <label for="nama" class="block text-white font-medium text-sm">
                        Nama Lengkap
                    </label>
                    <div class="relative">
                        <input 
                            type="text" 
                            id="nama" 
                            name="nama" 
                            required
                            placeholder="Masukkan nama lengkap Anda"
                            class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all duration-300 backdrop-blur-sm"
                        >
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <svg class="h-5 w-5 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- No Telepon Field -->
                <div class="space-y-2">
                    <label for="telepon" class="block text-white font-medium text-sm">
                        No Telepon
                    </label>
                    <div class="relative">
                        <input 
                            type="tel" 
                            id="telepon" 
                            name="telepon" 
                            required
                            placeholder="Contoh: 08123456789"
                            pattern="[0-9]{10,13}"
                            class="w-full px-4 py-3 bg-white/20 border border-white/30 rounded-lg text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-red-400 focus:border-transparent transition-all duration-300 backdrop-blur-sm"
                        >
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <svg class="h-5 w-5 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-white/60 text-xs">Format: Gunakan nomor Indonesia (08xx-xxxx-xxxx)</p>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full bg-gradient-to-r from-red-500 to-blue-600 hover:from-red-600 hover:to-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 active:scale-95"
                >
                    <span class="flex items-center justify-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                        </svg>
                        <span>Masuk Sekarang</span>
                    </span>
                </button>

                <!-- Additional Links -->
                <div class="text-center pt-4 border-t border-white/20">
                    <p class="text-white/70 text-sm">
                        Belum punya akun? 
                        <a href="#" class="text-blue-300 hover:text-blue-200 font-medium underline transition-colors">
                            Daftar di sini
                        </a>
                    </p>
                </div>
            </form>
        </div>

        <!-- Footer -->
        <div class="text-center mt-8">
            <p class="text-white/60 text-sm">
                © 2025 2GetherEvent. Semua hak dilindungi.
            </p>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="successModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl p-8 max-w-sm w-full shadow-2xl transform transition-all">
            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Login Berhasil!</h3>
                <p class="text-gray-600 mb-6">Selamat datang di 2GetherEvent</p>
                <button 
                    onclick="closeModal()" 
                    class="bg-gradient-to-r from-red-500 to-blue-600 text-white px-6 py-2 rounded-lg hover:from-red-600 hover:to-blue-700 transition-all"
                >
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <script>
        // Form submission handler
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const nama = document.getElementById('nama').value;
            const telepon = document.getElementById('telepon').value;
            
            // Simple validation
            if (nama.trim().length < 2) {
                alert('Nama harus minimal 2 karakter');
                return;
            }
            
            if (!/^[0-9]{10,13}$/.test(telepon.replace(/\D/g, ''))) {
                alert('Nomor telepon tidak valid. Gunakan 10-13 digit angka.');
                return;
            }
            
            // Show success modal
            document.getElementById('successModal').classList.remove('hidden');
            
            // Store data (in real app, this would be sent to server)
            console.log('Login Data:', { nama, telepon });
        });

        // Phone number formatting
        document.getElementById('telepon').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 13) {
                value = value.slice(0, 13);
            }
            e.target.value = value;
        });

        // Close modal function
        function closeModal() {
            document.getElementById('successModal').classList.add('hidden');
            document.getElementById('loginForm').reset();
        }

        // Close modal when clicking outside
        document.getElementById('successModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Add floating animation to form
        const form = document.querySelector('.glass-effect');
        let mouseX = 0, mouseY = 0;

        document.addEventListener('mousemove', function(e) {
            mouseX = (e.clientX / window.innerWidth) * 2 - 1;
            mouseY = (e.clientY / window.innerHeight) * 2 - 1;
            
            form.style.transform = `perspective(1000px) rotateY(${mouseX * 2}deg) rotateX(${-mouseY * 2}deg)`;
        });
    </script>
</body>
</html>