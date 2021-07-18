$('#button').click( function (event){
    var email = $('#email').val();
    var password = $('#password').val();
    $("#message").empty();
    var error = [];
    if(email == "" || password == "")
    {
        error['empty'] = "<p style='color: red'>Champ(s) Vide !</p>";
        $("#message").append(error['empty']);
    }
    else
    {
        $.ajax({
            url: 'fonctions/connexion.php',
            type: 'POST',
            data:{
                email:email,
                password:password,
            },
            dataType: 'text',
        })
            .done(function(data){
                $('#message').html(data);
                if(data.indexOf('success') >=0){
                    window.setTimeout( function(){
                        window.location = "panel.php";
                        { alert("Connexion réussie !") }
                    }, 100 );
                }
            });
    }
})