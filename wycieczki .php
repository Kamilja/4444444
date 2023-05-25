<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl4.css">
    <title>Wycieczki po Europie</title>
</head>
<body>
    <header>
        <section class="baner">
            <h1>BIURO TURYSTYCZNE</h1>
        </section>
    </header>
    <main>
        <section class="dane">
                <h3>Wycieczki, na które są wolne miejsca</h3>
                <?php
                    $polaczenie=mysqli_connect("localhost","root","","biuro");
                        if($polaczenie){
                            $zapytanie="select id,dataWyjazdu,cel,cena from wycieczki where dostepna=1";
                            $wynik=mysqli_query($polaczenie,$zapytanie);
                            while($wiersz=mysqli_fetch_array($wynik)){
                                echo $wiersz ["id"]." dnia ".$wiersz["dataWyjazdu"]." jedziemy do ".$wiersz["cel"]." cena: ".$wiersz["cena"]."<br>";
                                }
                            }
                    
            
                ?>
        </section>
        <section class="lewy">
            <h2>Bestselery</h2>
            <table>
                <tbody>
                <tr>
                    <td>Wenecja</td>
                    <td>kwiecien</td>
                </tr>
                <tr>
                    <td>Londyn</td>
                    <td>lipiec</td>
                </tr>
                <tr>
                    <td>Rzym</td>
                    <td>wrzesień</td>
                </tr>
                </tbody>
            </table>
        </section>
        <section class="srodek">
            <h2>Nasze zdjęcia</h2>
            <?php
            $zapytanie="select nazwaPliku,podpis from zdjecia order by podpis desc";
            $wynik=mysqli_query($polaczenie,$zapytanie);
            while($row=mysqli_fetch_array($wynik)){
                echo "<img src='$row[0]' alt='$row[1]'/>";
            }
            mysqli_close($polaczenie);
            ?>
        </section>
        <section class="prawy">
            <h2>Skontaktuj się</h2>
            <a href="mailto:turysta@wycieczki.pl">napisz do nas</a>
            <p>telefon: 111222333</p>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: 000000000000</p>
    </footer>
</body>
</html>