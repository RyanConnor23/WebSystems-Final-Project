var express = require("express");
var app = express();

var bodyParser = require("body-parser");
app.use(bodyParser.urlencoded({extended:false}));

app.get('/', function(req, res){
    res.sendFile(__dirname + '/index.html');

});

app.post('/submit-student-data', function(req, res){
    var name = req.body.firstName + ' ' + req.body.lastName;
    res.send(name + ' : Submitted Successfully');

});

app.put('./update-data', function(req, res){
    res.send('PUT REQUEST');

});

app.delete('./delete-data', function(req, res){
    res.send('DELETE REQUEST');

});

var server = app.listen(5501, function(){
    console.log('Node server is running..');
});

