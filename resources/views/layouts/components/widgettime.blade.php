<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-Time Clock</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center">
    <div class="text-center">
        <h1 class="text-4xl font-bold mb-4">Waktu Saat Ini</h1>
        <div id="clock" class="text-6xl font-mono tracking-wider"></div>
        <p id="date" class="mt-2 text-gray-400"></p>
    </div>

    <script>
        function updateClock() {
            const now = new Date();

            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');

            const timeString = `${hours}:${minutes}:${seconds}`;

            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const dateString = now.toLocaleDateString('id-ID', options);

            document.getElementById('clock').textContent = timeString;
            document.getElementById('date').textContent = dateString;
        }

        // Panggil fungsi segera saat halaman dimuat
        updateClock();

        // Panggil fungsi setiap 1 detik untuk pembaruan
        setInterval(updateClock, 1000);
    </script>
</body>
</html>
