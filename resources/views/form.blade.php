<form action="{{ route('proses.cluster') }}" method="POST">
    @csrf
    <label>Fitur 1:</label>
    <input type="text" name="fitur1[]"><br>
    <label>Fitur 2:</label>
    <input type="text" name="fitur2[]"><br>
    
    <label>Fitur 1 (data 2):</label>
    <input type="text" name="fitur1[]"><br>
    <label>Fitur 2 (data 2):</label>
    <input type="text" name="fitur2[]"><br>

    <button type="submit">Kirim ke API</button>
</form>
