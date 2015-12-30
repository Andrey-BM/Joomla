<?php

defined('_JEXEC') or die;

//Вытаскиваем переменные - данные заполненные в админке
$spn_text = $params->get('spn_text');

for($i=1; $i<17; $i++)
{
    if($params->get('spn_url_'.$i)!='')
    {
        $spn_img[$i] = $params->get('spn_img_'.$i);
        $spn_url[$i] = $params->get('spn_url_'.$i);
        
    }
}

?>
<link type="text/css" href="/modules/mod_sponsors/style_sponsors.css" rel="stylesheet" />
<div class="sponsors<?php echo $params->get('moduleclass_sfx'); ?>">
<div class="spn_body">
   <div class="spn_top">
    <div class="spn1_1"><a href="<?php echo $spn_url[1]; ?>" target="_blank"><img src="<?php echo $spn_img[1]; ?>" /></a></div>
    <div class="spn1"><a href="<?php echo $spn_url[2]; ?>" target="_blank"><img src="<?php echo $spn_img[2]; ?>" /></a></div>
    <div class="spn1"><a href="<?php echo $spn_url[3]; ?>" target="_blank"><img src="<?php echo $spn_img[3]; ?>" /></a></div>
    <div class="spn1"><a href="<?php echo $spn_url[4]; ?>" target="_blank"><img src="<?php echo $spn_img[4]; ?>" /></a></div>
    <div class="spn1"><a href="<?php echo $spn_url[5]; ?>" target="_blank"><img src="<?php echo $spn_img[5]; ?>" /></a></div>
    <div class="spn1"><a href="<?php echo $spn_url[6]; ?>" target="_blank"><img src="<?php echo $spn_img[6]; ?>" /></a></div>
    <div class="spn1"><a href="<?php echo $spn_url[7]; ?>" target="_blank"><img src="<?php echo $spn_img[7]; ?>" /></a></div>
    <div class="spn1"><a href="<?php echo $spn_url[8]; ?>" target="_blank"><img src="<?php echo $spn_img[8]; ?>" /></a></div>
   </div>
   <div class="spn_btm">
    <div class="spn2_1"><a href="<?php echo $spn_url[9]; ?>" target="_blank"><img src="<?php echo $spn_img[9]; ?>" /></a></div>
    <div class="spn2"><a href="<?php echo $spn_url[10]; ?>" target="_blank"><img src="<?php echo $spn_img[10]; ?>" /></a></div>
    <div class="spn2"><a href="<?php echo $spn_url[11]; ?>" target="_blank"><img src="<?php echo $spn_img[11]; ?>" /></a></div>
    <div class="spn2"><a href="<?php echo $spn_url[12]; ?>" target="_blank"><img src="<?php echo $spn_img[12]; ?>" /></a></div>
    <div class="spn2"><a href="<?php echo $spn_url[13]; ?>" target="_blank"><img src="<?php echo $spn_img[13]; ?>" /></a></div>
    <div class="spn2"><a href="<?php echo $spn_url[14]; ?>" target="_blank"><img src="<?php echo $spn_img[14]; ?>" /></a></div>
    <div class="spn2"><a href="<?php echo $spn_url[15]; ?>" target="_blank"><img src="<?php echo $spn_img[15]; ?>" /></a></div>
    <div class="spn2"><a href="<?php echo $spn_url[16]; ?>" target="_blank"><img src="<?php echo $spn_img[16]; ?>" /></a></div>
    <div class="spn_text"> <p id="spn_text"><?php echo $spn_text; ?></p> </div>
   </div>
    
</div>
</div>