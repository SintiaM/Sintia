<!Doctype html>
<html>
    <head>
        <title>Identitas Diri</title>
    </head>
        <style>

           body {
                text-align: center;
                font-size : 20px;
                box-shadow: 0 3px 5px 0 #000000;
                background-color: #3992a8;
                max-width: 700px;
                margin-left: 350px;
                margin-top: 50px;    
           }
           
            img { 
                    height: 250px; 
                    width: 450px;
            }

        </style>
    <body>

            <?php
                $foto = "<img src = 'IMG-20210123-WA0024.jpg' alt=''>";
                $nim = 192520034;
                $nama = "Sintia Manjalita";
                $alamat = "Katerban RT 01/RW 08 Kutoarjo Purworejo";
                $email = "smanjalita@gmail.com";
                $bidang_minat_yang_ditekuni = "Teknologi Cerdas";
            ?>

        <p>Biodata Diri</p>
        <p><?php echo $foto ; ?></p>
        <p>Nim : <?php echo $nim ; ?></p>
        <p>Nama : <?php echo $nama ; ?></p>
        <p>Alamat : <?php echo $alamat ; ?></p>
        <p>Email : <?php echo $email ; ?></p>
        <p>Bidang Minat Yang Ditekuni : <?php echo $bidang_minat_yang_ditekuni ; ?></p>
    </body>
</html>
