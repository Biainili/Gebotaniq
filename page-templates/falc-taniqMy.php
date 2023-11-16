<?php /* Template Name: falc-taniqMy */ ?>

<?php get_header(); ?>
<?php  ?>
<!--function for Page Header Start-->
<?php include("templates/func-header.php"); ?> 



<header>

 <title>Գեպո Տանիք | Ապրանքներ | Կցակարային Տանիք</title>

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
    $title = "Կցակարային Տանիք";
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
         <img class="img-main" src="<?php echo ne_asset('/images/products/products-details-img-falc-taniq.jpg')?>" alt="" >
		   <div class="img-icon">
             <span class="icon-analysis"></span>
           </div>
	    </div>
     <!--Main Photo and Text-->


     <h3 class="caption" type="text-titel">Կցակարային Տանիք</h3><br>
     <p class="caption">Կցակարային կամ ֆալց տանիքը հանդիսանում է հին, բայց տարիների ընթացքում փորձված տանիքածածկման տեխնոլոգիա, որը վստահորեն կարելի է համարել հերմետիկության չափանիշ այս ոլորտում։</p><br><br>
     <p class="caption">Կցակարային տանիքը պատրաստվում է ցինկապատ մետաղական թիթեղից և ունի հատուկ փականային համակարգ, որի շնորհիվ էլ ապահովվում է տանիքի հերմետիկությունը և ամբողջականությունը։ Այս փականը կոչվում է ՝ ֆալց և իրենցից ներկայացնում է մեկը մյուսի մեջ մտնող եզրային ծալքեր կամ կարեր, ինչի շնորհիվ թիթեղի վրա հարկավոր չէ բացել անցքեր պտուտակների համար։ Պտուտակները օգտագործվում են միայն թիթեղի հակառակ եզրը տանիքի հիմնակմախքին ամրաքնելու ժամանակ և այդ հատվածը մնում է հարևան թիթեղի տակ։</p><br><br>
     <p class="caption">Ահա, այսպես կցակարային տանիքը դառնում է մեկ ամբողջական մետաղական կոնստրուկցիա, որը բացառում է ջրի ներհոսքը։</p><br><br>
     <p class="caption">Գեպո Տանիք ընկերությունն արտադրում է կցակարային տանիքի թիթեղներ հետևյալ ստանդարտներով․</p><br><br>

     <table class="table-style">
        <tr><th class="border">Մետաղ</th><th class="border">Հաստություն</th><th class="border">Պրոֆիլային լայնություն</th><th class="border">Մոնտաժային լայնություն</th></tr>
		<tr><td class="border">Ցինկապատ</td><td class="border">0.30, 0.35, 0.40, 0.45, 0.50, 0.55, 0.60, 0.65, 0.70 մմ</td><td class="border">550 մմ</td><td class="border">500 մմ</td></tr>
		<tr><td class="border">Գունավոր</td><td class="border">0.50 մմ</td><td class="border">550 մմ</td><td class="border">500 մմ</td></tr>
     </table><br><br>

     <img style="  opacity: 1; max-width: 100%; height: auto;" src="<?php echo ne_asset('/images/products/products-details-img-falc-taniq-img-1.png')?>" alt=""><br><br>


    </div>
    <!--Main Content End-->

</div>
<!--Page Content and Menu End-->