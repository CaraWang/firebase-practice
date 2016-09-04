var config = {
  databaseURL: "https://{projectName}.firebaseio.com/"
}
firebase.initializeApp(config);
var path = firebase.database().ref('/messages');

new Vue({
  el: '#container',
  data: {
    newMsg: '',
    messages: [
      {
	id: 1,
	name: "Pikachu",
	message: "Some messages will show up...",
	image: "http://image.flaticon.com/icons/png/128/188/188926.png",
	time: 1472573572
      }
    ]
  },
  created: function () {
    // 初始資料擷取
    path.limitToLast(30).once('value').then(function(snapshot) {
      this.addMessage(snapshot.val())
    }.bind(this))

  },
  compiled: function () {
    // 監聽新資料
    path.limitToLast(1).on('value', function(newMessage) {
      console.log('New Message');
      this.addMessage(newMessage.val());
    }.bind(this))
  },
  methods: {
    addMessage: function (newMessage) {
      for (var key in newMessage) {
	if(!newMessage.hasOwnProperty(key)) continue;
        this.messages.push(newMessage[key])
      }
    },
    submitMsg: function () {
      var message = this.newMsg.trim()
      if (message) {
	path.push({
	  id: 100,
	  name: "卡拉",
	  time: Math.floor(Date.now()/1000),
	  message: message,
	  image: "http://image.flaticon.com/icons/png/128/188/188988.png"
	})
	this.newMsg = ''
      }
    }
  }
})
