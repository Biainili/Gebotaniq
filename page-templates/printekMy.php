<?php /* Template Name: printekMy */ ?>

<?php get_header(); ?>
<?php  ?>
<!--function for Page Header Start-->
<?php include("templates/func-header.php"); ?> 



<header>

 <title>Գեպո Տանիք | Ապրանքներ | Պրինտեկ</title>

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
    $title = "Պրինտեկ Ծալքաթիթեղ";
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
         <img class="img-main" src="<?php echo ne_asset('/images/products/products-details-img-printek.jpg')?>" alt="" >
		   <div class="img-icon">
             <span class="icon-analysis"></span>
           </div>
	    </div>
     <!--Main Photo and Text-->


      <h3 class="caption" type="text-titel">Պրինտեկ Ծալքաթիթեղ</h3><br>
      <p class="caption">Պրինտեկ պոլիմերային ծածկույթով ծալքաթիթեղներն առանձնանում են իրենց անալոգներից միայն բացառիկ էսթետիկ հատկությունների շնորհիվ: Առանձնահատկությունը կայանում է հատուկ օֆսեթային տպագրության մեջ, որի շնորհիվ ցինկապատ պողպատե թիթեղի վրա տպագրվում է բնական քարի, փայտի, խոտի և այլ պրինտեր:</p><br><br>
      <p class="caption">Այս ծալքաթիթեղները հանդիսանում են ինքնատիպ և մատչելի ցանկապատման կատարյալ տարբերակ։ Ինչպես նաև լավ լուծում կարող են լինել որսորդական կամ ռազմական նշանակության օբյեկտների կառուցման համար։</p><br><br>
	    <p class="caption">Գեպո Տանիք ընկերությունը հայ սպառողին է առաջարկում շուկայում առկա պրինտեկ ծալքաթիթեղների ամենալայն տեսականին։</p><br><br>


      <table class="table-1">
      <tr><th class="border">Պրինտ</th><th class="border">Թիթեղի հաստություն</th></tr>
		   <tr><td class="border">Մոխրագույն քար</td><td class="border">0,45 մմ</td></tr>
		   <tr><td class="border">Շագանակագույն քար</td><td class="border">0,45 մմ</td></tr>
		   <tr><td class="border">Բաց փայտ, երկկողմանի պրինտով</td><td class="border">0,45 մմ</td></tr>
		   <tr><td class="border">Մուգ փայտ</td><td class="border">0,45 մմ</td></tr>
		   <tr><td class="border">Խոտ</td><td class="border">0,45 մմ</td></tr>
		   <tr><td class="border">Բամբուկ</td><td class="border">0,45 մմ</td></tr>
		   <tr><td class="border">Կամուֆլյաժ</td><td class="border">0,45 մմ</td></tr>
		   <tr><td class="border">Քլաուդի</td><td class="border">0,45 մմ</td></tr>
      </table><br><br>

      <p class="caption">Հատուկ պատվերի դեպքում հնարավոր է պրինտեկ ծալքաթիթեղների արտադրություն մեզ մոտ առկա ծալքաթիթեղների և մետաղական կղմինդրի յուրաքնչյուր մոդելի տեսքով։</p><br>

      <div style="display: flex;  margin-bottom: 20px;">

        <div style="flex: 1; display: flex; flex-direction: column;">
          <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-printek-img-1.png')?>" alt="">
          <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-printek-img-2.png')?>" alt="">
          <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-printek-img-5.png')?>" alt="">
          <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-printek-img-7.png')?>" alt="">
        </div>

        <div  style="flex: 1; display: flex; flex-direction: column;">
          <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-printek-img-3.png')?>" alt="">
          <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-printek-img-4.png')?>" alt="">
          <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-printek-img-6.png')?>" alt="">
        </div><br><br>

      </div>


    </div>
    <!--Main Content End-->


</div>
<!--Page Content and Menu End-->