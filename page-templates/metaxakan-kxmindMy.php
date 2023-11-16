<?php /* Template Name: metaxakan-kxmindMy */ ?>

<?php get_header(); ?>
<?php  ?>
<!--function for Page Header Start-->
<?php include("templates/func-header.php"); ?> 



<header>

 <title>Գեպո Տանիք | Ապրանքներ | Մետաղական Կղմինդր</title>

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
    $title = "Մետաղական Կղմինդր";
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
         <img class="img-main" src="<?php echo ne_asset('/images/products/products-details-img-kxmindr.jpg')?>" alt="" >
		   <div class="img-icon">
             <span class="icon-analysis"></span>
           </div>
	    </div>
        <!--Main Photo and Text-->

        <h3 class="caption" type="text-titel">Մետաղական Կղմինդր</h3> <br>
        <p class="caption">Մետաղական կղմինդրը լայն ճանաչում ունեցող ժամանակակից շինանյութ է, որը նախատեսված է առնվազն 14 ° թեքություն ունեցող տանիքների կառուցման համար։ Արտաքին տեսքով այն նման է բնական կավե կղմինդրին, բայց պատրաստված է պողպատե ցինկապատ թիթեղից, հետևաբար ունի ավելի ցածր գին, սակայն չի զիջում իր տեխնիկական հատկություններով վերջինիս։ Մետաղական կղմինդրի երկարակեցությունը կախված է մետաղի հաստությունից, պաշտպանիչ ու դեկորատիվ ծածկույթի տեսակից,  և կարող է լինել 10-ից 50 տարի:</p><br><br>
        <p class="caption">Մետաղական կղմինդրի մեծ պահանջարկը բացատրվում է դրա մի շարք առավելություններով.</p><br><br>
         
        

        <ul style="list-style-type: square; color: #6c6b6f; text-align: left; margin-left: 50px; line-height: 1.9; font-size: 18px;">
            <li> Թեթև քաշ -  1 ք/մ-ը կշռում է մոտավորապես 3-6 կգ</li>
            <li> Ամրություն - ի շնորհիվ կղմինդրի ինքնատիպ ալիքավոր կոնֆիգուրացիայի, այն պատրաստ է դիմանալ մեծ ծանրաբեռնվածությունների</li>
			<li> Կոռոզիայից պաշտպանվածության բարձր աստիճան - ցինկի և պոլիմերային ծածկույթի շնորհիվ բացառվում է ժանգի առաջացումը</li>
			<li> Պարզ մոնտաժ – տանիքի ճշգրիտ հիմնակմախքի առկայության դեպքում</li>
        </ul><br><br>

        <p class="caption">Գեպո Տանիք ընկերությունը Ձեզ է առաջարկում հետևյալ 3 մոդելի մետաղական կղմինդր</p><br><br>

        <h3 class="caption" type="text-titel">Դասական</h3><br>
        <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-kxmindr-dasakan.png')?>" alt=""><br><br>

        <table class="table-1">
            <tr><th class="border">Հաստություն</th><th class="border">Պրոֆիլային լայնություն</th><th class="border">Մոնտաժային լայնություն</th></tr>
		    <tr><td class="border">0,5 մմ</td><td class="border">1200 մմ</td><td class="border">1100 մմ</td></tr>
        </table><br><br>


        <h3 class="caption" type="text-titel">Կասկադ</h3><br>
        <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-kxmindr-kaskad.png')?>" alt=""><br><br>

        <table class="table-1">
            <tr><th class="border">Հաստություն</th><th class="border">Պրոֆիլային լայնություն</th><th class="border">Մոնտաժային լայնություն</th></tr>
			<tr><td class="border">0,5 մմ</td><td class="border">1100 մմ</td><td class="border">1030 մմ</td></tr>
        </table><br><br>


        <h3 class="caption" type="text-titel">Կասկադ 2</h3><br>
        <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-kxmindr-kaskad-2.png')?>" alt=""><br><br>

        <table class="table-1">
            <tr><th class="border">Հաստություն</th><th class="border">Պրոֆիլային լայնություն</th><th class="border">Մոնտաժային լայնություն</th></tr>
			<tr><td class="border">0,5 մմ</td><td class="border">1160 մմ</td><td class="border">1060 մմ</td></tr>
        </table><br><br>





    </div>
    <!--Main Content End-->


</div>
<!--Page Content and Menu End-->