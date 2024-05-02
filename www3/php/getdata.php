<?php
header('Content-Type: text/html; charset=utf-8', true);
//session_start();
//set_time_limit(1800);

if(getenv('HTTP_X_REQUESTED_WITH')!=='XMLHttpRequest') {
    header("location: error.htm");
    exit;
}

$ignore_captcha = $_SERVER['REMOTE_ADDR']=="127.0.0.1" ||
strpos($_SERVER['HTTP_HOST'],'192.168.')!==false || strpos($_SERVER['HTTP_HOST'],'localhost')!==false;

if($ignore_captcha){
    $bdhost = "localhost";
    $dbusr  = "root";
    $dbpwd = "12345678";
    $dbname = "avto";
}else{
    $bdhost = "localhost";
    $dbusr  = "avtobuslar_cl";
    $dbpwd = "asdfkd59341";
    $dbname = "avtobuslar_avto";
}

$tourlist = $_POST['tourlist'] ?? 0;
$seatval = intval($_POST['seat'] ?? 0);

$retval['status'] = "OK";
$retval['caption'] = "";
$retval['content'] = "";

if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] === 'POST'){

        $resultseat = 0;
        $seats = Array();
        $id_conn = new mysqli($bdhost,$dbusr,$dbpwd,$dbname);
        if($id_conn){
            $sql = "select distinct seat from main order by seat";
            $rec = $id_conn->query($sql);
            if($rec){
                while($line = $rec->fetch_array()) $seats[] = $line['seat'];
    //            foreach($seats as $index=>$value) $retval['content'] .= $value."\r\n";
                foreach($seats as $index=>$value){
                    if($value >= $seatval){
                        $resultseat = $value;
                        break;
                    }
                }
    //            $retval['content'] .="\r\n\r\n".$resultseat;
                $rec->close();
            }
            $frstPath = "";
            $scndPath = "";
            $j=0;
            if($resultseat){
                $sql = "select * from main where seat = {$resultseat} and destination = '{$tourlist}' order by id";
                $rec = $id_conn->query($sql);
                if($rec){
                    while($line = $rec->fetch_array()){
                        $j++;
                        $frstPath .= setDescNode($line, $j);
                        $scndPath .= setSelNode($line, $j);
                    }
                    $rec->close();

                    $retval['content'] = $frstPath.
                    "<ul id=\"portfolio-grid2\" class=\"thumbnails row\" >".
                    $scndPath.
                    "</ul>
                    <script type=\"text/javascript\">
                        $(\"#single-project2 .icon-up-open\").on( \"click\", function(event) {
                            var idfrm = $(this).attr('id');
                            var rel = $(this).attr('rel');
                            $('#single-project2 div.toggleDiv').hide(600);
                            $('#single-project2 iframe#'+idfrm).attr(\"src\",\"./image_slider.php?clip=\"+idfrm);
                            $('#single-project2 '+rel).show(600);
                            $('html, body').animate({scrollTop: $('#single-project2').offset().top-100}, 300);
                        });
                        $('#single-project2 .icon-cancel').click(function(){
                            $('#single-project2 div.toggleDiv').hide(600);
                        });
                        $('#single-project2 #procede_order').click(function(){
                            $('#price').show('slow');
                            var indx = $(this).attr('param_index');
                            $('.calc #param_vehicle').text($('#id_vehicle'+indx).attr('param_vehicle'+indx));
                            $('.calc #param_description').text($('#id_description'+indx).attr('param_description'+indx));
                            $('.calc #param_destination').text($('#id_destination'+indx).attr('param_destination'+indx));
                            $('.calc #param_seat').text($('#id_seat'+indx).attr('param_seat'+indx));
                            $('.calc #param_price').text($('#id_price'+indx).attr('param_price'+indx)+' AZN');
                            $('html, body').animate({scrollTop: $('div#price').offset().top}, 'slow');
                        });


                    </script>
                ";


                }
            }




            $id_conn->close();
        }else{
            die("Error occured in SQL_MODE: " . $id_conn->errno . " - " . $id_conn->error);
        }



}else{
    $retval['status'] = "method=failed";
    $retval['caption'] = "Methos failed";
    $retval['content'] = "Please, check and try again.";
}

echo json_encode($retval);


//........................................................
function setDescNode($line, $i){
$retval = "
    <!-- Start details for portfolio project {$i} -->
        <div id=\"frmslidingDiv{$i}\" class=\"toggleDiv row-fluid single-project2\">
            <div class=\"span6\">
                <iframe class=\"imgsldr\" id=\"{$line['vehicle']}\" src=\"\" scrolling=\"no\" frameborder=\"0\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\" hspace=\"0\" vspace=\"0\"></iframe>
            </div>
            <div class=\"span6\">
                <div class=\"project-description\">
                    <div class=\"project-title clearfix\">
                        <h3>Nəqliyyatın təsviri</h3>
                        <span class=\"show_hide close\">
                            <i class=\"icon-cancel\"></i>
                        </span>
                    </div>
                    <div class=\"project-info\">
                        <div style=\"display:none;\">
                            <span id=\"id_vehicle{$i}\" param_vehicle{$i}=\"{$line['vehicle']}\">Adı:</span>&nbsp; {$line['vehicle']}
                        </div>
                        <div>
                            <span id=\"id_description{$i}\" param_description{$i}=\"{$line['description']}\">Nəqliyyat</span>&nbsp; {$line['description']}
                        </div>
                        <div>
                            <span id=\"id_seat{$i}\" param_seat{$i}=\"{$line['seat']}\">Adam sayı:</span>&nbsp; {$line['seat']}
                        </div>
                        <div>
                            <span id=\"id_destination{$i}\" param_destination{$i}=\"{$line['destination']}\">Tur:</span>&nbsp; {$line['destination']}
                        </div>
                        <div>
                            <span id=\"id_price{$i}\" param_price{$i}=\"{$line['price']}\">Qiymət</span>&nbsp; {$line['price']} AZN &nbsp;&nbsp;&nbsp;<i>(Gediş-dönüş qiyməti)</i>
                        </div>
                        <div>
                            <p id=\"id_comments{$i}\" param_comments{$i}=\"{$line['comments']}\">Sifarişinizi tamamlamaq üçün bura klikləyin</p>&nbsp; {$line['comments']}
                        </div>
                        <input id=\"procede_order\" param_index=\"{$i}\" type=\"button\" value=\"sifarişi davam etmək\" class=\"sub05\">
                    </div>
                </div>
            </div>
        </div>
        <!-- End details for portfolio project {$i} -->
";
    return $retval;
}



function setSelNode($line, $i){
$retval = "
        <li class=\"span4 mix web\">
            <div class=\"thumbnail\">
                <img src=\"images/bus/{$line['vehicle']}.jpg\" alt=\"project {$i}\">
                <a href=\"#single-project2\" class=\"more show_hide\">
                    <i class=\"icon-up-open\" id=\"{$line['vehicle']}\" rel=\"#frmslidingDiv{$i}\"></i>
                </a>
                <h3 style='line-height:24px; margin-bottom:10px;'>{$line['description']}</h3>
                <p>{$line['destination']}</p>
                <div class=\"mask\"></div>
            </div>
        </li>
";
    return $retval;
}



?>