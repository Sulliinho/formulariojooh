<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="cadastro.php" method="$_GET">
        <div class="row">
            <h2>Cadastro</h2>
            <fieldset>
                <legend>informações pessoais</legend>
                    <label for="Nome"><input type="text" name="nome" placeholder="Nome"></label>
                    <label for="email"><input type="email" name="email" placeholder="Email"></label>  
            </fieldset>
            <fieldset>
                <legend>empresa</legend>
            <label for="Empresa">
                <input type="text" name="empresa" placeholder="Empresa">
            </label>
            <br><br>
            <label for="cargo" name="cargo">
                <select name="cargo">
                    <option value="adm">Adm</option>
                    <option value="rh">Rh</option>
                    <option value="npc">Npc</option>
                    <option value="outro">Outro</option>
                  </select>
            </label>    
            </fieldset>
              
             <fieldset>
                <legend>cep</legend>
            
            <label for="rua">
                <input type="text" name="rua" placeholder="Rua">
            </label>
    
            <label for="bairro">
                <input type="text" name="bairro" placeholder="Bairro">
            </label>

            <label for="cidade">
                <input type="text" name="cidade" placeholder="cidade">
            </label>
            <br><br>      
            <label for="estado" name="estado">
                <select name="estado">
                    <option value="sp">SP</option>
                    <option value="rj">RJ</option>
                    <option value="bh">BH</option>
                    <option value="ac">AC</option>
                </select>
            </label>
                <br><br>
            <label for="cep">
                <input type="text" name="cep" placeholder="CEP:000000-000">
            </label>
            </fieldset>
            
        </div> 
        </div> 
        <div class="castro" name="cadastro">
            <input id="botas" type="submit" value="cadastro">
        </div>
        
    </form>
</body>
</html>

