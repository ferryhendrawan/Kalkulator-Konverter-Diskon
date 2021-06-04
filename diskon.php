<?php

    // var_dump($_POST);

    $besarDiskon = null;
    $hargaSetelahDiskon = null;

    if (isset($_POST["submit"])) {

        $besarDiskon = $_POST["harga"] * $_POST["diskon"] / 100;
        $hargaSetelahDiskon = $_POST["harga"] - $besarDiskon;

    } else {
        $besarDiskon = null;
        $hargaSetelahDiskon = null;
    }   

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Kalkulator Diskon</title>
        
        <link rel="stylesheet" href="style.css"
    </head>

    <body>
        <h1>Kalkulator Diskon</h1>
    
        <form action="" method="post">

            <table>
                <tr>
                    <td>Harga</td>
                    <td>Rp <input name="harga" /></td>
                </tr>

                <tr>
                     <td>Diskon</td>
                     <td><input name="diskon" /> %</td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input id="tombol-submit" type="submit" name="submit" value="submit" />
                    </td>
                </tr>

                <tr>
                    <td>Besar Diskon</td>
                    <td>Rp <?php echo $besarDiskon; ?></td>
                </tr>

                <tr>
                    <td>Harga Setelah Dikurangi Diskon</td>
                    <td>Rp <?php echo $hargaSetelahDiskon; ?></td>
                </tr>
            </table>

        <form>
    </body>
</html>