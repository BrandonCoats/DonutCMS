var bcrypt = require("bcrypt-nodejs");

function createHash(enteredString){
    var hash = bcrypt.hash(enteredString, null, null, function(err, hash){return hash});
    if(bcrypt.compare(enteredString, hash, function(err, res){
        return res;
    })){
        return hash;
    }
    else{
        console.log("Error: Hash did not match properly to word after creation try again.");
    }
}