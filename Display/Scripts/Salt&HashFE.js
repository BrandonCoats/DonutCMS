var bcrypt = require("bcrypt-nodejs");


var hash = createHash("taco");

function createHash(enteredString){
    bcrypt.hash(enteredString, null, null, function(err, hash){
        bcrypt.compare(enteredString, hash, function(err, res){
            return (hash);
        });
    });
    
}
