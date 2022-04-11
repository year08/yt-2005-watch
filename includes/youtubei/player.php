<?php
// endpoint: /youtubei/v1/player
function requestPlayer($videoId)
{
    include("includes/config.inc.php");
    $req_arr = json_encode(
        array(
            'context' =>
            array(
                'client' =>
                array(
                    'hl' => 'en',
                    'clientName' => 'ANDROID',
                    'clientVersion' => '0.20211124.00.00',
                    'mainAppWebInfo' =>
                    array(
                        'graftUrl' => '/watch?v=' . $videoId,
                    ),
                ),
            ),
            'videoId' => $videoId,
        )
    );
    $ch = curl_init();
    // otherwise unsupported browser
    $ua = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:100.0) Gecko/20100101 Firefox/100.0";
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // so that the 1 doesnt show
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cookies.txt");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Authorization: ", //sapisidhash,
        "Content-Type: application/json",
        // "Referer: https://youtube.com/watch?v=" . $videoId,
        "X-Goog-AuthUser: 0",
        "X-Origin: https://www.youtube.com"
    ));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $req_arr);
    curl_setopt($ch, CURLOPT_USERAGENT, $ua);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_URL, "https://www.youtube.com/youtubei/v1/player?key=AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8");

    $result = curl_exec($ch);
    return $result;
}
