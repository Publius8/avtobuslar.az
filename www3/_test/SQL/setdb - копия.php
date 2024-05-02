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
"Minivan (4-6 seats) Mercedes Viano/Vito",
"Minivan (4-6 seats) Mercedes V-class (2016-2020)",
"Minivan (4-6 seats) Mercedes V-class (2021-2023)",
"Minibus Mercedes Sprinter VIP (8 seats)",
"Minibus Mercedes Sprinter (12-20 seats)",
"Isuzu Bus (27 seats)",
"Mercedes 403 Bus (45 seats)",
"Mercedes Travego (45-48 seats)",
"Neoplan Cityliner (45-48 seats)"
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
"Airport Transfer"              =>23,
"1 Day in Baku City (10 hours)" =>70,
"Absheron Peninsula"            =>90,
"Absheron-City tour"            =>110,
"Gobustan tour"                 =>90,
"Gobustan-City tour"            =>110,
"Gobustan-Absheron"             =>105,
"Gobustan-Absheron-City tour"   =>140,
"Baku-Shamakhi-Baku"            =>110,
"Baku-Guba-Baku"                =>130,
"Baku-Shahdagh-Baku"            =>150,
"Baku-Lahij-Baku"               =>150,
"Baku-Gabala-Baku"              =>150,
"Baku-Lenkoran-Baku"            =>160,
"Baku-Sheki-Baku"               =>180,
"Baku-Ganja-Baku"               =>200,
"Baku-Astara-Baku"              =>200,
"Baku-Gakh-Baku"                =>250,
"Baku-Zagatala-Baku"            =>270,
"Baku-Red Bridge-Baku"          =>300,
"1 extra day in another city including feeding and lodging"=>110
);

$vehicles["SUV_4x4_Prado_Pajero"] = array(
"Airport Transfer"              =>45,
"1 Day in Baku City (10 hours)" =>100,
"Absheron Peninsula"            =>130,
"Absheron-City tour"            =>170,
"Gobustan tour"                 =>130,
"Gobustan-City tour"            =>170,
"Gobustan-Absheron"             =>150,
"Gobustan-Absheron-City tour"   =>170,
"Baku-Shamakhi-Baku"            =>170,
"Baku-Guba-Baku"                =>180,
"Baku-Shahdagh-Baku"            =>200,
"Baku-Lahij-Baku"               =>200,
"Baku-Gabala-Baku"              =>200,
"Baku-Lenkoran-Baku"            =>220,
"Baku-Sheki-Baku"               =>250,
"Baku-Ganja-Baku"               =>250,
"Baku-Astara-Baku"              =>250,
"Baku-Gakh-Baku"                =>280,
"Baku-Zagatala-Baku"            =>300,
"Baku-Red Bridge-Baku"          =>300,
"1 extra day in another city including feeding and lodging"=>140
);


$vehicles["Mercedes_E-class_W212"] = array(
"Airport Transfer"              =>	55,
"1 Day in Baku City (10 hours)" =>	145,
"Absheron Peninsula"            =>	150,
"Absheron-City tour"            =>	190,
"Gobustan tour"                 =>	150,
"Gobustan-City tour"            =>	190,
"Gobustan-Absheron"             =>	170,
"Gobustan-Absheron-City tour"   =>	200,
"Baku-Shamakhi-Baku"            =>	210,
"Baku-Guba-Baku"                =>	250,
"Baku-Shahdagh-Baku"            =>	300,
"Baku-Lahij-Baku"               =>	0,
"Baku-Gabala-Baku"              =>	280,
"Baku-Lenkoran-Baku"            =>	280,
"Baku-Sheki-Baku"               =>	310,
"Baku-Ganja-Baku"               =>	320,
"Baku-Astara-Baku"              =>	320,
"Baku-Gakh-Baku"                =>	350,
"Baku-Zagatala-Baku"            =>	360,
"Baku-Red Bridge-Baku"          =>	450,
"1 extra day in another city including feeding and lodging"=>200
);


$vehicles["Mercedes_S-class_W222_2016-2019"] = array(
"Airport Transfer"              =>	120,
"1 Day in Baku City (10 hours)" =>	300,
"Absheron Peninsula"            =>	330,
"Absheron-City tour"            =>	430,
"Gobustan tour"                 =>	330,
"Gobustan-City tour"            =>	430,
"Gobustan-Absheron"             =>	400,
"Gobustan-Absheron-City tour"   =>	450,
"Baku-Shamakhi-Baku"            =>	400,
"Baku-Guba-Baku"                =>	400,
"Baku-Shahdagh-Baku"            =>	450,
"Baku-Lahij-Baku"               =>	0,
"Baku-Gabala-Baku"              =>	480,
"Baku-Lenkoran-Baku"            =>	500,
"Baku-Sheki-Baku"               =>	520,
"Baku-Ganja-Baku"               =>	520,
"Baku-Astara-Baku"              =>	520,
"Baku-Gakh-Baku"                =>	530,
"Baku-Zagatala-Baku"            =>	540,
"Baku-Red Bridge-Baku"          =>	650,
"1 extra day in another city including feeding and lodging"=>350
);


