# Importar la libreria flask
from flask import Flask, render_template, redirect

# Creamos unas instancias del proyecto
app = Flask(__name__)
# auto actualizar cada guaradado del archivo en la pagina
app.config["TEMPLATES_AUTO_RELOAD"]=True


# Creacion de rutas
#Ruta Raiz
@app.route("/")
# Crear una funcion llamada home
def home():
    # Retornar un mensaje
    return render_template("index.html")

@app.route("/guardar")
def guardar():
    return "Producto agregado correctamente"

@app.route("/login")
def login():
    return render_template("login.html")

@app.route("/logout")
def logout():
    return redirect("/login")

# Ejecutar el proyecto en el puerto
if __name__ == "__main__":
    app.run(port=5000)