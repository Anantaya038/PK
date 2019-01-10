var Name = {
    getNames : function(){
        var deferred = new $.Deferred();
        
        $.ajax({
            url: "http://mba.bkksol.com/PK/getJSON.php",
            cache: false,
            type: "GET",
            success: function(data){
             if (data) {
                 var json = JSON.parse(data)
                 deferred.resolve("Done", json)
             }else{
                 deferred.resolve("Error")
             }
            }
        });
        return deferred.promise();
    }
}