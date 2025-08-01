namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClusteringController extends Controller
{
    public function proses(Request $request)
    {
        $fitur1 = $request->input('fitur1');
        $fitur2 = $request->input('fitur2');

        $data = [];
        for ($i = 0; $i < count($fitur1); $i++) {
            $data[] = [
                'fitur1' => floatval($fitur1[$i]),
                'fitur2' => floatval($fitur2[$i]),
            ];
        }

        // Kirim ke Flask API
        $response = Http::post('http://127.0.0.1:5050/cluster', [
            'data' => $data
        ]);

        // Ambil hasil clustering
        $hasil = $response->json();

        return view('hasil', compact('hasil'));
    }
}
