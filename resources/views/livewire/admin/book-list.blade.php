<div class="min-h-screen bg-purple-50 p-6">
    <!-- Header -->
    <div class="flex items-center justify-between mb-8">
        <div class="flex items-center space-x-3">
            <img src="https://cdn-icons-png.flaticon.com/512/29/29302.png" alt="Library Logo" class="w-12 h-12">
            <h1 class="text-3xl font-bold text-purple-800">Library</h1>
        </div>
    </div>

    <!-- Title & Controls -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
            <h2 class="text-2xl font-semibold text-purple-700 mb-4 md:mb-0">Daftar Buku</h2>
            <div class="flex space-x-3">
                <input
                    type="text"
                    placeholder="Cari judul atau penulis..."
                    class="px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-300"
                />
                <button  
                    wire:navigate
                    href="/admin/book-form"
                    class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition cursor-pointer">
                    + Tambah Buku
                </button>
            </div>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow-sm">
                <thead class="bg-purple-100 text-purple-800">
                    <tr>
                        <th class="px-4 py-2 text-left">Judul</th>
                        <th class="px-4 py-2 text-left">Penulis</th>
                        <th class="px-4 py-2 text-left">Tahun</th>
                        <th class="px-4 py-2 text-left">Stok</th>
                        <th class="px-4 py-2 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr class="border-b hover:bg-purple-50">
                        <td class="px-4 py-2">The Intelligent Investor</td>
                        <td class="px-4 py-2">Benjamin Graham</td>
                        <td class="px-4 py-2">1949</td>
                        <td class="px-4 py-2">12</td>
                        <td class="px-4 py-2 space-x-2">
                            <button class="px-3 py-1 bg-orange-500 text-white rounded hover:bg-orange-600 text-sm">Edit</button>
                            <button class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 text-sm">Hapus</button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-purple-50">
                        <td class="px-4 py-2">Sapiens: A Brief History of Humankind</td>
                        <td class="px-4 py-2">Yuval Noah Harari</td>
                        <td class="px-4 py-2">2015</td>
                        <td class="px-4 py-2">10</td>
                        <td class="px-4 py-2 space-x-2">
                            <button class="px-3 py-1 bg-orange-500 text-white rounded hover:bg-orange-600 text-sm">Edit</button>
                            <button class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 text-sm">Hapus</button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-purple-50">
                        <td class="px-4 py-2">Harry Potter and the Philosopher's Stone</td>
                        <td class="px-4 py-2">J.K. Rowling</td>
                        <td class="px-4 py-2">1997</td>
                        <td class="px-4 py-2">8</td>
                        <td class="px-4 py-2 space-x-2">
                            <button class="px-3 py-1 bg-orange-500 text-white rounded hover:bg-orange-600 text-sm">Edit</button>
                            <button class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 text-sm">Hapus</button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-purple-50">
                        <td class="px-4 py-2">To Kill a Mockingbird</td>
                        <td class="px-4 py-2">Harper Lee</td>
                        <td class="px-4 py-2">1960</td>
                        <td class="px-4 py-2">5</td>
                        <td class="px-4 py-2 space-x-2">
                            <button class="px-3 py-1 bg-orange-500 text-white rounded hover:bg-orange-600 text-sm">Edit</button>
                            <button class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 text-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-6 text-sm text-gray-600 text-center">
            Showing 1 to 4 of 4 entries
        </div>
    </div>
</div>