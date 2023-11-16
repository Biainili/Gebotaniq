<?php /* Template Name: sidingMy */ ?>

<?php get_header(); ?>
<?php  ?>
<!--function for Page Header Start-->
<?php include("templates/func-header.php"); ?> 



<header>

 <title>Գեպո Տանիք | Ապրանքներ | Սայդինգ</title>

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
    $title = "Մետաղական Սայդինգ";
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
           <img class="img-main" src="<?php echo ne_asset('/images/products/products-details-img-siding.jpg')?>" alt="" >
		   <div class="img-icon">
             <span class="icon-analysis"></span>
           </div>
	    </div>
     <!--Main Photo and Text-->


     <h3 class="caption" type="text-titel">Մետաղական Սայդինգ</h3><br>
     <p class="caption">Մետաղական սայդինգը ժամանակակից ֆասադային նյութ է, որը կարողացել է իրեն գերազանց դրսևորել ի շնորհիվ մի շարք դրական առանձնահատկությունների և հասանելի արժեքի:</p><br><br>
     <p class="caption">Սայդինգը կիրառելի է ինչպես նորակառույց առանձնատների և ամառանոցների երեսպատման, այնպես էլ արդեն իսկ գոյություն ունեցող շենքերի ճակատները վերափոխելու համար:</p><br><br>
     <p class="caption">Մետաղական սայդինգի արտադրման ժամանակ օգտագործվողում է 0,4-0,5մմ հաստությամբ, գունավոր պոլիմերային ծածկույթով ցինկապատ թիթեղ, որի որակից էլ կախված է սայդինգի ամրությունը և հուսալիությունը։</p><br><br>
     <p class="caption">Սայդինգը ոչ միայն պաշտպանում է շինությունն արտաքին վնասակար ազդեցություններից, այլ նաև ապահովում վերջինիս օդափոխությունը, որը նույնպես շատ կարևոր նախապայման է երեսպատման հարցում։</p><br><br>
     <p class="caption">Սայդինգով երեսպատումն իրականանում է առանձին պանելների օգնությումբ, որոնք միանում են իրար հատուկ փականային համակարգի շնորհիվ։ Պանելներն ամրանում են շինության պատին՝ ցինկապատ պողպատե պրոֆիլներից պատրաստված հիմնակմաղքի վրա:</p><br><br>
     <p class="caption">Գեպո Տանիք ընկերությունն առաջարկում է սեփական արտադրության D4 մոդելի մետաղական սայդինք, որը պատրաստված է բարձրակարգ հարավկորեական հումքից։</p><br><br>
     <p class="caption">Մեզ մոտ Դուք կարող եք պատվիրել մետաղական սայդինգ Ձեր իսկ նախընտրած գույնի (ըստ RAL գունապնակի) և քարի, փայտի պրինտեկ պոլիմերային ծածկույթով սայդինգ։</p><br><br>

     <table style="width: 100%; max-width: 100%; table-layout: fixed;">
        <tr><th class="border">Թիթեղի հաստություն</th><th class="border">Պրոֆիլային լայնություն</th><th class="border">Մոնտաժային լայնություն</th></tr>
		<tr><td class="border">0,5 մմ</td><td class="border">260 մմ</td><td class="border">210 մմ</td></tr>
     </table><br><br>

     <img style="  opacity: 1; max-width: 100%; height: auto;" src="<?php echo ne_asset('/images/products/products-details-img-siding-img-1.png')?>" alt=""><br><br><br>  <!--img class don't work-->

    </div>
    <!--Main Content End-->

</div>
<!--Page Content and Menu End-->