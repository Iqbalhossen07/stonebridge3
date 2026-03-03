<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stonebridge Legal Solutions</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600&family=Merriweather:wght@700;800&display=swap"
        rel="stylesheet" />
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#b48a3e',
                        darkbg: '#0a0d13',
                    },
                    fontFamily: {
                        heading: ['Merriweather', 'serif'],
                        body: ['Lora', 'serif'],
                    },
                }
            }
        }
    </script>

    <link rel="stylesheet" href="style.css?v=<?= time(); ?>">

</head>