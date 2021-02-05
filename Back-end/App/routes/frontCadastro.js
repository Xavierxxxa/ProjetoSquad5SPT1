module.exports = function (app){
    app.get('/cadastrado/retorna', function(req,res){
        var connection = app.app.config.database;
        var query = app.app.models.cadastroModel;
        query.getCadastro(connection, 
            function(error, results, fields){
                console.log(error,results)
                res.json(results);
        });
    });

    app.delete('/cadastrado/deleta', function(req,res){
        var email = JSON.stringify(req.body.email);
        var connection = app.app.config.database;
        var  cadastroModel = app.app.models. cadastroModel;
        cadastroModel.deleteCadastro(email,connection, 
            function(error, results){
                console.log(error,results, email)
                res.json(results);
        });
    });    
}