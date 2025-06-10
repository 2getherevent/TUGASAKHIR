<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>2GetherEvent | Admin</title>
    <link rel="icon" href="https://4.bp.blogspot.com/-26JMbLRiN6U/VFSfU8TmwaI/AAAAAAAAEnU/NGY-0p2M9bc/s1600/Logo-SMK-Negeri-2-Bandung.png"/>
    <link rel="stylesheet" href="output.css">
</head>
<body class="bg-gradient-to-br from-red-600 to-red-400 min-h-screen p-4">
    <div class="flex flex-col md:flex-row w-full h-full">
        <!-- Sidebar -->
        <aside class="bg-red-900 text-white p-6 rounded-lg w-full md:w-1/4 mb-4 md:mb-0 md:mr-4">
            <h2 class="text-center text-2xl font-bold mb-6">ADMIN</h2>
            <nav class="space-y-4">
                <button class="w-full bg-red-600 hover:bg-red-500 px-4 py-2 rounded-full font-semibold transition-colors">PESERTA</button>
                <button class="w-full bg-red-600 hover:bg-red-500 px-4 py-2 rounded-full font-semibold transition-colors">ACARA</button>
                <button class="w-full bg-red-600 hover:bg-red-500 px-4 py-2 rounded-full font-semibold transition-colors">PANITIA</button>
            </nav>
            <div class="mt-10">
                <button class="w-full bg-red-700 hover:bg-red-600 px-4 py-2 rounded-full font-semibold transition-colors">LOGOUT</button>
            </div>
        </aside>
        <main class="bg-red-700 text-white p-6 rounded-lg flex-1 overflow-x-auto">
            <h2 class="text-xl font-bold mb-4">DATA KEGIATAN</h2>
            <div class="overflow-auto rounded-lg">
                <table class="min-w-full divide-y divide-red-300">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">Nama Peserta</th>
                            <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">Acara Diikuti</th>
                            <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">Panitia</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-red-500">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">Nama Peserta</td>
                            <td class="px-6 py-4 whitespace-nowrap">Acara</td>
                            <td class="px-6 py-4 whitespace-nowrap">Panitia</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
