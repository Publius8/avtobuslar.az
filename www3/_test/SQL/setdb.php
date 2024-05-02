<?php
session_start();
header('Content-Type: text/html; charset=utf-8', true);
error_reporting(E_ERROR);

$vehicles_description = array(
"Economy",
"SUV 4x4 Prado/Pajero",
"Mercedes E-class W212",
"Mercedes S-class W222 (2016-2019)",
"Mercedes S-class W222 (2020)",
"Mercedes S-class W223 (2021-2023)",
"Minivan (Adam sayı 4-6) Mercedes Viano/Vito",
"Minivan (Adam sayı 4-6) Mercedes V-class (2016-2020)",
"Minivan (Adam sayı 4-6) Mercedes V-class (2021-2023)",
"Minibus Mercedes Sprinter VIP (Adam sayı 8)",
"Minibus Mercedes Sprinter (Adam sayı 12-20)",
"Isuzu Bus (Adam sayı 27)",
"Mercedes 403 Bus (Adam sayı 45)",
"Mercedes Travego (Adam sayı 45-48)",
"Neoplan Cityliner (Adam sayı 45-48)"
);

$vehicles_seat = array(
"Economy"=>4,
"SUV_4x4_Prado_Pajero"=>6,
"Mercedes_E-class_W212"=>4,
"Mercedes_S-class_W222_2016-2019"=>4,
"Mercedes_S-class_W222_2020"=>4,
"Mercedes_S-class_W223_2021-2023"=>4,
"Minivan_4-6_seats_Mercedes_Viano_Vito"=>6,
"Minivan_4-6_seats_Mercedes_V-class_2016-2020"=>6,
"Minivan_4-6_seats_Mercedes_V-class_2021-2023"=>6,
"Minibus_Mercedes_Sprinter_VIP_8_seats"=>8,
"Minibus_Mercedes_Sprinter_12-20_seats"=>20,
"Isuzu_Bus_27_seats"=>27,
"Mercedes_403_Bus_45_seats"=>45,
"Mercedes_Travego_45-48_seats"=>48,
"Neoplan_Cityliner_45-48_seats"=>48
);

$vehicles = array(
"Economy",
"SUV_4x4_Prado_Pajero",
"Mercedes_E-class_W212",
"Mercedes_S-class_W222_2016-2019",
"Mercedes_S-class_W222_2020",
"Mercedes_S-class_W223_2021-2023",
"Minivan_4-6_seats_Mercedes_Viano_Vito",
"Minivan_4-6_seats_Mercedes_V-class_2016-2020",
"Minivan_4-6_seats_Mercedes_V-class_2021-2023",
"Minibus_Mercedes_Sprinter_VIP_8_seats",
"Minibus_Mercedes_Sprinter_12-20_seats",
"Isuzu_Bus_27_seats",
"Mercedes_403_Bus_45_seats",
"Mercedes_Travego_45-48_seats",
"Neoplan_Cityliner_45-48_seats"
);

$vehicles["Economy"] = array(
"Bakı Hava limanı"	=>	23	,
"Abşeron"	=>	90,
"Qobustan"	=>	105,
"Şamaxı"	=>	110,
"Quba"	=>	130,
"Şahdağ"	=>	150,
"Lahıc"	=>	150,
"Qəbələ"	=>	150,
"Lənkəran"	=>	160,
"Şəki"	=>	180,
"Gəncə"	=>	200,
"Astara"	=>	200,
"Qax"	=>	250,
"Zaqatala"	=>	270,
"Qırmızı Körpü"	=>	300
);

$vehicles["SUV_4x4_Prado_Pajero"] = array(
"Bakı Hava limanı"	=>	45,
"Abşeron"	=>	130,
"Qobustan"	=>	150,
"Şamaxı"	=>	170,
"Quba"	=>	180,
"Şahdağ"	=>	200,
"Lahıc"	=>	200,
"Qəbələ"	=>	200,
"Lənkəran"	=>	220,
"Şəki"	=>	250,
"Gəncə"	=>	250,
"Astara"	=>	250,
"Qax"	=>	280,
"Zaqatala"	=>	300,
"Qırmızı Körpü"	=>	300
);


$vehicles["Mercedes_E-class_W212"] = array(
"Bakı Hava limanı"	=>	55,
"Abşeron"	=>	150,
"Qobustan"	=>	170,
"Şamaxı"	=>	210,
"Quba"	=>	250,
"Şahdağ"	=>	300,
"Lahıc"	=>	0,
"Qəbələ"	=>	280,
"Lənkəran"	=>	280,
"Şəki"	=>	310,
"Gəncə"	=>	320,
"Astara"	=>	320,
"Qax"	=>	350,
"Zaqatala"	=>	360,
"Qırmızı Körpü"	=>	450
);


