<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind & Alpine -->
    <script src="{{ asset('js/tailwind.js') }}"></script>
    <script src="{{ asset('js/alpine.min.js') }}" defer></script>

    <!-- Trix CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/2.0.0/trix.css">
    <!-- Trix JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/2.0.0/trix.umd.min.js"></script>


    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <style>
        [x-cloak] {
            display: none !important;
        }

        .page-exit {
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.4s ease-in-out;
        }

        .sidebar-link.active {
            background-color: #f3e8ff;
            color: #7e22ce;
        }
    </style>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body class="font-[Poppins] bg-gray-100 text-gray-800">
    <div class="flex h-screen overflow-hidden">
        @include('components.sidebar-admin')

        <main class="flex-1 overflow-y-auto">
            <div id="content">
                @yield('content')
            </div>

            <!-- Navigation & AJAX -->
            <script>
                const routeMap = {
                    '{{ route('admin.dashboard') }}': 'admin.dashboard',
                    '{{ route('admin.lowongan') }}': 'admin.lowongan',
                    '{{ route('admin.pengguna') }}': 'admin.pengguna',
                };

                const content = document.getElementById('content');

                const setActiveRoute = (route) => {
                    document.querySelectorAll('.sidebar-link').forEach(link =>
                        link.classList.toggle('active', link.dataset.route === route)
                    );
                };

                const extractRoute = (url) =>
                    Object.entries(routeMap).find(([fullUrl]) => url.startsWith(fullUrl))?.[1] || null;

                const loadPage = (url) => {
                    content.classList.add('page-exit');

                    setTimeout(async () => {
                        const html = await fetch(url, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        }).then(res => res.text());

                        const parser = new DOMParser();
                        const doc = parser.parseFromString(html, 'text/html');
                        const newContent = doc.querySelector('#content');
                        const newTitle = doc.querySelector('title');

                        if (newContent) {
                            content.innerHTML = newContent.innerHTML;
                            content.classList.remove('page-exit');
                            history.pushState({}, '', url);

                            // ✅ Update <title>
                            if (newTitle) document.title = newTitle.innerText;

                            // ✅ Re-init Alpine
                            window.Alpine?.initTree?.(content);

                            // ✅ Update sidebar state
                            setActiveRoute(extractRoute(url));
                        }
                    }, 400);
                };

                window.addEventListener('popstate', () => loadPage(location.href));

                document.addEventListener('DOMContentLoaded', () => {
                    const currentRoute = extractRoute(window.location.href);
                    if (currentRoute) setActiveRoute(currentRoute);
                });
            </script>

            <!-- ✅ SweetAlert -->
            @include('sweetalert::alert')
        </main>
    </div>
</body>

</html>
