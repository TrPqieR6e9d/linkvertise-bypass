<!-- 

……(\_/)
……( ‘_’)
…./”"”"”"”"”"”"\======░ github.com/TrPqieR6e9d
/”"”"”"”"”"”"”"”"”"”\
\_@_@_@_@_@_/

-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- ======= | Custom Css | ======= -->
    <link rel="stylesheet" href="style.css">

    <!-- ======= | Bootstrap Css | ======= -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: #e6f1fc;">
    <!-- credit https://stackoverflow.com/questions/42252443/vertical-align-center-in-bootstrap-4 -->
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-6 mx-auto">
                <div class="jumbotron">
                    <form method="post">
                        <input class="rounded-3 p-2 fs-5 fw-bold d-block m-auto" type="link" name="link" placeholder="Link">
                        <input class="rounded-3 p-2 fs-5 fw-bold d-block m-auto mt-1 " type="submit" value="Bypass">
                        <p class="text-center fs-1 h1 display-1">Output:</p>

                        <?php

                        // ……(\_/)
                        // ……( ‘_’)
                        // …./”"”"”"”"”"”"\======░ github.com/TrPqieR6e9d
                        // /”"”"”"”"”"”"”"”"”"”\
                        // \_@_@_@_@_@_/
                        
                        $url = $_POST["link"];

                        // credit: https://stackoverflow.com/questions/2058578/best-way-to-check-if-a-url-is-valid
                        if (filter_var($url, FILTER_VALIDATE_URL) === FALSE) {
                            echo '<p class="invalid_url mt-1 rounded-3 p-2 fw-bold d-block m-auto mt-1">Please put a valid Linkvertise.com link like:
                https://linkvertise.com/12345/example/1</p>';
                        } else {

                            $curl = curl_init('https://bypass.pm/bypass2?url=' . $url . '/NPAaddon/1');

                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                            $response = curl_exec($curl);

                            if ($e = curl_error($curl)) {
                                echo "$e";
                            } else {

                                $decoded = json_decode($response, true);
                                // credit: https://stackoverflow.com/questions/11797680/getting-http-code-in-php-using-curl
                                $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

                                if ($httpcode == 200) {
                                    $bypassed_link = $decoded['destination'];
                                    echo '<a href="' . $bypassed_link . '" class="output rounded-3 p-2 fw-bold d-block m-auto mt-1">' . $bypassed_link . '</a>';
                                } else {
                                    echo '<p class="invalid_url mt-1 rounded-3 p-2 fw-bold d-block m-auto mt-1">Please enter a valid Linkvertise link.</p>';
                                }
                                echo '<p class="fw-light text-center">Status Code: ' . $httpcode . '</p>';
                            }

                            curl_close($curl);
                        }

                        // ……(\_/)
                        // ……( ‘_’)
                        // …./”"”"”"”"”"”"\======░ github.com/TrPqieR6e9d
                        // /”"”"”"”"”"”"”"”"”"”\
                        // \_@_@_@_@_@_/
                        ?>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>

</html>


<!-- 

……(\_/)
……( ‘_’)
…./”"”"”"”"”"”"\======░ github.com/TrPqieR6e9d
/”"”"”"”"”"”"”"”"”"”\
\_@_@_@_@_@_/

-->