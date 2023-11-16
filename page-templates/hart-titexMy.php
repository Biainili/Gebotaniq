<?php /* Template Name: hart-titexMy */ ?>

<?php get_header(); ?>
<?php  ?>
<!--function for Page Header Start-->
<?php include("templates/func-header.php"); ?> 



<header>

 <title>Գեպո Տանիք | Ապրանքներ | Հարթ Թիթեղ</title>

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
    $title = "Հարթ Թիթեղ";
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
           <img class="img-main" src="<?php echo ne_asset('/images/products/products-details-img-hart-titex.jpg')?>" alt="" >
		   <div class="img-icon">
             <span class="icon-analysis"></span>
           </div>
	    </div>
     <!--Main Photo and Text-->


     <h3 class="caption" type="text-titel">Հարթ Թիթեղ</h3><br>
     <p class="caption">Օգտագործելով սեփական արտադրության մեջ միայն որակյալ հումք՝ Գեպո Տանիք ընկերությունն իրականացնում է նաև բարձրակարգ պողպատյա հարթ թիթեղների վաճառք, ինչպես գլանափաթեթով, այնպես էլ քառակուսի մետրով։</p><br><br>
     <p class="caption">Մետաղական հարթ թիթեղը՝ թեթև, ամուր, չափազանց պահանջված ժամանակակից շինանյութ է և հումք։ Դրանից պատրաստվում են ծալքաթիթեղներ, մետաղական կղմինդրներ, ջրահեռացման համակարգեր, ցամաքուրդներ և տարբեր սարքավորումների մասեր։ Եվ սա դեռ այս ունիվերսալ նյութի օգտագործման ամբողջական ցանկը չէ:</p><br><br>
     <p class="caption">Մեզ մոտ առակ է հետևյալ հարթ թիթեղների տեսակներ․</p><br><br>

     <ul class="caption-list">
        <li> Սև մետաղական հարթ թիթեղ</li>
        <li> Ցինկապատ հարթ թիթեղ</li>
		    <li> Գունավոր հարթ թիթեղ</li>
		    <li> Պրինտեկ հարթ թիթեղ</li>
     </ul><br><br>

     <p class="caption">Թիթեղի հաստությունը՝ 0.30, 0.40, 0.45, 0.50 մմ</p>
     <p class="caption">Լայնությունը՝ 1000×2000 մմ</p>
     <p class="caption">Երկարությունը՝ ըստ պատվիրատուի</p><br><br>

     <div style="display: flex;  margin-bottom: 20px;">

       <div style="flex: 1; display: flex; flex-direction: column;">
         <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-hart-titex-img-1.png')?>" alt="">
         <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-hart-titex-img-4.png')?>" alt="">
       </div>

       <div  style="flex: 1; display: flex; flex-direction: column;">
         <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-hart-titex-img-2.png')?>" alt="">
         <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-hart-titex-img-5.png')?>" alt="">
       </div>

       <div  style="flex: 1; display: flex; flex-direction: column;">
         <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-hart-titex-img-3.png')?>" alt="">
         <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-hart-titex-img-6.png')?>" alt="">
       </div>

     </div><br><br>

    

    </div>
    <!--Main Content End-->


</div>
<!--Page Content and Menu End-->