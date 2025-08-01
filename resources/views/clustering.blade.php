<!DOCTYPE html>
<html>
<head>
    <title>Clustering</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <h2>Kirim Data ke Flask ML API</h2>

    <button onclick="kirimData()">Kirim</button>

    <pre id="hasil"></pre>

    <script>
        function kirimData() {
            const data = {
                data: [
                    { fitur1: 1.2, fitur2: 3.4 },
                    { fitur1: 2.5, fitur2: 4.1 },
                    { fitur1: 0.5, fitur2: 2.3 }
                ]
            };

            fetch('http://127.0.0.1:5050/cluster', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
            })
            .then(res => res.json())
            .then(json => {
                document.getElementById('hasil').textContent = JSON.stringify(json, null, 2);
            })
            .catch(err => {
                console.error('Gagal:', err);
                alert('Gagal koneksi ke Flask API');
            });
        }
    </script>
</body>
</html>
