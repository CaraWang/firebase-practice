<?php

require __DIR__.'/vendor/autoload.php';
date_default_timezone_set('Asia/Taipei');

const DEFAULT_URL = 'https://{projectName}.firebaseio.com/';
const DEFAULT_TOKEN = '{yourToken}';
const DEFAULT_PATH = '/messages';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

$images = array(
    'http://image.flaticon.com/icons/png/128/188/188996.png',
    'http://image.flaticon.com/icons/png/128/188/188987.png',
    'http://image.flaticon.com/icons/png/128/189/189006.png',
    'http://image.flaticon.com/icons/png/128/189/189001.png',
    'http://image.flaticon.com/icons/png/128/189/189000.png',
    'http://image.flaticon.com/icons/png/128/188/188990.png'
);

$dateTime = new DateTime();
echo 'Start Time: ' . $dateTime->format('H:i:s');

$count = 0;
while ($count < 3000) {
    if ($count % 12 === 0) {
        $dateTime = new DateTime();
        $message = array(
            'time' => $dateTime->getTimestamp(),
            'message' => 'Hello from PHP',
            'id' => rand(1, 100),
            'name' => 'PHP',
          'image' => $images[rand(0, 5)]
        );

        $path = sprintf('%s/%s', DEFAULT_PATH, $message['time']);
        $message['id'] = rand(1, 100);
        $set = $firebase->set($path, $message);

        echo 'Count = ' . $count . ' & ID = ' . $message['id'] . ' -> Success! ' . print_r($set, true) . PHP_EOL;
        unset($dateTime);
    }
    $count += 1;
    sleep(1);
}

$dateTime = new DateTime();
echo 'End Time: ' . $dateTime->format('H:i:s');
