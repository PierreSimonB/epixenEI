


<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>

    <style>
        .police1
        {
            font-size:15px;
            font-family: Andale Mono, monospace;
        }
     
    
    </style>
   
    <body>
                
        <div style="text-align:center">
              <img src="{{url('images/email/logojolliet.jpg')}}" style="width : 30%; padding-left: 5%;" class="responsive-img"/>
            <h2 style="color:green "> Récupération de votre mot de passe sur JOLLIET Innovation </h2>
        </div>
        <span class="police1">  Ceci est un e-mail automatique, merci de ne pas y répondre à cette adresse. <br/></span>
        <br/>
   <p style="color:#4B515D">
       
Cliquer ici pour enregistrer un nouveau mot de passe: 
<a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
</p>
<br/>
        
    <br/><br/><br/>
        
               
    </body>
</html>










