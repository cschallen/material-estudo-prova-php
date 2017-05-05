<?php
function imprimirNomesCSV(){
    $list = array( "Petter, Griffin, Oslo, Norway", "Glenn, Quagmire, Oslo, Norway"); //listo um array passando os nomes que quero escrever dps

    $file = fopen("csv/nomes.csv", "w");
    //abro o arquivo csv, e passo 'w', dizendo que quero permissao de escrita no arquivo
    //'w' zera o arquivo, e coloca o curso no inicio dele (escreve do 0 o arquivo)

    foreach ($list as $line) {
        fputcsv($file, explode(',', $line));
        // para cada linha, pega o arquivo $file e a cada , separa o nome
    }
    fclose($file);
}

function imprimirNomesArrayCSV(){
    $lista = array (
        array('aaa', 'bbb', 'ccc', 'dddd'),
        array('123', '456', '789'),
        array('"aaa"', '"bbb"')
    );

    $fp = fopen('csv/arquivo.csv', 'a');
    //'a' mantem o arquivo, e coloca o cursor no final dele


    foreach ($lista as $linha) {
        fputcsv($fp, $linha);
    }
    fclose($fp);
}

imprimirNomesCSV();
imprimirNomesArrayCSV();
?>
