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
        
            <h2 style="color:#ec407a "> Contact depuis le site Vistaforme </h2>
        </div>
        <span class="police1">  Ceci est un e-mail automatique, merci de ne pas y répondre à cette adresse. <br/></span>
        <br/>
        
        Mail du correspondant : {{ $email }}<br/>
        Nom : {{ $nom }}<br/>
        <br/>
        Message : 
        
        {{ nl2br($mess) }} 
        
    <br/><br/><br/>
        
            <strong>L'équipe Vistaforme </strong><br/>
            www.vistaforme.fr
    </body>
</html>