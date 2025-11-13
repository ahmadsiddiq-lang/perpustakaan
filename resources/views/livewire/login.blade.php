<div class="bg-gray-50 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-md p-8">
        <h2 class="text-center text-3xl font-bold text-gray-800 mb-6">Perpustakaan</h2>
    
        {{-- Alert jika ada error dari server --}}
        @if (session('error'))
            <div class="mb-4 text-sm text-red-600 bg-red-100 border border-red-300 rounded p-3">
                {{ session('error') }}
            </div>
        @endif
    
        <form method="POST" action="" class="space-y-5">
            @csrf
    
            {{-- Email --}}
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>
    
            {{-- Password --}}
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                @error('password')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>
    
            {{-- Remember me + Lupa password --}}
            <div class="flex items-center justify-between">
                <label class="flex items-center text-sm text-gray-600">
                    <input type="checkbox" name="remember" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <span class="ml-2">Ingat saya</span>
                </label>
                <a href="" class="text-sm text-indigo-600 hover:text-indigo-500">Lupa password?</a>
            </div>
    
            {{-- Tombol Login --}}
            <button type="submit"
                class="w-full bg-indigo-600 text-white font-medium py-2 px-4 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition">
                Masuk
            </button>
    
            {{-- Link ke halaman register --}}
            <p class="text-center text-sm text-gray-600 mt-4">
                Belum punya akun?
                <a href="" class="text-indigo-600 hover:text-indigo-500 font-medium">
                    Daftar Sekarang
                </a>
            </p>
        </form>
    </div>
</div>