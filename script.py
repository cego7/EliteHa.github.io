from flask import Flask, jsonify

app = Flask(__name__)

@app.route('/virus-status')
def virus_status():
    # Aqui você pode retornar o status do vírus em formato JSON
    return jsonify({"status": "O vírus zen está ativo e se espalhando lentamente..."})

if __name__ == '__main__':
    app.run(debug=True)
