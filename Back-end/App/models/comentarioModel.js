module.exports = function(){
    //http://localhost:3344/comentarios/envia (API PARA ENVIAR dados para a tabela comentario)
    //http://localhost:3344/comentarios/retorna (API PARA RETORNAR dados da tabela comentario)

    this.getComentario = function (connection, callback){
        connection.query("SELECT * FROM comentario",callback);
    }
    
    this.setComentario = function (comentario, connection, callback){
        connection.query("INSERT INTO comentario set ?", comentario); 
    }  

    return this;
}

