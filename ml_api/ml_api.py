from flask import Flask, request, jsonify
import pandas as pd
from sklearn.cluster import KMeans

app = Flask(__name__)

@app.route('/cluster', methods=['POST'])
def cluster():
    data = request.get_json()
    df = pd.DataFrame(data['data'])

    # Clustering
    model = KMeans(n_clusters=3)
    df['cluster'] = model.fit_predict(df[['fitur1', 'fitur2']])

    return jsonify(df.to_dict(orient='records'))

if __name__ == '__main__':
    app.run(host='127.0.0.1', port=5050)
