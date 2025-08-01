<h2>Hasil Clustering</h2>

<table border="1">
    <tr>
        <th>Fitur 1</th>
        <th>Fitur 2</th>
        <th>Cluster</th>
    </tr>
    @foreach ($hasil as $item)
        <tr>
            <td>{{ $item['fitur1'] }}</td>
            <td>{{ $item['fitur2'] }}</td>
            <td>{{ $item['cluster'] }}</td>
        </tr>
    @endforeach
</table>
