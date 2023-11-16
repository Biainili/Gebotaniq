<?php /* Template Name: metaxakan-amranMy */ ?>

<?php get_header(); ?>
<?php  ?>
<!--function for Page Header Start-->
<?php include("templates/func-header.php"); ?> 

<header>

 <title>Գեպո Տանիք | Ապրանքներ | Մետաղական Ամրան</title>

 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="description" content="Գեպո Տանիք ընկերությունը Ձեզ է առաջարկում 3 մոդելի մետաղական կղմինդր:" />

 <link rel="apple-touch-icon" sizes="180x180" href="<?php echo ne_asset('/images/favicons/apple-touch-icon.png')?>" />
 <link rel="icon" type="image/png" sizes="32x32" href="<?php echo ne_asset('/images/favicons/favicon-32x32.png')?>" />
 <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ne_asset('/images/favicons/favicon-16x16.png')?>" />
 <link rel="manifest" href="<?php echo ne_asset('/images/favicons/site.webmanifest')?>" />

 <link rel="preconnect" href="https://fonts.googleapis.com"> 
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

 <link rel="stylesheet" type="text/css" href="<?php echo ne_asset('/mycss/calatitexMy.css'); ?>">
 <link rel="stylesheet" type="text/css" href="<?php echo ne_asset('/mycss/service-details.css'); ?>">

</header>


<!--Page Header Start-->

<section class="page-header">
    <div class="page-header-bg-img" style="background-image: url(<?php echo ne_asset('/images/backgrounds/page-header-gepo.jpg')?>)"> </div>
    
	<?php
    $title = "Մետաղական Ամրան";
    $pageHeader = createPageHeader($title);
    echo $pageHeader;
    ?>
</section>

<!--Page Header End-->

<!--Page Content and Menu Start-->
<div class="body-container">

    <!--Menu Bar Left Start-->
    <div class="container-menu">
        <ul>
          <?php include 'templates/service-details.php';?>
        </ul>
    </div>
	<!--Menu Bar Left End-->

    <!--Main Content Start-->
	<div class="page-content">

        <!--Main Photo and Text-->
        <div class="img-container">
           <img class="img-main" src="<?php echo ne_asset('/images/products/products-details-img-amran.jpg')?>" alt="" >
		   <div class="img-icon">
             <span class="icon-analysis"></span>
           </div>
	    </div>
        <!--Main Photo and Text-->


        
        <h3 class="caption" type="text-titel">Մետաղական Ամրան</h3><br>
        <p class="caption">Բետոնն այսօր ամենահայտնի շինանյութերից մեկն է, սակայն առանց դրա ամրացման անհնար է կառուցել որևէ բետոնե կոնստրուկցիա։ Ամրացման համար կիրառում են տարբեր տրամաչափի մետաղական ամրաններ, որոնք էլ ծառայում են բետոնի կոշտության և ամրության բնութագրերի բարձրացմանը:</p><br><br>
        <p class="caption">Մետաղական ամրանն իրենից ներկայացնում է պողպատե մետաղաձող, որը կիրառվում է արդյունաբերական և քաղաքացիական շինարարության բոլոր ոլորտներում։</p><br><br>
        <p class="caption">Պետք է տարբերակել ակոսավոր և հարթ մակերեսով մետաղական ամրան։ Ակոսավոր մակերեսը մեծացնում է ամրանի ադգեզիան բետոնի հետ։ Ինչպես նաև ամրաններն ունեն դասակարգիչ ըստ մետաղի կարգի։ Տաք գլանվածքով (A դաս) և սառը գլանվածքով (դաս B):</p><br><br>
        <p class="caption">Գեպո Տանիք ընկերությունը Ձեզ է  առաջարկում A դասի, ակոսավոր մակերեսով մետաղական ամրան հետևյալ տրամաչափերի՝ 8 մմ, 10 մմ, 12 մմ, 14 մմ, 16 մմ, 18 մմ, 32 մմ։</p><br><br>

        <div class="photo-content">
          <div class="photo-content-col">
            <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-amran-img-1.jpg')?>" alt="">
          </div>
          <div class="photo-content-col">
            <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-amran-img-2.png')?>" alt="">
          </div>
        </div><br><br><br><br><br>



    </div>
    <!--Main Content End-->

</div>
<!--Page Content and Menu End-->