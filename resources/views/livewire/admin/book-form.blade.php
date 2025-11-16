<div class="min-h-screen bg-purple-50 p-6">
    <!-- Header -->
    <div class="flex items-center justify-between mb-8">
        <div class="flex items-center space-x-3">
            <img src="https://cdn-icons-png.flaticon.com/512/29/29302.png" alt="Library Logo" class="w-12 h-12">
            <h1 class="text-3xl font-bold text-purple-800">Library Admin</h1>
        </div>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-lg shadow p-6 max-w-3xl mx-auto">
        <h2 class="text-2xl font-semibold text-purple-700 mb-6">Form Buku</h2>

        <form wire:submit.prevent="save">
            <!-- Judul -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul Buku</label>
                <input type="text" id="title" wire:model.defer="title"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-300"
                    placeholder="Masukkan judul buku">
                @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Penulis -->
            <div class="mb-4">
                <label for="author" class="block text-sm font-medium text-gray-700 mb-1">Penulis</label>
                <input type="text" id="author" wire:model.defer="author"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-300"
                    placeholder="Masukkan nama penulis">
                @error('author') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Tahun Terbit -->
            <div class="mb-4">
                <label for="year" class="block text-sm font-medium text-gray-700 mb-1">Tahun Terbit</label>
                <input type="number" id="year" wire:model.defer="year"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-300"
                    placeholder="Contoh: 2020">
                @error('year') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Stok -->
            <div class="mb-4">
                <label for="stock" class="block text-sm font-medium text-gray-700 mb-1">Jumlah Stok</label>
                <input type="number" id="stock" wire:model.defer="stock"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-300"
                    placeholder="Contoh: 10">
                @error('stock') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Cover (Opsional) -->
            <div class="mb-6">
                <label for="cover" class="block text-sm font-medium text-gray-700 mb-1">URL Gambar Cover (Opsional)</label>
                <input type="text" id="cover" wire:model.defer="cover"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-300"
                    placeholder="https://...">
                @error('cover') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Tombol -->
            <div class="flex justify-end space-x-3">
                <a wire:navigate
                    href="/admin"
                    class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition">
                    Batal
                </a>
                <button type="submit"
                    class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition">
                    Simpan Buku
                </button>
            </div>
        </form>
    </div>
</div>