$vehicles["Mercedes_S-class_W222_2016-2019"] = array(
"Bakı Hava limanı"	=>	120,
"Abşeron"	=>	330,
"Qobustan"	=>	400,
"Şamaxı"	=>	400,
"Quba"	=>	400,
"Şahdağ"	=>	450,
"Lahıc"	=>	0,
"Qəbələ"	=>	480,
"Lənkəran"	=>	500,
"Şəki"	=>	520,
"Gəncə"	=>	520,
"Astara"	=>	520,
"Qax"	=>	530,
"Zaqatala"	=>	540,
"Qırmızı Körpü"	=>	650
);


$vehicles["Mercedes_S-class_W222_2020"] = array(
"Bakı Hava limanı"	=>	150,
"Abşeron"	=>	350,
"Qobustan"	=>	450,
"Şamaxı"	=>	450,
"Quba"	=>	450,
"Şahdağ"	=>	500,
"Lahıc"	=>	0,
"Qəbələ"	=>	500,
"Lənkəran"	=>	550,
"Şəki"	=>	600,
"Gəncə"	=>	600,
"Astara"	=>	600,
"Qax"	=>	600,
"Zaqatala"	=>	600,
"Qırmızı Körpü"	=>	700
);


$vehicles["Mercedes_S-class_W223_2021-2023"] = array(
"Bakı Hava limanı"	=>	400,
"Abşeron"	=>	1100,
"Qobustan"	=>	1200,
"Şamaxı"	=>	1500,
"Quba"	=>	1500,
"Şahdağ"	=>	1500,
"Lahıc"	=>	0,
"Qəbələ"	=>	1800,
"Lənkəran"	=>	1800,
"Şəki"	=>	2000,
"Gəncə"	=>	2000,
"Astara"	=>	2000,
"Qax"	=>	2200,
"Zaqatala"	=>	2200,
"Qırmızı Körpü"	=>	2200
);


$vehicles["Minivan_4-6_seats_Mercedes_Viano_Vito"] = array(
"Bakı Hava limanı"	=>	45,
"Abşeron"	=>	110,
"Qobustan"	=>	150,
"Şamaxı"	=>	170,
"Quba"	=>	190,
"Şahdağ"	=>	220,
"Lahıc"	=>	260,
"Qəbələ"	=>	200,
"Lənkəran"	=>	250,
"Şəki"	=>	250,
"Gəncə"	=>	250,
"Astara"	=>	280,
"Qax"	=>	280,
"Zaqatala"	=>	300,
"Qırmızı Körpü"	=>	350
);


$vehicles["Minivan_4-6_seats_Mercedes_V-class_2016-2020"] = array(
"Bakı Hava limanı"	=>	99,
"Abşeron"	=>	270,
"Qobustan"	=>	315,
"Şamaxı"	=>	330,
"Quba"	=>	360,
"Şahdağ"	=>	450,
"Lahıc"	=>	450,
"Qəbələ"	=>	400,
"Lənkəran"	=>	500,
"Şəki"	=>	500,
"Gəncə"	=>	500,
"Astara"	=>	500,
"Qax"	=>	550,
"Zaqatala"	=>	550,
"Qırmızı Körpü"	=>	600
);


$vehicles["Minivan_4-6_seats_Mercedes_V-class_2021-2023"] = array(
"Bakı Hava limanı"	=>	150,
"Abşeron"	=>	350,
"Qobustan"	=>	400,
"Şamaxı"	=>	450,
"Quba"	=>	460,
"Şahdağ"	=>	550,
"Lahıc"	=>	550,
"Qəbələ"	=>	500,
"Lənkəran"	=>	600,
"Şəki"	=>	600,
"Gəncə"	=>	600,
"Astara"	=>	600,
"Qax"	=>	650,
"Zaqatala"	=>	650,
"Qırmızı Körpü"	=>	700
);


$vehicles["Minibus_Mercedes_Sprinter_VIP_8_seats"] = array(
"Bakı Hava limanı"	=>	120,
"Abşeron"	=>	400,
"Qobustan"	=>	400,
"Şamaxı"	=>	400,
"Quba"	=>	450,
"Şahdağ"	=>	500,
"Lahıc"	=>	500,
"Qəbələ"	=>	500,
"Lənkəran"	=>	500,
"Şəki"	=>	600,
"Gəncə"	=>	600,
"Astara"	=>	600,
"Qax"	=>	600,
"Zaqatala"	=>	700,
"Qırmızı Körpü"	=>	700
);


