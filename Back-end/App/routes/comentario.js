module.exports = function (app){
    // register_coments.php
    
    app.post('/comentarios/envia', function(req,res){ 
        var comentario = req.body;
        var connection = app.app.config.database;
        var comentarioModel = app.app.models.comentarioModel;
        comentarioModel.setComentario(comentario,  connection, 
            function(error,results){
            console.log(error, results)
        });
        comentarioModel.getComentario(connection, 
            function(error, results, fields){
                console.log(error,results)
                res.json(results);                    
        });   
    });
    
    
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

