<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="windows-1252"/>
  <title>Some functions PHP</title>
</head>
<body>
<div>
    <?php
        $wordSet = isset($_GET["data"])?$_GET["data"]:"Athos";
        /* A partir de agora estão listadas algumas funções para tratamento de string 
         * com objetivo de aprendizado
         * por Athos Alefe
         */
        //strlen = conta as posições;
        echo "<p>".strlen($wordSet)."</p>";
        
        //strtoupper = passa pra maiúsculo;
        echo "<p>".strtoupper($wordSet)."</p>";
        
        //strtolower = passa pra minúsculo;
        echo "<p>".strtolower($wordSet)."</p>";
        
        //strpos = procura a posição de uma substr
        echo "<p>".strpos($wordSet,"A")."</p>";
        
        //stripos = strpos porém ignora caracteres maiúsculos e minúsculos
        echo "<p>".stripos($wordSet,"a")."</p>";
        
        //substr = captura uma substr
        echo "<p>".substr($wordSet,-5)."</p>";
        
         /*wordwrap = quebra linhas no código e no out. 
         * 1 = variável; 
         * 2 = posição; 
         * 3 = elemento de repetição(com \n quebra o código); 
         * 4 = false > mantem palavras :  true > não mantem palavras        
         */
        echo "<p>".wordwrap($wordSet,5,"<br/>\n",false)."</p>";
        
        //trim = corta espaços
        echo "<p>".trim($wordSet)."</p>";
        
        //ltrim = corta espaços só do inicio
        echo "<p>".ltrim($wordSet)."</p>";
        
        //rtrim = corta espaços só do final
        echo "<p>".rtrim($wordSet)."</p>";
        
        /* str_word_count = mostra o número de palavras em uma frase
         * 1 = variável
         * 2 = parâmetros 
         * (0 > mostra apenas o número de palavras)
         * (1 > aloca as palavras em um array)
         * (2 > aloca as palavras em um array colocando como índice a posição de início das palavras)
         */
        $example = str_word_count($wordSet,0);
        echo "<p>".$example."</p>";
        
        //strsplit = coloca as letras individualmente em um array
        $example1 = str_split($wordSet);
        var_dump($example1); 
        
        //ucfirst = ucword = coloca as primeiras letras de cada palavra da str em maiúsculo
        echo "<p>".ucwords($wordSet)."</p>";
        
        //strrev = coloca a string ao contrário        
        echo "<p>".strrev($wordSet)."</p>";
        
        //substr_count = conta quantas vezes uma substr aparece
        $example2 = substr_count($wordSet, "e");
        echo "<p>$example2</p>";
        
        
        
        //str_repeat = repete a string
        echo "<p>".str_repeat($wordSet,10)."</p>";
        
        //str_replace = troca algum elemento da string por outro 
        echo "<p>".str_replace("a","b",$wordSet)."</p>";
        
        //str_ireplace = faz o mesmo que str_replace porém ignorando a capitalização das letras
        
        /* strpad = fomata um string para caber dentro que um espaço pré-definido
         * 1 = variável
         * 2 = número de posições
         * 3 = "preechimento"
         * 4 = posiciona a string (str_pad_right , str_pad_left , str_pad_both )
         */
        echo str_pad($wordSet, 30, "-", STR_PAD_BOTH);
        
            ?>
</div>
</body>
</html>
 
