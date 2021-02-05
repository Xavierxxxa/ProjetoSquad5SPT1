module.exports = function(){
    //http://localhost:3344/cadastrado/retorna (API PARA RETORNAR dados da tabela cadastro)
    //http://localhost:3344/cadastrado/envia (API PARA ENVIAR dados para a tabela cadastro)
    //http://localhost:3344/cadastrado/deleta (API PARA DELETAR dados da tabela cadastro)

    this.getCadastro = function (connection, callback){
        connection.query("SELECT * FROM cadastro",callback);
    }

    this.setCadastro = function (cadastrado, connection, callback){
        connection.query('insert into cadastro set ?', cadastrado);
    }

    this.deleteCadastro = function (email, connection, callback){
        connection.query("DELETE FROM cadastro WHERE email = "+email,callback);
    }

    return this;
}