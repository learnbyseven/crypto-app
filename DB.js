class DB {
    constructor(host, user, password, database) {
        this.host = host;
        this.user = user;
        this.password = password; 
        this.database = database;
        //this.connection = this.connectDB();
    }
    connectDB () {
        var greeting = "hello";
        var mysql = require('mysql');
        var connection = mysql.createConnection({
         host     : this.host,
         user     : this.user,
         password : this.password,
         database : this.database
        });
        connection.connect((err) => {
            if (err) {
                console.log("Error in connecting DB");
                return;
            }
            console.log("DB connected")
            return connection;
  
        }
        )
    }
};
    
       
module.exports =  DB