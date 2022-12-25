<?php
if(isset($_POST['submit'])){
    $num = $_POST['num'];
    echo 'Girilen sayı: ' . $num;
    echo '<pre>';

    if($num%3 == 0){
        echo "${num} sayısı, 3'e tam olarak bölünebilir..";
    }elseif($num === ""){
        echo "Lütfen sayı giriniz.";
    }else{
        $firstMod = $num;
        $firstMod++;
        while($firstMod%3 !== 0){
            $firstMod++;
        }
        echo "${num} sayısı, 3'e tam olarak bölünemez! <br>
        3'e bölünebilecek ilk sayı: ${firstMod}";
    }
}

?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
 <input type="number" name='num' placeholder="Bir sayı giriniz..">
 <input type="submit" name="submit" value="Onayla">
</form>