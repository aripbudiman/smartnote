<?php require 'functions.php'; ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="assets/fontawesome-free-6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.2/dist/flowbite.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,300;0,400;0,500;0,700;1,200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        .text-shadow {
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.80)
        }

        .text-shadow-md {
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.12), 0 2px 4px rgba(0, 0, 0, 0.08);
        }

        .text-shadow-lg {
            text-shadow: 0 15px 30px rgba(0, 0, 0, 0.11), 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .text-shadow-none {
            text-shadow: none;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    height: {
                        '82': '22rem'
                    },
                    fontFamily: {
                        'poppins': ['Poppins', 'sans - serif'],
                        'roboto': ['Roboto Mono', 'monospace'],
                        'inter': ['Inter']
                    },
                    colors: {
                        'arip': '#f4f4f4',
                        'mab': '#eff6ff',
                        'hijau': '#00A39D',
                        'kuning': '#F6AD3C',
                        'bulao': '#6d28d9',
                        'hitam': '#0f172a'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-mab lg:w-1/3">
    <div class="container relative z-50">