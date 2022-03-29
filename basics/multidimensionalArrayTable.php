<!DOCTYPE html>
<html>
<body>

<?php

$kat1 = array(
    array('DAİRE NO 1' , 'KAYANLAR AİLESİ' ),
    array('DAİRE NO 2' , 'ŞEKERCİOĞLU AİLESİ' ),
    array('DAİRE NO 3' , 'GÜNGÖR AİLESİ' ),    
);

$kat2 = array(
    array('DAİRE NO 4' , 'YILMAZ AİLESİ' ),
    array('DAİRE NO 5' , 'KAYA AİLESİ' ),
    array('DAİRE NO 6' , 'DURANLAR AİLESİ' ),
);

$kat3 = array(
    array('DAİRE NO 7' , 'SOLAK AİLESİ' ),
    array('DAİRE NO 8' , 'İPEKCİOĞLU AİLESİ' ),
    array('DAİRE NO 9' , 'KARAÇAY AİLESİ' ),
);

$kat4 = array(
    array('DAİRE NO 10' , 'ŞAHİN AİLESİ' ),
    array('DAİRE NO 11' , 'BİNGÖL AİLESİ' ),
    array('DAİRE NO 12' , 'VURULMAZ AİLESİ' ),
);

echo '<table border="1" bordercolor="#ff7a00" width="45%">';
echo '<tr height="40px"><th colspan="3">PARK YAŞAM APT.</th></tr>';

echo '<tr><td rowspan="4" align="center" style="width: 40%;">KAT 1</td></tr>';
foreach( $kat1 as $bir )
{
    echo '<tr height="33px">';
    foreach( $bir as $key1 )
    {     
        echo '<td>'.$key1.'</td>';
    }
    echo '</tr>';
}

echo '<tr><td rowspan="4" align="center" style="width: 40%;">KAT 2</td></tr>';
foreach( $kat2 as $iki )
{
    echo '<tr height="33px">';
    foreach( $iki as $key2 )
    {       
        echo '<td>'.$key2.'</td>';
    }
    echo '</tr>';
}

echo '<tr><td rowspan="4" align="center" style="width: 40%;">KAT 3</td></tr>';
foreach( $kat3 as $uc )
{
    echo '<tr height="33px">';
    foreach( $uc as $key3 )
    {       
        echo '<td>'.$key3.'</td>';
    }
    echo '</tr>';
}

echo '<tr><td rowspan="4" align="center" style="width: 40%;">KAT 4</td></tr>';
foreach( $kat4 as $dort )
{
    echo '<tr height="33px">';
    foreach( $dort as $key4 )
    {       
        echo '<td>'.$key4.'</td>';
    }
    echo '</tr>';
}


echo '</table>';
?>

</body>
</html>