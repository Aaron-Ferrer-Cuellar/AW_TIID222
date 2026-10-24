# Importar la libreria flask
from flask import Flask, render_template, redirect, request

#Importar la libreria de MYSQL para Flask
from flask_mysqldb import MySQL

# Importamos librerias para generar un hash y para comprobar que el hash coincida con la contrasena
from werkzeug.security import generate_password_hash, check_password_hash

# Creamos unas instancias del proyecto
app = Flask(__name__)
# auto actualizar cada guaradado del archivo en la pagina
app.config["TEMPLATES_AUTO_RELOAD"]=True


#Configuracion de la conexion
app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = ''
app.config['MYSQL_DB'] = 'dbFlask'
app.secret_key = 'mysecretkey'

mysql = MySQL(app)

# Creacion de rutas
#Ruta Raiz
@app.route("/")
# Crear una funcion llamada home
def home():
    # Retornar un mensaje
    return render_template("login.html")

@app.route("/registro", method=["GET", "POST"])
def registro():

    if request.method == "POST":
        nombres = request.form["nombre"]
        apellido_p = request.form["apellido_p"]
        apellido_m = request.form["apellido_m"]
        correo = request.form["correo"]
        password_hash = request.form["password_hash"]
        id_rol = request.form["id_rol"]

        # Generamos un hash a partir de la contrasena
        password = generate_password_hash(password_hash)


# Ejecutar el proyecto en el puerto
if __name__ == "__main__":
    app.run(port=5000)