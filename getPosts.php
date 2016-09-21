<?php

        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_COMPILE_ERROR);
        ini_set("display_errors", 1);

        include "fb.php";

        $fields="id,name,message,story,updated_time,type,status_type,link,picture";

        $url   = "https://graph.facebook.com/${pageid}/feed";
        $url  .= "?access_token=${accesstoken}";
        $url  .= "&expires=${expires}";
        $url  .= "&fields=${fields}";
        //echo "url: ${url}\n";

        $result = "";
        try {
                $result = file_get_contents($url);
                $response = json_decode($result);
                //print_r($result);
                //print_r($response);

                header("Cache-Control: no-cache, must-revalidate");
                header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
                header('content-type: application/json; charset=utf-8');
                header("Access-Control-Allow-Origin: *");
                echo json_encode($response->data);
        }
        catch (Exception $e) {

                header("Cache-Control: no-cache, must-revalidate");
                header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
                header('content-type: application/json; charset=utf-8');
                header("Access-Control-Allow-Origin: *");
                echo json_encode($e);

        }
?>
