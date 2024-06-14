from flask import Flask, request, send_file
from flask_cors import CORS
from PIL import Image, ImageDraw, ImageFont
import io
import os

app = Flask(__name__)
CORS(app)  # Habilitar CORS

@app.route('/generate-braille-image', methods=['POST'])
def generate_braille_image():
    data = request.get_json()
    braille_text = data.get('braille', '')

    # Usar una fuente que soporte Braille Unicode
    font_path = os.path.join(os.path.dirname(__file__), '..', 'public', 'fonts', 'DejaVuSans-Bold.ttf')
    font = ImageFont.truetype(font_path, 48)

    # Calcular el tamaño de la imagen según el texto
    width, line_height = 800, 60  # Ancho fijo, altura de línea según el tamaño de la fuente
    lines = [braille_text[i:i + (width // 30)] for i in range(0, len(braille_text), width // 30)]
    height = line_height * len(lines) + 20  # Altura total de la imagen

    # Crear una imagen en blanco
    img = Image.new('RGB', (width, height), color=(255, 255, 255))
    d = ImageDraw.Draw(img)

    # Dibujar el texto en la imagen
    y_text = 10
    for line in lines:
        d.text((10, y_text), line, font=font, fill=(0, 0, 0))
        y_text += line_height

    # Guardar la imagen en un buffer
    buf = io.BytesIO()
    img.save(buf, format='PNG')
    buf.seek(0)

    return send_file(buf, mimetype='image/png', as_attachment=True, download_name='braille.png')

if __name__ == '__main__':
    app.run(debug=True)

