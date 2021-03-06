<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TelVizir</title>
    <link href="script.css" rel="stylesheet">
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
    <header>
        <div class="center">    
            <div class="left">
                 <img src="img/vizir.jpg"  width=70px height=70px>
            </logo>
            <nav class ="desktop"> </nav>
        </div>
    </header>
    <div class="clear"></div>

   
        <div class="txt">
                <h3> Bem Vindo a TelVizir! </h3>
                <br>
                <br>
                <P>A TelVizir está com uma nova modalidade de planos, prencha os campos abaixo e verifique se algum desses novos planos se aplicam a sua necessidade.</p>
        </div>          
         <div class = "form">
                <h4> Selecione Sua Origem e Destino de Ligação</h4>    
                <form   method = "POST">
                        <select name='OD' >       
                        <br>
                                <option  require type="radio" name="OD" value="011-017"> Origem: 011  -   Destino: 016 </option>
                                <br>
                                <option  require type="radio" name="OD" value="016-011"> Origem: 016  -   Destino: 011 </option>
                                <br>
                                <option  require type="radio" name="OD" value="011-017"> Origem: 011  -   Destino: 017 </option>
                                <br>
                                <option  require type="radio" name="OD" value="017-011"> Origem: 017  -   Destino: 011 </option>
                                <br>
                                <option  require type="radio" name="OD" value="011-018"> Origem: 011  -   Destino: 018 </option>
                                <br>
                                <option  require type="radio" name="OD" value="018-011"> Origem: 018  -   Destino: 011 </option>
                        </select>

                        <br>
                        <br>
                        <h4>Escolha Seu Plano</h4>
                        <input  require type="radio" name="FM" value="30"> Fale mais 30 min <br>

                        <input  require type="radio" name="FM" value="60"> Fale Mais 60 min <br>
                        <input  require type="radio" name="FM" value="120"> Fale Mais 120 min <br>

                        <br>
                        <label>Deseja Selecionar mais minutos?</label>
                        <br>
                        <input require type="number" name="min">
                        <br>
                        <br>


                        <input  type="submit" name="acao" value="Enviar">
            </form>

            <?php
                if(isset($_POST['acao'])){
                        $od = $_POST['OD'];
                        $fm = $_POST['FM'];
                        $min = $_POST['min']; 
                        $fixo = [1.90, 2.90, 1.70, 2.70, 0.90, 1.90];
                             
                        /*Valor Calculado Sem o Plano Fale mais*/
                        if ($od == '011-016'){
                                $s1 = $min  * $fixo[0];
                        } else if ($od == '016-011'){
                                $s1 = $min  * $fixo[1];
                        } else if ($od == '011-017' ){
                                $s1 = $min  * $fixo[2];
                        } else if ($od =='017-011'){
                                $s1 = $min  * $fixo[3];
                        } else if ($od == '011-018'){
                                $s1 = $min * $fixo[4];
                        } else if ($od == '018-011'&&  $min > 30  ){
                                $s1 = $min  * $fixo[5];
                        }

                        

                        /*Condições Plano Fale Mais*/
                        /*Plano Fale mais 30*/
                        if($fm =='30'){
                        if ($od == '011-016' && $min > 30 ){
                                $s =($min - 30) * 2.09;
                        } else if ($od == '016-011' && $min > 30){
                                $s = ($min - 30) * 3.19;
                        } else if ($od == '011-017' && $min > 30  ){
                                $s = ($min - 30) * 1.87;
                        } else if ($od =='017-011'&& $min > 30   ){
                                $s = ($min - 30) * 2.9;
                        } else if ($od == '011-018'&& $min > 30 ){
                                $s = ($min - 30) * 0.99;
                        } else if ($od == '018-011'&&  $min > 30  ){
                                $s = ($min - 30) * 2.09;
                        } else {
                                
                                $s = "O valor esta dentro do Plano Fale Mais"; 
                        }
                        } 
                        
                        
                        /*Plano Fale Mais 60*/
                        if($fm =='60'){
                        if ($od == '011-016' && $min > 60 ){
                                $s =($min - 60) * 2.09;
                        } else if ($od == '016-011' && $min > 60){
                                $s = ($min - 60) * 3.19;
                        } else if ($od == '011-017' && $min > 60  ){
                                $s = ($min - 60) * 1.87;
                        } else if ($od =='017-011'&& $min > 60   ){
                                $s = ($min - 60) * 2.97;
                        } else if ($od == '011-018'&& $min > 60 ){
                                $s = ($min - 60) * 0.99;
                        } else if ($od == '018-011'&&  $min > 60  ){
                                $s = ($min - 60) * 2.09;
                        } else {
                                $s = "O valor esta dentro do Plano Fale Mais";   
                                
                        }
                        } 
                        
                        

                        /*Plano Fale mais 120 Minutos*/ 
                        if($fm =='120'){
                        if ($od == '011-016' && $min > 120 ){
                                $s =($min - 120) * 2.09;
                        } else if ($od == '016-011' && $min > 120){
                                $s = ($min - 120) * 3.19;
                        } else if ($od == '011-017' && $min > 120){
                                $$s = ($min - 120) * 1.87;
                        } else if ($od =='017-011'&& $min > 120){
                                $s = ($min - 120) * 2.97;
                        } else if ($od == '011-018'&& $min > 120){
                                $s = ($min - 120) * 0.99;
                        } else if ($od == '018-011'&&  $min > 120){
                                $s = ($min - 120) * 2.09;    
                        } else {
                                $s = "O valor esta dentro do Plano Fale Mais";
                        }
                        }  

                        /* Valores apresentados*/ 
                        
                }
                ?>

                <div>
                        <p class = 'p1'>  O plano escolhido foi: <strong> Fale mais  <?php echo $fm; ?> Minutos </strong> </p>
                        <br>
                        <p class ='p1 '> Valor: R$ <?php echo $s; ?>  </p>
                </div>
                
                <br>

                <div>
                        <p class = 'p1'> Valor sem plano</p>
                        <br>
                        <p class = 'p1' >  Valor: R$  <?php echo $s1; ?> </p>
                </div>


        </div>   
    </div>           
                
</body>
<footer> Desenvolvido Por Julio Lemos</footer>
</html>