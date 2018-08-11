var bcrypt = require('bcrypt-nodejs');

function comparePassToHash(enteredPass, storedHash){
    bcrypt.compare(enteredPass, storedHash), function(err, res){
        return res;
    }
}