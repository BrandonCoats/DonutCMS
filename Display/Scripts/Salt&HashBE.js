var bcrypt = require('bcrypt-nodejs');

function comparePassToHash(enteredPass, storedHash){
    bcrypt.compare(enteredPass, storedHash, function(err, res){
        if(res)
        {
             console.log("Successfully logged in")
        }
        else{
            console.log(err);
            return err;
        }
    });
}
