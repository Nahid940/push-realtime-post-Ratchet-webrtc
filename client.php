<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<!--    <script src="https://gist.githubusercontent.com/cboden/fcae978cfc016d506639c5241f94e772/raw/e974ce895df527c83b8e010124a034cfcf6c9f4b/autobahn.js"></script>-->
</head>

<body>

</body>
<script src="script/autobahn.js"></script>
<script>
//        var con=new WebSocket('ws://localhost:8080');
//
//        con.onopen=function () {
//            console.log("Connection eshtablished")
//        }
//        con.onmessage=function (e) {
//            console.log(e.data)
//        }


    var conn = new ab.Session('ws://localhost:8080',
        function() {

            conn.subscribe('webrtc', function(topic, data) {
                // This is where you would add the new article to the DOM (beyond the scope of this tutorial)
                console.log('New article published to category "' + topic + '" : ' + data.title);
                console.log(data)

            });
        },
        function() {
            console.warn('WebSocket connection closed');
        },
        {'skipSubprotocolCheck': true}
    );


</script>
</html>