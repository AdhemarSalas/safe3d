const express = require('express');
const socketIo = require('socket.io');
const http = require('http');
const mysql = require('mysql');
const datos = 0;

const app = express();
const server = http.createServer(app);
const io = socketIo.listen(server);
const con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "temperaturas"
})

io.on('connection', function (socket){
  console.log('a new socket connected');
});

app.get('/', (req, res, next)=>{
  res.sendFile(__dirname + '/server/index.html');
});

app.get('/sesion', (req, res, next)=>{
  res.sendFile(__dirname + '/index.html');
});

const SerialPort = require('serialport');
const Readline = SerialPort.parsers.Readline;
const parser = new Readline();

const mySerial = new SerialPort('COM6',{
  baudRate: 250000
  // baudRate: 115200
});

mySerial.on('open', function () {
  console.log('Opened Serial Port');
});

mySerial.on ('data', function (data){
  console.log(data.toString());
  const analogread = data.toString();
  var aa = analogread.indexOf('T:')
  // console.log(aa);
  if(aa==0)
  { console.log("Connected to DataBase");
  var sql = "UPDATE datos_temp SET Datos = '"+data+"' WHERE ID = 'printer_N1'";
  con.query(sql, function (err, result){
    if(err) throw err;
  })
  console.log("registro completado");
  // io.emit('serial:data', {
  //   analogread
  // });
}
});

mySerial.on('err', function(err){
  console.log(err.message);
});

server.listen(3000, () =>{
  console.log('server on port ', 3000);
});
