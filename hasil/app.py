@app.route('/predict', methods=['POST'])
def predict():
    data = request.get_json()
    if not data or 'data' not in data:
        return jsonify({'error': 'Data tidak ditemukan'}), 400

import pandas as pd
df = pd.DataFrame(prediksi_data)
df['cluster'] = cluster_result
df.to_excel('hasil/hasil_clustering.xlsx', index=False)
