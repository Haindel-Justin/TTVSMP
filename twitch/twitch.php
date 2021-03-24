<?php

$channels = array();

function gatherChannels($conn) {
    $result = getCreators($conn);
    global $channels;
    if($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $channels[$row['Username']] = getStreamData($row['Username']);
        }
    }
}

function getLiveStreamers($row) {
    global $channels;
    if($channels[$row['Username']]['data'][0]['type'] == 'live') {
        return true;
    } else {
        return false;
    }
}

function getStreamData($channel) {
    $url = 'https://api.twitch.tv/helix/streams?user_login='.$channel;
    $cURL = curl_init();

    curl_setopt(
        $cURL,
        CURLOPT_HTTPHEADER,
        array(
            'Authorization: Bearer '.TWITCH_BEARER_KEY,
            'https://api.twitch.tv/helix/'
        )
    );
    curl_setopt($cURL, CURLOPT_URL, $url);
    curl_setopt($cURL, CURLOPT_HTTPGET, true);
    curl_setopt($cURL,CURLOPT_RETURNTRANSFER,1);
    $result = curl_exec($cURL);
    $result = json_decode($result, true);
    curl_close($cURL);
    return $result;
}