$vehicles["Minibus_Mercedes_Sprinter_12-20_seats"] = array(
"Bakı Hava limanı"	=>	55,
"Abşeron"	=>	145,
"Qobustan"	=>	170,
"Şamaxı"	=>	220,
"Quba"	=>	240,
"Şahdağ"	=>	250,
"Lahıc"	=>	270,
"Qəbələ"	=>	280,
"Lənkəran"	=>	290,
"Şəki"	=>	320,
"Gəncə"	=>	320,
"Astara"	=>	320,
"Qax"	=>	350,
"Zaqatala"	=>	400,
"Qırmızı Körpü"	=>	450
);


$vehicles["Isuzu_Bus_27_seats"] = array(
"Bakı Hava limanı"	=>	80,
"Abşeron"	=>	180,
"Qobustan"	=>	250,
"Şamaxı"	=>	320,
"Quba"	=>	370,
"Şahdağ"	=>	380,
"Lahıc"	=>	390,
"Qəbələ"	=>	390,
"Lənkəran"	=>	450,
"Şəki"	=>	450,
"Gəncə"	=>	450,
"Astara"	=>	500,
"Qax"	=>	520,
"Zaqatala"	=>	540,
"Qırmızı Körpü"	=>	600
);


$vehicles["Mercedes_403_Bus_45_seats"] = array(
"Bakı Hava limanı"	=>	100,
"Abşeron"	=>	250,
"Qobustan"	=>	300,
"Şamaxı"	=>	400,
"Quba"	=>	420,
"Şahdağ"	=>	450,
"Lahıc"	=>	0,
"Qəbələ"	=>	450,
"Lənkəran"	=>	500,
"Şəki"	=>	500,
"Gəncə"	=>	500,
"Astara"	=>	600,
"Qax"	=>	600,
"Zaqatala"	=>	650,
"Qırmızı Körpü"	=>	700
);


$vehicles["Mercedes_Travego_45-48_seats"] = array(
"Bakı Hava limanı"	=>	100,
"Abşeron"	=>	350,
"Qobustan"	=>	400,
"Şamaxı"	=>	450,
"Quba"	=>	470,
"Şahdağ"	=>	500,
"Lahıc"	=>	0,
"Qəbələ"	=>	500,
"Lənkəran"	=>	650,
"Şəki"	=>	650,
"Gəncə"	=>	600,
"Astara"	=>	700,
"Qax"	=>	700,
"Zaqatala"	=>	700,
"Qırmızı Körpü"	=>	850
);


$vehicles["Neoplan_Cityliner_45-48_seats"] = array(
"Bakı Hava limanı"	=>	120,
"Abşeron"	=>	350,
"Qobustan"	=>	400,
"Şamaxı"	=>	500,
"Quba"	=>	500,
"Şahdağ"	=>	550,
"Lahıc"	=>	0,
"Qəbələ"	=>	550,
"Lənkəran"	=>	650,
"Şəki"	=>	700,
"Gəncə"	=>	600,
"Astara"	=>	700,
"Qax"	=>	700,
"Zaqatala"	=>	700,
"Qırmızı Körpü"	=>	850
);


foreach($vehicles as $key=>$value){
    if(!is_array($value)){
        try {
            echo "<h2 style='font-family:Arial'>$value [{$vehicles_seat[$value]}]</h2>";
            foreach($vehicles[$value] as $key=>$value2){
                echo "<h4 style='font-family:Arial; font-weight:normal'>$key - <b>$value2</b></h4>";
            }
            echo "<hr>";
        } catch (TypeError $ex) {
            echo $ex->getMessage();
        }
    }
}




$bdhost = "localhost";
$dbusr = "root";
$dbpwd = "12345678";
$dbname  = "avto";
$id_conn = new mysqli($bdhost,$dbusr,$dbpwd,$dbname);
if($id_conn){
    $i = 0;
    foreach($vehicles as $key=>$value){
        if(!is_array($value)){
            try {
                echo "<h2 style='font-family:Arial'>$value</h2>";
                foreach($vehicles[$value] as $key=>$value2){

                    $sql = "insert into main (
                            vehicle, description, destination, seat, price, comments
                        ) value (
                            '{$value}', '{$vehicles_description[$i]}', '{$key}', '{$vehicles_seat[$value]}', '{$value2}', ''
                        ) ";
                    if(!$id_conn->query($sql)) echo "Error occured #2: ".$id_conn->errno." - ".$id_conn->error."<hr />";
                }
                echo "<hr>";
            } catch (TypeError $ex) {
                echo $ex->getMessage();
            }
        }
        $i++;
    }







}
$id_conn->close();




?>