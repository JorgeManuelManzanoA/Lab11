<form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
    </div>

    <div>
        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" id="tipo" required>
    </div>

    <div>
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" step="0.01" required>
    </div>

    <div>
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" required></textarea>
    </div>

    <div>
        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen" id="imagen" required>
    </div>

    <div>
        <button type="submit">Guardar</button>
    </div>
</form>
