<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100">
    <div class="flex">

        <br>
        <aside class="w-64 bg-white shadow-md min-h-screen p-3">
            <img src="{{ asset('images/Logo Horizontal.png') }}" alt="">
            <br>

            <nav class="mt-2">
                <ul>
                    <li class="mb-1">
                        <a href="{{ route('admin.dashboard') }}"
                            class="flex items-center p-3 rounded hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2d2d2d"
                                viewBox="0 0 24 24">
                                <path d="M3 3h8v8H3V3zm10 0h8v8h-8V3zM3 13h8v8H3v-8zm10 0h8v8h-8v-8z" />
                            </svg> Dashboard
                        </a>
                    </li>
                    <li class="mb-1">
                        <a href="/account-management" class="flex items-center p-3 rounded hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2d2d2d"
                                viewBox="0 0 24 24">
                                <path
                                    d="M4 2h14l4 4v16a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm13 7h-5v2h5V9zm0 4h-5v2h5v-2zM7 9l2 2 4-4-1.41-1.42L9 8.17 8.41 7.59 7 9z" />
                            </svg> Managemen Akun
                        </a>
                    </li>
                    <li class="mb-1">
                        <a href="/teacher-data" class="flex items-center p-3 rounded hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2d2d2d"
                                viewBox="0 0 24 24">
                                <path
                                    d="M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />

                            </svg> Data Guru
                        </a>
                    </li>
                    <li class="mb-1">
                        <a href="/student-data" class="flex items-center p-3 rounded hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2d2d2d"
                                viewBox="0 0 24 24">
                                <path
                                    d="M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                            </svg> Data Siswa
                        </a>
                    </li>
                    <li class="mb-1">
                        <a href="/learning-materials-data" class="flex items-center p-3 rounded hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2d2d2d"
                                viewBox="0 0 24 24">
                                <path
                                    d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2v-8h-2v8H6V4h8V2zm3.79 2.79-5.5 5.5 1.42 1.42 5.5-5.5V10h2V2h-8v2h4.58z" />
                            </svg>Data Materi
                        </a>
                    </li>
                    <li class="mb-1">
                        <a href="/class-data" class="flex items-center p-3 rounded hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2d2d2d"
                                viewBox="0 0 24 24">
                                <path
                                    d="M11 17h2v-6h-2v6zm0-8h2V7h-2v2zm1-7C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z" />
                            </svg> Data kelas
                        </a>
                    </li>


                    <br>
                    <br>
                    <li class="mb-2">
                        <a href="#" class="flex items-center p-3 rounded hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2d2d2d"
                                viewBox="0 0 24 24">
                                <path d="M19.14,12.94c0.04-0.31,0.06-0.63,0.06-0.94s-0.02-0.63-0.06-0.94l2.03-1.58c0.18-0.14,0.23-0.4,0.12-0.61l-1.92-3.32
                                c-0.11-0.2-0.36-0.28-0.58-0.22l-2.39,0.96c-0.5-0.38-1.05-0.7-1.66-0.94L14.5,2.81C14.48,2.6,14.29,2.45,14.07,2.45h-4.14
                                c-0.22,0-0.41,0.15-0.43,0.36l-0.36,2.43c-0.61,0.24-1.17,0.56-1.66,0.94L5.09,5.22C4.87,5.14,4.62,5.21,4.51,5.41L2.59,8.73
                                c-0.11,0.21-0.06,0.47,0.12,0.61l2.03,1.58C4.66,11.37,4.64,11.69,4.64,12s0.02,0.63,0.06,0.94L2.67,14.52
                                c-0.18,0.14-0.23,0.4-0.12,0.61l1.92,3.32c0.11,0.2,0.36,0.28,0.58,0.22l2.39-0.96c0.5,0.38,1.05,0.7,1.66,0.94l0.36,2.43
                                c0.03,0.21,0.22,0.36,0.43,0.36h4.14c0.22,0,0.41-0.15,0.43-0.36l0.36-2.43c0.61-0.24,1.17-0.56,1.66-0.94l2.39,0.96
                                c0.21,0.06,0.47-0.02,0.58-0.22l1.92-3.32c0.11-0.2,0.06-0.47-0.12-0.61L19.14,12.94z M12,15.6c-1.99,0-3.6-1.61-3.6-3.6
                                s1.61-3.6,3.6-3.6s3.6,1.61,3.6,3.6S13.99,15.6,12,15.6z" />
                            </svg> Pengaturan
                        </a>
                    </li>
                    <li class="mb-2">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="flex items-center p-3 rounded hover:bg-gray-200 w-full text-left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#2d2d2d"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M10.09 15.59L11.5 17l5-5-5-5-1.41 1.41L12.67 11H3v2h9.67l-2.58 2.59zM19 3H5c-1.1 0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" />
                                </svg>
                                <span class="ml-2">Keluar</span>
                            </button>
                        </form>
                    </li>

                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
</body>

</html>
