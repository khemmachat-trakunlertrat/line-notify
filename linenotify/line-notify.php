<!-- LINE TOKEN Oay6gnd6ASFX7o4jq67qqHWg8zTwRVA8yfkD2t2uZfQ-->

<?php

    $header = "Testing Line Notify";
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $studentID = $_POST['studentID'];

    $message = $header.
                "\n". "ชื่อจริง: ". $firstname .
                "\n". "นามสกุล: ". $lastname .
                "\n". "รหัสรักเรียน: ". $studentID;

    if(isset($_POST["submit"])) {
        if( $firstname <> "" || $lastname <> "" || $studentID <> "") {
            sendlinemesg();
            header('Content-Type: text/html; charset=utf8');
            $res = notify_message($message);
            echo "<script>alert('เช็คชื่อเข้าเรียนแล้ว');</script>";
            header("location: index.php");
        } else {
            echo "<script>alert('ยังไม่ได้เช็คชื่อ');</script>";
            header("location: index.php");
        }
    }

    function sendlinemesg() {
        define('LINE_API',"https://notify-api.line.me/api/notify");
        define('LINE_TOKEN',"Oay6gnd6ASFX7o4jq67qqHWg8zTwRVA8yfkD2t2uZfQ");

        function notify_message($message) {
            $queryData = array('message' => $message);
            $queryData = http_build_query($queryData,'','&');
            $headerOption = array(
                'http' => array(
                    'method' => 'POST',
                    'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                                ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                                ."Content-Length: ".strlen($queryData)."\r\n",
                    'content' => $queryData
                )
            );
            $context = stream_context_create($headerOption);
            $result = file_get_contents(LINE_API, FALSE, $context);
            $res = json_decode($result);
            return $res;
        }
    }
?>