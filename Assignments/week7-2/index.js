"use strict";
exports.__esModule = true;
var e = require("express");
var app = e();
var port = 3000;
app.get('/', function (req, res) {
    res.send('Hello World!');
});
app.listen(port, function () {
    console.log("App listening on port " + port + "!");
}
);
