## Client

> Implemented By `Flask` and `Vue.js`

- Set up:

1. Replace the information from your [firebase console](https://console.firebase.google.com) in [`static/main.js`](https://github.com/CaraWang/firebase-practice/blob/master/firebase-client/static/main.js) wrapped by `{}`
2. Open your terminal, and step by step:

```
$ cd firebase-client
$ export FLASK_APP=client.py
$ flask run
# open your browser
```

## Server

> Implemented By PHP with `Composer`

- Set up:

1. Replace the information from your [firebase console](https://console.firebase.google.com) in [`send-to-firebase.php`](https://github.com/CaraWang/firebase-practice/blob/master/firebase-server/send-to-firebase.php) wrapped by `{}`
2. Open your terminal, and step by step:

```
$ cd firebase-server
$ composer install
$ php send-to-firebase.php
# start to send message to firebase
```
