module.exports = function(){
    //http://localhost:3344/login/acessa (API PARA ACESSAR dados de Login na tabela cadastro)
   
    this.getLogin = function (email_login, senha_login,  connection, callback){
        connection.query("SELECT * FROM cadastro WHERE email=? and senha=?", [email_login, senha_login], callback);
        
    }
    
    return this;
}
