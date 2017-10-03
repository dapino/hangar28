var express = require('express')
var app = express()

app.set('view engine', 'pug');

app.use(express.static('public'));

app.get('/', function (req, res) {
  res.render('index', { title: 'Hangar 28' });
})

app.listen(3000, function(err){
    if(err) return console.log('Error'), process.exit(1)

    console.log('Hangar corriendo')
})

