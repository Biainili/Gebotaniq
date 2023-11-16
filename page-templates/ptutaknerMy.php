<?php /* Template Name: ptutaknerMy */ ?>

<?php get_header(); ?>
<?php  ?>
<!--function for Page Header Start-->
<?php include("templates/func-header.php"); ?> 



<header>

 <title>Գեպո Տանիք | Ապրանքներ | Պտուտակներ</title>

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
    $title = "Պտուտակներ";
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
           <img class="img-main" src="<?php echo ne_asset('/images/products/products-details-img-ptutak.jpg')?>" alt="" >
		   <div class="img-icon">
             <span class="icon-analysis"></span>
           </div>
	    </div>
        <!--Main Photo and Text-->


        <h3 class="caption" type="text-titel">Պտուտակներ</h3><br>
        <p class="caption">Մետաղական կղմինդրը և ծալքաթիթեղն ամրանում են տանիքի հիմնակմախքին հատուկ պտուտակների օգնությամբ։ Այդ  տիպի պտուտակներն ունեն հետևյալ կառուցվածքը՝ վեցանկյուն գլխիկ, որի տակ գտնվում է հերմետիկությունն ապահովող տափօղակը, իսկ պտուտակի ծայրն ունի հորատանման տեսք։ Տանիքածածկման ժամանակ կիրառվող պտուտակը պետք է լինի ցինկապատ, որպեսզի հետագայում չենթարկվի կորոզիայի, իսկ գլխիկը կարող է ներկված լինի և համապատասխանի ծալքաթիթեղի կամ մետաղական կղմինդրի երանգին։</p><br><br>
        <p class="caption">Սենդվիչ պանելները նույնպես պահանջում են հատուկ պտուտակների կիրառում։ Այս տիպի պտուտակները ավելի երկար են քան ծալքաթիթեղների համար նախատեսված պտուտակները և ունեն 2 պարուրակ։ 1-ինը գտնվում է պտուտակի ծայրային հատվածում և ավելի խիտ քայլեր ունի, իսկ 2-րդը գտնվում է գլխիկի մոտ և ունի ավելի նոսր քայլերով պարույր։ Սենդվիչ պանելների համար նախատեսված պտուտակները նույն պես ունեն վեցանկյուն գլխիկ և հերմետիկությունն ապահովող տափօղակ։</p><br><br>
        <p class="caption">Մեզ մոտ Դուք կարող եք գտնել հետևյալ տեսակի պտուտակներ․</p><br><br>
        <p class="caption"><strong>Տանիքի ծածկի պտուտակ</strong></p><br><br>

        <table class="table-1">
            <tr><th class="border">Տեսակ</th><th class="border">Չափ</th></tr>
			<tr><td class="border">Ցինկապատ</td><td class="border">4.8×40, 4.8×50, 5.5×19, 5.5×25, 5.5×38 մմ</td></tr>
			<tr><td class="border">Գունավոր</td><td class="border">4.8×40, 4.8×50 մմ</td></tr>
        </table><br><br>

        <p class="caption"><strong>Սենդվիչ պանելի պտուտակ</strong></p><br><br>

        <table class="table-1">
            <tr><th class="border">Տեսակ</th><th class="border">Չափ</th></tr>
			<tr><td class="border">Ցինկապատ</td><td class="border">120, 135, 160, 200 մմ</td></tr>
        </table><br><br>

        <div style="display: flex;  margin-bottom: 20px;">
           <div style="flex: 1; display: flex; flex-direction: column;">
             <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-ptutakner-img-1.png')?>" alt="">
            </div>
            <div style="flex: 1; display: flex; flex-direction: column;">
             <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-ptutakner-img-2.png')?>" alt="">
            </div>
        </div><br><br>

    </div>
    <!--Main Content End-->

</div>
<!--Page Content and Menu End-->