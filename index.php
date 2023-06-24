<!DOCTYPE html>
<html>
<script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>
<head>
    <title>Informasi Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #008000;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 25cm;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 20px;
        }

        h1 {
            text-align: center;
            grid-column: 1 / -1;
        }

        .produk-wrapper {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .produk {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .produk img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
            transition: transform 0.5s ease;
            border-radius: 7px;
        }

        .produk img:hover {
            transform: scale(1.6);
        }

        .produk .info {
            flex: 1;
        }

        .produk .nama {
            font-size: 1.0rem;
            font-weight: bold;
            margin: 0;
        }

        .produk .harga {
            font-weight: bold;
            font-size: 1rem;
        }

        /* Media queries */
        @media (max-width: 990px) {
            .container {
                grid-template-columns: repeat(2, 1fr);
            }

            .produk.large {
                grid-column: span 2;
                width: 100%;
                max-width: 650px;
                /* Adjust the maximum width as needed */
                margin: 0 auto;
            }

            .produk .harga {
                font-weight: bold;
                font-size: 1.6rem;
            }

            .produk .nama {
                font-size: 1.8rem;
                font-weight: bold;
                margin: 1;
            }
        }

        footer {
            text-align: center;
            margin-top: 7px;
            font-size: 1.0rem;
            color: #fff;
            text-decoration: none;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            border-bottom: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>ES TEH PAUS - CITAYAM</h1>

        <?php
        $produk = array(
            array(
                'nama' => 'TEA PAUS ORIGINAL',
                'harga' => 4000,
                'gambar' => 'Original.jpg'
            ),
            array(
                'nama' => 'TEA PAUS JERUK',
                'harga' => 6000,
                'gambar' => 'nojpg.jpg'
            ),
            array(
                'nama' => 'TEA PAUS NANAS',
                'harga' => 6000,
                'gambar' => 'Nanas.jpg'
            ),
            array(
                'nama' => 'TEA PAUS MANGGA',
                'harga' => 6000,
                'gambar' => 'Mangga.jpg'
            ),
            array(
                'nama' => 'TEA PAUS STRAWBERRY',
                'harga' => 6000,
                'gambar' => 'Strawberry.jpg'
            ),
            array(
                'nama' => 'TEA PAUS LECI',
                'harga' => 6000,
                'gambar' => 'Leci.jpg'
            ),
            array(
                'nama' => 'TEA PAUS JAMBU',
                'harga' => 6000,
                'gambar' => 'Jambu.jpg'
            ),
            array(
                'nama' => 'TEA PAUS THAI TEA',
                'harga' => 8000,
                'gambar' => 'Thai Tea.jpg'
            ),
            array(
                'nama' => 'TEA PAUS GREEN TEA',
                'harga' => 9000,
                'gambar' => 'Green Tea.jpg'
            ),
            array(
                'nama' => 'TEA PAUS LEMON TEA',
                'harga' => 9000,
                'gambar' => 'Lemon Tea.jpg'
            ),
            array(
                'nama' => 'TEA PAUS COKLAT',
                'harga' => 11000,
                'gambar' => 'Lemon Tea.jpg'
            )
        );

        foreach ($produk as $index => $p) {
            $class = '';
            if ($index === 4) {
                $class = ' large';
            }

            echo '<div class="produk-wrapper' . $class . '">';
            echo '<div class="produk">';
            echo '<img src="ESJP/' . $p['gambar'] . '" alt="' . $p['nama'] . '">';
            echo '<div class="info">';
            echo '<h2 class="nama">' . $p['nama'] . '</h2>';
            echo '<p class="harga">Harga: Rp.' . $p['harga'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '<footer>&copy; ' . date('Y') . ' ES TEH PAUS - CITAYAM.</footer>';
            echo '</div>';
        }
        ?>
    </div>
    <footer>
        &copy; <?php echo date('Y'); ?> <a href="https://tinyurl.com/estehpauscitayam">ES TEH PAUS - CITAYAM</a> |  This Template Is Made With <i class="fa fa-heart-o" arial-hidden="true"></i> by <a href="https://tinyurl.com/welproto">Protozoa.</a>
    </footer>
</body>

</html>
