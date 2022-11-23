<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contacte</title>

    <style type="text/css">
        
        *{
            margin: 0;
            padding: 0;
        }
            body{
                background-image: url('hero.jpg');
                background-position: center;
                background-size: cover;
                font-family: sans-serif;
                margin-top: 90px;
                background-repeat: no-repeat;

            }

            .regform{
                    width: 800px;
                    background-color: rgb(0,0,0,0.6);
                    margin: auto;
                    color: #ffffff;
                    padding: 10px 0px 10px 0px;
                    text-align: center;
            }
            .table{
                background-color: rgb(0, 0, 0,0.5);
                width: 800px;

                margin: auto;
            }
            form{
                padding: 10px;
            }
            #name{
                   width:100% ;
                   height: 100px;
            }
            .nom{
                margin-left: 25px;
                margin-top: 30px;
                width: 125px;
                color: white;
                font-size: 18px;
                font-weight: 700;
            }
            .pNom{
                position: relative;
                left: 200px;
                top: -37px;
                line-height: 40px;
                border-radius: 6px;
                padding: 0 22px;
                font-size: 16px;
            }
            .Dnom{
                position: relative;
                left: 417px;
                top: -80px ;
                line-height: 40px;
                border-radius: 6px;
                padding: 0 22px;
                font-size: 16px;
                color:#555;
            }

            .pNomlabel{
                position: relative;
                color: #E5E5E5;
                text-transform: capitalize;
                font-size: 14px;
                left: 203px;
                top: -45px;
            }
            .lastlabll{
                position: relative;
                color: #E5E5E5;
                text-transform: capitalize;
                font-size: 14px;
                left: 175px;
                top: -45px;
            }
            .company{
                position: relative;
                left: 200px;
                top: -37px;
                line-height: 40px;
                width: 480px;
                border-radius: 6px;
                padding: 0 22px;
                font-size: 16px;
                color: #555;
            }
                .email{
                    position: relative;
                    left: 200px;
                    top: -37px;
                    line-height: 40px;
                    width: 480px;
                    border-radius: 6px;
                    padding: 0 22px;
                    font-size: 16px;
                    color: #555;
                }

                .code{
                    position: relative;
                    left: 200px;
                    top: -37px;
                    line-height: 40px;
                    width: 95px;
                    border-radius: 6px;
                    padding: 0 22px;
                    font-size: 16px;
                    color: #555;
                }
                .number{
                    position: relative;
                    left: 200px;
                    top: -37px;
                    line-height: 40px;
                    width: 255px;
                    border-radius: 6px;
                    padding: 0 22px;
                    font-size: 16px;
                    color: #555; 
                }

                .area-code{
                    position:relative ;
                    color: #E5E5E5;
                    text-transform: capitalize;
                    font-size: 16px;
                    left: 100px;
                    top: -20px;
               
                }
           
    </style>
</head>
<body>
    <div class="regform">
        <h1>Formulaire</h1>

    </div>
    <div class="table">
 <form method="get">
  <div id="name">
        <h2 class="nom">Nom</h2>
        <input type="text" class="pNom" name="pNom" require><br>
        <label class="pNomlabel"> votre nom</label>
    <input type="text" class="Dnom" name="Dnom" require>
    <label class="lastlabll">Votre Prenom</label>
  </div>


    <h2 class="nom">Entreprise</h2>
    <input class="company" type="text" name="company" require>

    <h2 class="nom">Email</h2>
    <input class="email" type="text" name="email" require>
  
<h2 class="nom">téléphone</h2>
<input type="text" class="code" name="phone" require>
<label for="area-code">code postal</label>
<input type="text" class="number" name="phone" require >
<label class="phone-number">Numéro de téléphone</label>

<h2 class="nom">object</h2>
<select name="" id="">
<option disabled="disabled" selected="selected">Votre choix</option>
<option value="sujet_1">Sujet 1</option>
<option value="sujte_2">Sujet 2</option>
</select>



<h2 id="student">Est-ce que  tu es débutant</h2>

   <label class="radio">
    <input name="" type="radio" class="radio-one" checked="checked">
  <span class="checkmark"></span>
  Oui
</label>

<label class="radio">
    <input name="" type="radio" class="radio-two">
    <span class="checkmark"></span>
    Non
</label>


<button type="submit">S'inscrire</button>
  

</form>

</div>
   

</body>
</html>