<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Centros de Costos</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .tabla-container {
            max-width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        /* Estilo responsivo */
        @media (max-width: 600px) {
            th, td {
                font-size: 14px;
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <h1>Tabla de Centros de Costos</h1>
    <div class="tabla-container">
        <table>
            <thead>
                <tr>
                    <th>Código Centro Costos</th>
                    <th>Centro de Costos</th>
                    <th>Regional a Cargo</th>
                    <th>Responsable Operativo</th>
                    <th>Responsable Técnico</th>
                    <th>Ciudad</th>
                    <th>Dirección</th>
                    <th>IMEI</th>
                    <th>Serial Equipo</th>
                    <th>Línea Celular</th>
                    <th>Acción</th>
                    <th>Marca</th>
                    <th>Fecha de Entrega</th>
                    <th>Perfil de Equipo</th>
                    <th>Estado</th>
                    <th>Equipamiento</th>
                    <th>Licencia CarMob</th>
                    <th>Acceso Remoto</th>
                    <th>Bloqueo AppLock</th>
                    <th>Observaciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>Costos Norte</td>
                    <td>Regional Norte</td>
                    <td>Juan Pérez</td>
                    <td>Carlos García</td>
                    <td>Bogotá</td>
                    <td>Calle 123 #45-67</td>
                    <td>123456789012345</td>
                    <td>SN123456789</td>
                    <td>3211234567</td>
                    <td>Actualizar</td>
                    <td>Samsung</td>
                    <td>2023-12-01</td>
                    <td>Avanzado</td>
                    <td>Activo</td>
                    <td>Completo</td>
                    <td>Sí</td>
                    <td>Sí</td>
                    <td>No</td>
                    <td>Sin observaciones</td>
                </tr>
                <!-- Agrega más filas según sea necesario -->
            </tbody>
        </table>
    </div>
</body>
</html>
