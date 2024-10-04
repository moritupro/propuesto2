<?php
// Array multidimensional para almacenar información de empleados
$empleados = [
    [
        "nombre" => "Marco Mori",
        "cargo" => "Gerente",
        "email" => "marcomori@empresa.com",
        "telefono" => "978996157"
    ],
    [
        "nombre" => "Ana López",
        "cargo" => "Desarrolladora",
        "email" => "ana.lopez@empresa.com",
        "telefono" => "987654321"
    ],
    [
        "nombre" => "Miguel Sanchez",
        "cargo" => "Diseñador",
        "email" => "miguel.sanchez@empresa.com",
        "telefono" => "991456762"
    ]
];

// Comprobar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nuevoEmpleado = [
        "nombre" => $_POST['nombre'],
        "cargo" => $_POST['cargo'],
        "email" => $_POST['email'],
        "telefono" => $_POST['telefono']
    ];

    // Añadir el nuevo empleado al array de empleados
    $empleados[] = $nuevoEmpleado;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="my-4">Lista de Empleados</h2>

    <!-- Formulario para añadir un nuevo empleado -->
    <form method="POST" class="mb-4">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="cargo" class="form-label">Cargo</label>
            <input type="text" class="form-control" id="cargo" name="cargo" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
        </div>
        <button type="submit" class="btn btn-primary">Añadir Empleado</button>
    </form>

    <!-- Tabla de empleados -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cargo</th>
                <th>Email</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empleados as $empleado): ?>
            <tr>
                <td><?= htmlspecialchars($empleado['nombre']); ?></td>
                <td><?= htmlspecialchars($empleado['cargo']); ?></td>
                <td><?= htmlspecialchars($empleado['email']); ?></td>
                <td><?= htmlspecialchars($empleado['telefono']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


