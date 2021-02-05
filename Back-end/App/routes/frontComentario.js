module.exports = function (app){
    app.get('/comentarios/retorna', function(req,res){
        var connection = app.app.config.database;
        var query = app.app.models.comentarioModel;
        query.getComentario(connection, 
            function(error, results, fields){
                console.log(error,results)
                res.json(results);
        });
    });
}