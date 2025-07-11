<?php

$mois = [
    '01' => 'Janvier',
    '02' => 'Fevrier',
    '03' => 'Mars',
    '04' => 'Avril',
    '05' => 'Mai',
    '06' => 'Juin',
    '07' => 'Juillet',
    '08' => 'Août',
    '09' => 'Septembre',
    '10' => 'Octobre',
    '11' => 'Novembre',
    '12' => 'Décembre',
];

function makeSlug($text)
{
    /* convertir en minuscule */
    $text = strtolower($text);

    /* remplacer les caractères accentués */
    $text = preg_replace(
        array('/&.*;/', '/\W/'),
        '-',
        preg_replace(
            '/&([A-Za-z]{1,2})(grave|acute|circ|cedil|uml|lig);/',
            '$1',
            htmlentities($text, ENT_NOQUOTES, 'UTF-8')
        )
    );

    /* tirets multiples */
    $text = preg_replace('/-+/', '-', $text);

    /* retirer les tirets en début et fin de chaîne */
    $text = trim($text, '-');

    return $text;
}

function getArchives(){
    return [
        '2025' => [
            '06' => [
                '11-02-31-test-wiki-02.txt',
                '11-02-31-test-creation-fichier-wiki.txt',
                '11-02-33-test-wiki-03.txt.txt'
            ],
            '07' => [
                '11-02-31-test-wiki-02.txt',
                '11-02-31-test-creation-fichier-wiki.txt',
                '11-02-33-test-wiki-03.txt.txt'
            ]
        ]
    ];
}

function mkmapSimple($directory){
    // faire la "cartographie" des répertoires 
    // et fichiers contenus à l'adresse indiquée
    $map = "";
    $map .= "<ul class=\"\">";
    $folder = opendir($directory);
    while( $file = readdir($folder) ){
        if( $file !== "." && $file !== ".." ){
            $pathfile = $directory. "/" . $file;
            if(filetype($pathfile) == "dir"){
                $map .= "<li class=\"active m-1\">";
                $map .= $file;
                $map .= "</li>";
            }else{
                $map .= "<li class=\"justify-content-between d-flex m-1\">";
                $map .= "<a class=\"\" target=\"_blank\" href=\"". $pathfile ."\">";
                $map .= $file;
                $map .= "</a>";
                $map .= "</li>";
            }
            if(filetype($pathfile) == "dir"){
                $map .= mkmapSimple($pathfile);
            }
        }
    }
    $map .= "</ul>";
    return $map;
}