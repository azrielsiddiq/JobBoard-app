<x-app-layout>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-4 max-w-lg text-center">
            <div class="text-red-500 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 9v2m0 4h.01M12 3a9 9 0 100 18 9 9 0 000-18z"/>
                </svg>
            </div>

            <h1 class="text-3xl font-bold text-red-600 mb-2">Akses Ditolak</h1>
            <p class="text-gray-600 dark:text-gray-300 mb-6">
                Anda tidak memiliki izin untuk mengakses halaman ini.<br>
                Silakan kembali ke halaman sebelumnya.
            </p>

            <a href="{{ url()->previous() }}"
               class="inline-block px-6 py-3 bg-blue-600 text-white text-sm font-semibold rounded-lg shadow-md hover:bg-blue-700 transition duration-200">
                 Kembali ke halaman sebelumnya
            </a>
        </div>
    </div>
</x-app-layout>
