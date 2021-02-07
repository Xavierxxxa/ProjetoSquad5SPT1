module.exports = function (app){    
    app.post('/login/acessa', function(req,res){
        var email_login =req.body.email_login;
        var senha_login =req.body.senha_login;
        var connection = app.app.config.database;
        var query = app.app.models.loginModel;
        query.getLogin(email_login, senha_login, connection,
            function(error, results, fields){
                console.log(error,results)
                if(!results[0]){  
                    res.send("Email e/ou senha não cadastrado(s)...")
                } 
                else{
                    res.json(results) 
                }     
        });
    });
}
