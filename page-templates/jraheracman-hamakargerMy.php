<?php /* Template Name: jraheracman-hamakargMy */ ?>

<?php get_header(); ?>
<?php  ?>
<!--function for Page Header Start-->
<?php include("templates/func-header.php"); ?> 



<header>

 <title>Գեպո Տանիք | Ապրանքներ | Ջրահեռացման Համակարգեր</title>

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
    $title = "Ջրահեռացման Համակարգեր";
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
           <img class="img-main" src="<?php echo ne_asset('/images/products/products-details-img-jraheracman-hamakarger.jpg')?>" alt="" >
		   <div class="img-icon">
             <span class="icon-analysis"></span>
           </div>
	    </div>
        <!--Main Photo and Text-->


        <h3 class="caption" type="text-titel">Ջրահեռացման Համակարգեր</h3><br>
        <p class="caption">Այսօր անհնար է պատկերացնել որևիցե ժամանակակից շինություն առանց ջրահեռացման համակարգի: Ջրահեռացման համակարգը բաղկացած տարբեր տարրերից և կազմամասերից, որոնք կազմելով մի ամբողջականություն, անվտանգ հեռացնում են ջուրը տանիքից։ Այսպիսով, ջրի կազմակերպված արտահոսքը պաշտպանում է շինության ճակատները և հիմքը ջրի վնասակար ազդեցությունից:</p><br><br>
        <p class="caption">Ջրահեռացման համակարգի բաղկացուցիչ մասերն են՝ խողովակներ, ջրհորդաններ, ջրհորդանի անկյուն, ջրհորդանի ձագար, փականներ և կախիչներ։</p><br><br>
		<p class="caption">Ջրահեռացման համակարգի յուրաքանչյուր տարր պետք է պատրաստված լինի ցինկապատ բարձրակարգ մետաղից, որպեսզի չենթարկվի կոռոզիայի և դեֆորմացիայի։ Ըստ ձևի պետք է տարբերել կլոր և ուղղանկյուն ջրահեռացման համակարգ։ Ուղղանկյունաձև ջրահեռացման համակարգերը համարվում են Ժամանակակից տարբերակ և ունեն մեծ պահանջարկ։</p><br><br>
		<p class="caption">Գեպո Տանիք ընկերությունը բարձրակարգ մասնագետները պատրաստ են հաշվարկել Ձեր տանիքի համար անհրաժեշտ ջրահեռացման համակարգի հավաքածուն և իրականացնել վերջինիս պատրաստումն ու տեղադրումը:</p><br><br>


        <div class="photo-content">
           <div class="photo-content-col">
             <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-jraheracman-hamakarger-img-1.png')?>" alt="">
             <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-jraheracman-hamakarger-img-3.png')?>" alt="">
             <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-jraheracman-hamakarger-img-5.png')?>" alt="">
             <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-jraheracman-hamakarger-img-7.png')?>" alt="">
             <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-jraheracman-hamakarger-img-9.png')?>" alt="">
            </div>
            <div class="photo-content-col">
             <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-jraheracman-hamakarger-img-2.png')?>" alt="">
             <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-jraheracman-hamakarger-img-4.png')?>" alt="">
             <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-jraheracman-hamakarger-img-6.png')?>" alt="">
             <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-jraheracman-hamakarger-img-8.png')?>" alt="">
             <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-jraheracman-hamakarger-img-10.png')?>" alt="">
            </div>
        </div><br><br>


    </div>
    <!--Main Content End-->

</div>
<!--Page Content and Menu End-->