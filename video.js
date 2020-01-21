const mysql = require('mysql');

var app = require('express')(),
    http = require('http').createServer(app),
    io = require('socket.io')(http),
    port = process.env.PORT || 4000,
    publicDir =  `${__dirname}/public`

const con = mysql.createConnection({
      host: "localhost",
      user: "root",
      password: "",
      database: "video_stream"
    })

    con.connect(function(err) {
      if (err) throw err;
      console.log("Connected!");
    });

http.listen(port, () => {
  console.log('Iniciando Express y Socket.IO en localhost:%d',port)
})

app
    .get('/',(req, res)=>{
      res.sendFile(`${publicDir}/client.html`)
    })
    .get('/streaming',(req, res)=>{
      res.sendFile(`${publicDir}/server.html`)
    })

io.on('connection',(socket) => {
  socket.on('streaming', (image) =>{
      io.emit('play stream', image)
      console.log(image)
      var sql = "UPDATE data SET video_data = '"+image+"' WHERE ID = 'webcam_N1'";
      con.query(sql, function (err, result){
        if(err) throw err;
      })
      console.log("registro completado");
  })
})
