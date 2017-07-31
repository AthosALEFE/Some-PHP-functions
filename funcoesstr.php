<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Some functions PHP</title>
</head>
<body>
<div>
    <?php
        $wordSet = isset($_GET["data"])?$_GET["data"]:"Athos";
        /* A partir de agora est�o listadas algumas fun��es para tratamento de string 
         * com objetivo de aprendizado
         * por Athos Alefe
         */
        //strlen = conta as posi��es;
        echo "<p>".strlen($wordSet)."</p>";
        
        //strtoupper = passa pra mai�sculo;
        echo "<p>".strtoupper($wordSet)."</p>";
        
        //strtolower = passa pra min�sculo;
        echo "<p>".strtolower($wordSet)."</p>";
        
        //strpos = procura a posi��o de uma substr
        echo "<p>".strpos($wordSet,"A")."</p>";
        
        //stripos = strpos por�m ignora caracteres mai�sculos e min�sculos
        echo "<p>".stripos($wordSet,"a")."</p>";
        
        //substr = captura uma substr
        echo "<p>".substr($wordSet,-5)."</p>";
        
         /*wordwrap = quebra linhas no c�digo e no out. 
         * 1 = vari�vel; 
         * 2 = posi��o; 
         * 3 = elemento de repeti��o(com \n quebra o c�digo); 
         * 4 = false > mantem palavras :  true > n�o mantem palavras        
         */
        echo "<p>".wordwrap($wordSet,5,"<br/>\n",false)."</p>";
        
        //trim = corta espa�os
        echo "<p>".trim($wordSet)."</p>";
        
        //ltrim = corta espa�os s� do inicio
        echo "<p>".ltrim($wordSet)."</p>";
        
        //rtrim = corta espa�os s� do final
        echo "<p>".rtrim($wordSet)."</p>";
        
        /* str_word_count = mostra o n�mero de palavras em uma frase
         * 1 = vari�vel
         * 2 = par�metros 
         * (0 > mostra apenas o n�mero de palavras)
         * (1 > aloca as palavras em um array)
         * (2 > aloca as palavras em um array colocando como �ndice a posi��o de in�cio das palavras)
         */
        $example = str_word_count($wordSet,0);
        echo "<p>".$example."</p>";
        
        //strsplit = coloca as letras individualmente em um array
        $example1 = str_split($wordSet);
        var_dump($example1); 
        
        //ucfirst = ucword = coloca as primeiras letras de cada palavra da str em mai�sculo
        echo "<p>".ucwords($wordSet)."</p>";
        
        //strrev = coloca a string ao contr�rio        
        echo "<p>".strrev($wordSet)."</p>";
        
        //substr_count = conta quantas vezes uma substr aparece
        $example2 = substr_count($wordSet, "e");
        echo "<p>$example2</p>";
        
        
        
        //str_repeat = repete a string
        echo "<p>".str_repeat($wordSet,10)."</p>";
        
        //str_replace = troca algum elemento da string por outro 
        echo "<p>".str_replace("a","b",$wordSet)."</p>";
        
        //str_ireplace = faz o mesmo que str_replace por�m ignorando a capitaliza��o das letras
        
        /* strpad = fomata um string para caber dentro que um espa�o pr�-definido
         * 1 = vari�vel
         * 2 = n�mero de posi��es
         * 3 = "preechimento"
         * 4 = posiciona a string (str_pad_right , str_pad_left , str_pad_both )
         */
        echo str_pad($wordSet, 30, "-", STR_PAD_BOTH);
        
            ?>
</div>
</body>
</html>
 