$vehicles["Mercedes_S-class_W222_2020"] = array(
"Airport Transfer"              =>	150	,
"1 Day in Baku City (10 hours)" =>	350	,
"Absheron Peninsula"            =>	350	,
"Absheron-City tour"            =>	450	,
"Gobustan tour"                 =>	350	,
"Gobustan-City tour"            =>	450	,
"Gobustan-Absheron"             =>	450	,
"Gobustan-Absheron-City tour"   =>	500	,
"Baku-Shamakhi-Baku"            =>	450	,
"Baku-Guba-Baku"                =>	450	,
"Baku-Shahdagh-Baku"            =>	500	,
"Baku-Lahij-Baku"               =>	0	,
"Baku-Gabala-Baku"              =>	500	,
"Baku-Lenkoran-Baku"            =>	550	,
"Baku-Sheki-Baku"               =>	600	,
"Baku-Ganja-Baku"               =>	600	,
"Baku-Astara-Baku"              =>	600	,
"Baku-Gakh-Baku"                =>	600	,
"Baku-Zagatala-Baku"            =>	600	,
"Baku-Red Bridge-Baku"          =>	700	,
"1 extra day in another city including feeding and lodging"=>	350
);


$vehicles["Mercedes_S-class_W223_2021-2023"] = array(
"Airport Transfer"              =>	400	,
"1 Day in Baku City (10 hours)" =>	990	,
"Absheron Peninsula"            =>	1100	,
"Absheron-City tour"            =>	1100	,
"Gobustan tour"                 =>	1100	,
"Gobustan-City tour"            =>	1100	,
"Gobustan-Absheron"             =>	1200	,
"Gobustan-Absheron-City tour"   =>	1200	,
"Baku-Shamakhi-Baku"            =>	1500	,
"Baku-Guba-Baku"                =>	1500	,
"Baku-Shahdagh-Baku"            =>	1500	,
"Baku-Lahij-Baku"               =>	0	,
"Baku-Gabala-Baku"              =>	1800	,
"Baku-Lenkoran-Baku"            =>	1800	,
"Baku-Sheki-Baku"               =>	2000	,
"Baku-Ganja-Baku"               =>	2000	,
"Baku-Astara-Baku"              =>	2000	,
"Baku-Gakh-Baku"                =>	2200	,
"Baku-Zagatala-Baku"            =>	2200	,
"Baku-Red Bridge-Baku"          =>	2200	,
"1 extra day in another city including feeding and lodging"=>	900
);


$vehicles["Minivan_4-6_seats_Mercedes_Viano_Vito"] = array(
"Airport Transfer"              =>	45	,
"1 Day in Baku City (10 hours)" =>	95	,
"Absheron Peninsula"            =>	110	,
"Absheron-City tour"            =>	140	,
"Gobustan tour"                 =>	115	,
"Gobustan-City tour"            =>	140	,
"Gobustan-Absheron"             =>	150	,
"Gobustan-Absheron-City tour"   =>	180	,
"Baku-Shamakhi-Baku"            =>	170	,
"Baku-Guba-Baku"                =>	190	,
"Baku-Shahdagh-Baku"            =>	220	,
"Baku-Lahij-Baku"               =>	260	,
"Baku-Gabala-Baku"              =>	200	,
"Baku-Lenkoran-Baku"            =>	250	,
"Baku-Sheki-Baku"               =>	250	,
"Baku-Ganja-Baku"               =>	250	,
"Baku-Astara-Baku"              =>	280	,
"Baku-Gakh-Baku"                =>	280	,
"Baku-Zagatala-Baku"            =>	300	,
"Baku-Red Bridge-Baku"          =>	350	,
"1 extra day in another city including feeding and lodging"=>	000
);


