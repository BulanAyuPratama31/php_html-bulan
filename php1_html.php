<p>
<?php
            echo 'Xll RPL 1';
            ?>

            <?php
            
            // Deklarasi dan inisialisasai
            $bil = 3;
            echo $bil;
            var_dump($bil);
            

            $var = "";
            var_dump($var);
            

            $var = null;
            var_dump($var);
            

            ?></p>
<p>
<?php
            $a = 5;
            $b = 10;

            if ($a > $b) {
                echo 'a lebih besar dari b';
            } else {
                echo 'a TIDAK lebih besar dari b';
            }
            
            ?>
             <p>
                <p>----------Perulangan Bilangan Genap 100 - 0---------------</p>
                <?php
                $i = 100;
                while ($i >= 0){
                    echo "$i";
                    echo "<br/>";
                    $i-=2;
                }
                ?>
</p>
<p>
            <p>-------------Menampilkan Bilangan Yang mempunyai Angka 8---------------</p>
            <?php
            for ($i=8; $i <= 100; $i=$i+10){
                 echo $i;
                 echo "<br />";
            }
            ?></p>
            </body>
            </html>