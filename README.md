## Security & Rules

```
{
  "rules": {
    "messages": {
      ".read": true,
      ".write": true
    },
  }
}
```

## Client

> Implemented by `Flask` and `Vue.js`

- Set up:

1. Replace `{projectName}` from the code in [`static/main.js`](https://github.com/CaraWang/firebase-practice/blob/master/firebase-client/static/main.js) to yours (Check: [firebase console](https://console.firebase.google.com))
2. Open your terminal, and step by step:

```
$ cd firebase-client
$ export FLASK_APP=client.py
$ flask run
# open your browser
```

## Server

> Implemented by PHP with `Composer`

- Set up:

1. Replace `{projectName}` and `{yourToken}` from the code in [`send-to-firebase.php`](https://github.com/CaraWang/firebase-practice/blob/master/firebase-server/send-to-firebase.php) to yours (Check: [firebase console](https://console.firebase.google.com))
2. Open your terminal, and step by step:

```
$ cd firebase-server
$ composer install
$ php send-to-firebase.php
# start to send message to firebase...
# and then the messages show up in your browser
```
