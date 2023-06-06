<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>
    <h2>Registro</h2>
    <form method="POST" action="{{ route('registro') }}">
        @csrf

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <div>
            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>
        </div>

        <div>
            <label for="numero_tarjeta">Numero de tarjeta:</label>
            <input type="text" id="numero_tarjeta" name="numero_tarjeta" required>
        </div>

        <div>
            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" required>
        </div>

        <button type="submit">Registrarse</button>
    </form>
</body>
</html>