$vehicles["Minivan_4-6_seats_Mercedes_V-class_2016-2020"] = array(
"Airport Transfer"              =>	99	,
"1 Day in Baku City (10 hours)" =>	250	,
"Absheron Peninsula"            =>	270	,
"Absheron-City tour"            =>	430	,
"Gobustan tour"                 =>	270	,
"Gobustan-City tour"            =>	430	,
"Gobustan-Absheron"             =>	315	,
"Gobustan-Absheron-City tour"   =>	450	,
"Baku-Shamakhi-Baku"            =>	330	,
"Baku-Guba-Baku"                =>	360	,
"Baku-Shahdagh-Baku"            =>	450	,
"Baku-Lahij-Baku"               =>	450	,
"Baku-Gabala-Baku"              =>	400	,
"Baku-Lenkoran-Baku"            =>	500	,
"Baku-Sheki-Baku"               =>	500	,
"Baku-Ganja-Baku"               =>	500	,
"Baku-Astara-Baku"              =>	500	,
"Baku-Gakh-Baku"                =>	550	,
"Baku-Zagatala-Baku"            =>	550	,
"Baku-Red Bridge-Baku"          =>	600	,
"1 extra day in another city including feeding and lodging"=>	250
);


$vehicles["Minivan_4-6_seats_Mercedes_V-class_2021-2023"] = array(
"Airport Transfer"              =>	150	,
"1 Day in Baku City (10 hours)" =>	350	,
"Absheron Peninsula"            =>	350	,
"Absheron-City tour"            =>	500	,
"Gobustan tour"                 =>	350	,
"Gobustan-City tour"            =>	500	,
"Gobustan-Absheron"             =>	400	,
"Gobustan-Absheron-City tour"   =>	550	,
"Baku-Shamakhi-Baku"            =>	450	,
"Baku-Guba-Baku"                =>	460	,
"Baku-Shahdagh-Baku"            =>	550	,
"Baku-Lahij-Baku"               =>	550	,
"Baku-Gabala-Baku"              =>	500	,
"Baku-Lenkoran-Baku"            =>	600	,
"Baku-Sheki-Baku"               =>	600	,
"Baku-Ganja-Baku"               =>	600	,
"Baku-Astara-Baku"              =>	600	,
"Baku-Gakh-Baku"                =>	650	,
"Baku-Zagatala-Baku"            =>	650	,
"Baku-Red Bridge-Baku"          =>	700	,
"1 extra day in another city including feeding and lodging"=>	350
);


$vehicles["Minibus_Mercedes_Sprinter_VIP_8_seats"] = array(
"Airport Transfer"              =>	120	,
"1 Day in Baku City (10 hours)" =>	350	,
"Absheron Peninsula"            =>	400	,
"Absheron-City tour"            =>	450	,
"Gobustan tour"                 =>	400	,
"Gobustan-City tour"            =>	450	,
"Gobustan-Absheron"             =>	400	,
"Gobustan-Absheron-City tour"   =>	450	,
"Baku-Shamakhi-Baku"            =>	400	,
"Baku-Guba-Baku"                =>	450	,
"Baku-Shahdagh-Baku"            =>	500	,
"Baku-Lahij-Baku"               =>	500	,
"Baku-Gabala-Baku"              =>	500	,
"Baku-Lenkoran-Baku"            =>	500	,
"Baku-Sheki-Baku"               =>	600	,
"Baku-Ganja-Baku"               =>	600	,
"Baku-Astara-Baku"              =>	600	,
"Baku-Gakh-Baku"                =>	600	,
"Baku-Zagatala-Baku"            =>	700	,
"Baku-Red Bridge-Baku"          =>	700	,
"1 extra day in another city including feeding and lodging"=>	350
);


$vehicles["Minibus_Mercedes_Sprinter_12-20_seats"] = array(
"Airport Transfer"              =>	55	,
"1 Day in Baku City (10 hours)" =>	140	,
"Absheron Peninsula"            =>	145	,
"Absheron-City tour"            =>	190	,
"Gobustan tour"                 =>	145	,
"Gobustan-City tour"            =>	190	,
"Gobustan-Absheron"             =>	170	,
"Gobustan-Absheron-City tour"   =>	220	,
"Baku-Shamakhi-Baku"            =>	220	,
"Baku-Guba-Baku"                =>	240	,
"Baku-Shahdagh-Baku"            =>	250	,
"Baku-Lahij-Baku"               =>	270	,
"Baku-Gabala-Baku"              =>	280	,
"Baku-Lenkoran-Baku"            =>	290	,
"Baku-Sheki-Baku"               =>	320	,
"Baku-Ganja-Baku"               =>	320	,
"Baku-Astara-Baku"              =>	320	,
"Baku-Gakh-Baku"                =>	350	,
"Baku-Zagatala-Baku"            =>	400	,
"Baku-Red Bridge-Baku"          =>	450	,
"1 extra day in another city including feeding and lodging"=>	150
);


