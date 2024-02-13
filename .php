

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliador Premiado</title>
    
 
</head>
<body>


<nav class="nav">
<img src="imagens/logo.png">
<div style="width: 80px;
font-size: 25px;
display: grid;
grid-auto-flow: column;
text-align: center;
gap: 15px;
align-items: center;
color: #54545494;">
    
</div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<div class="conteudo">
<style>
.slogan-inicio{
    display: flex;
    margin: 0 auto;
    justify-content: center;
    align-items: center;
    background-color: #abababc7;
    height: 70px;
    width: 95%;
    border-radius: 20px;
    /* padding-top: 15px; */
    padding-bottom: 15px;
    padding-left: 15px;
    padding-right: 15px;
    box-shadow: 0px 0px 10px -4px rgba(0, 0, 0, .5);
}
</style>
    <div class="slogan-inicio">
        <div>
            <p style="color: white; font-weight: bold; font-size: 20px; padding-top: 15px;">Cadastre-se agora para continuar</p>
        </div>
    </div>    

<div class="box" style="display:block;width:100%; justify-content: center !important; font-size: 14px; flex-direction: center !important; padding: 40px 1.25rem;">
    <div style="display: block;justify-content: center !important; flex-direction: center !important; padding:  0 0 25px 0; ">
        <h3 style="
        align-items: center; font-size: 30px;font-weight:bolder;">Bem vindo!
        </h3>
        <p>Digite um email para acessar</p>
    </div>
    <form action="funcoes/realizaLogin.php" method="POST">
        <div class="sim_nao" style="display:block; text-align: initial;">
            <!-- <label for="email" style="font-size:16px ;">Email: </label> -->
            <input type="email" id="email" name="email" class="sim_nao sim_nao-A" placeholder="Digite seu email" style="font-size:16px;border:none; padding:15px;" required></input>
        </div> 
        
        <button type="submit" id="enviar">
            <span> Entrar </span>
        </button>
    </form>

      
</div>
<footer>
        <p style="color: #000; text-align: center; font-size: 12px; margin-top: 10px;">©️ 2023 Todos os direitos reservados.</p>
    </footer>

    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</div>
<script src="funcoes/script.js"></script>

</body>
</html>
