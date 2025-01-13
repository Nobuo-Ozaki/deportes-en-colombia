<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar Sesión</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e0f7fa;
            color: #004d40;
        }

        header {
            background-color: #00796b;
            color: white;
            text-align: center;
            padding: 1.5rem 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 4rem);
        }

        .logout-container {
            background-color: white;
            border: 2px solid #00796b;
            border-radius: 10px;
            overflow: hidden;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logout-container h2 {
            margin: 0;
            padding: 0.5rem;
            background-color: #004d40;
            color: white;
            font-size: 1.5rem;
        }

        .logout-container p {
            padding: 1rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #004d40;
        }

        .logout-button {
            background-color: #ff4c4c;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin: 0.5rem;
        }

        .logout-button:hover {
            background-color: #e04343;
        }

        footer {
            background-color: #004d40;
            color: white;
            text-align: center;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Cerrar Sesión</h1>
    </header>

    <main> 
    <div class="logout-container">
        <h2>¿Seguro que quieres cerrar sesión?</h2>
        <p>Si cierras sesión, tendrás que iniciar sesión de nuevo para acceder a tu cuenta.</p>
        <form action="cerrarsession.php" method="POST"> <!-- Vinculado a cerrarsession.php -->
            <button type="submit" class="logout-button">Cerrar Sesión</button>
        </form>
    </div>
</main>


    
</body>
</html>
