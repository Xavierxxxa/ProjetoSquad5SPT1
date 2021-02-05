var mysql = require('mysql');

var connMySQL = mysql.createConnection({
    host: "localhost",
    user: "Teste", 
    password: "",
    database:"squad5"
    
});

connMySQL.connect(function(err) {
    if (err) {
        console.log("Nao Conectado!")
    }else{
        console.log("Conectado!");
    }
});
module.exports = connMySQL;