$vehicles["Isuzu_Bus_27_seats"] = array(
"Airport Transfer"              =>	80	,
"1 Day in Baku City (10 hours)" =>	160	,
"Absheron Peninsula"            =>	180	,
"Absheron-City tour"            =>	220	,
"Gobustan tour"                 =>	200	,
"Gobustan-City tour"            =>	220	,
"Gobustan-Absheron"             =>	250	,
"Gobustan-Absheron-City tour"   =>	250	,
"Baku-Shamakhi-Baku"            =>	320	,
"Baku-Guba-Baku"                =>	370	,
"Baku-Shahdagh-Baku"            =>	380	,
"Baku-Lahij-Baku"               =>	390	,
"Baku-Gabala-Baku"              =>	390	,
"Baku-Lenkoran-Baku"            =>	450	,
"Baku-Sheki-Baku"               =>	450	,
"Baku-Ganja-Baku"               =>	450	,
"Baku-Astara-Baku"              =>	500	,
"Baku-Gakh-Baku"                =>	520	,
"Baku-Zagatala-Baku"            =>	540	,
"Baku-Red Bridge-Baku"          =>	600	,
"1 extra day in another city including feeding and lodging"=>	180
);


$vehicles["Mercedes_403_Bus_45_seats"] = array(
"Airport Transfer"              =>	100	,
"1 Day in Baku City (10 hours)" =>	200	,
"Absheron Peninsula"            =>	250	,
"Absheron-City tour"            =>	250	,
"Gobustan tour"                 =>	250	,
"Gobustan-City tour"            =>	250	,
"Gobustan-Absheron"             =>	300	,
"Gobustan-Absheron-City tour"   =>	300	,
"Baku-Shamakhi-Baku"            =>	400	,
"Baku-Guba-Baku"                =>	420	,
"Baku-Shahdagh-Baku"            =>	450	,
"Baku-Lahij-Baku"               =>	0	,
"Baku-Gabala-Baku"              =>	450	,
"Baku-Lenkoran-Baku"            =>	500	,
"Baku-Sheki-Baku"               =>	500	,
"Baku-Ganja-Baku"               =>	500	,
"Baku-Astara-Baku"              =>	600	,
"Baku-Gakh-Baku"                =>	600	,
"Baku-Zagatala-Baku"            =>	650	,
"Baku-Red Bridge-Baku"          =>	700	,
"1 extra day in another city including feeding and lodging"=>	200
);


$vehicles["Mercedes_Travego_45-48_seats"] = array(
"Airport Transfer"              =>	100	,
"1 Day in Baku City (10 hours)" =>	300	,
"Absheron Peninsula"            =>	350	,
"Absheron-City tour"            =>	350	,
"Gobustan tour"                 =>	350	,
"Gobustan-City tour"            =>	350	,
"Gobustan-Absheron"             =>	400	,
"Gobustan-Absheron-City tour"   =>	400	,
"Baku-Shamakhi-Baku"            =>	450	,
"Baku-Guba-Baku"                =>	470	,
"Baku-Shahdagh-Baku"            =>	500	,
"Baku-Lahij-Baku"               =>	0	,
"Baku-Gabala-Baku"              =>	500	,
"Baku-Lenkoran-Baku"            =>	650	,
"Baku-Sheki-Baku"               =>	650	,
"Baku-Ganja-Baku"               =>	600	,
"Baku-Astara-Baku"              =>	700	,
"Baku-Gakh-Baku"                =>	700	,
"Baku-Zagatala-Baku"            =>	700	,
"Baku-Red Bridge-Baku"          =>	850	,
"1 extra day in another city including feeding and lodging"=>	300
);


$vehicles["Neoplan_Cityliner_45-48_seats"] = array(
"Airport Transfer"              =>	120	,
"1 Day in Baku City (10 hours)" =>	350	,
"Absheron Peninsula"            =>	350	,
"Absheron-City tour"            =>	430	,
"Gobustan tour"                 =>	350	,
"Gobustan-City tour"            =>	430	,
"Gobustan-Absheron"             =>	400	,
"Gobustan-Absheron-City tour"   =>	450	,
"Baku-Shamakhi-Baku"            =>	500	,
"Baku-Guba-Baku"                =>	500	,
"Baku-Shahdagh-Baku"            =>	550	,
"Baku-Lahij-Baku"               =>	0	,
"Baku-Gabala-Baku"              =>	550	,
"Baku-Lenkoran-Baku"            =>	650	,
"Baku-Sheki-Baku"               =>	700	,
"Baku-Ganja-Baku"               =>	600	,
"Baku-Astara-Baku"              =>	700	,
"Baku-Gakh-Baku"                =>	700	,
"Baku-Zagatala-Baku"            =>	700	,
"Baku-Red Bridge-Baku"          =>	850	,
"1 extra day in another city including feeding and lodging"=>	300
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