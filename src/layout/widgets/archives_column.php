<h3>Les anciens articles</h3>
<?php
/*
$articles = getArchives();
$navArchive = '<ul>';
foreach($articles as $year => $months){
    $navArchive .= '<li>'.$year;
    $navArchive .= '<ul>';
    foreach($months as $month => $contents){
        $navArchive .= '<li>'.$month;
        $navArchive .= '<ul>';        
        foreach($contents as $file){
            $navArchive .= '<li>'.$file.'</li>';

        }
        $navArchive .= '</ul>';
        $navArchive .= '</li>';    
    }
    $navArchive .= '</ul>';
    $navArchive .= '</li>';    
}
$navArchive .= '</ul>';
echo $navArchive;
*/
echo mkmapSimple('./assets/files');

?>