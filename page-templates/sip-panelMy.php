<?php /* Template Name: sip-panelMy */ ?>

<?php get_header(); ?>
<?php  ?>
<!--function for Page Header Start-->
<?php include("templates/func-header.php"); ?> 

<header>

 <title>Գեպո Տանիք | Ապրանքներ | ՍԻՊ Պանել</title>

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
    $title = "ՍԻՊ Պանելներ";
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
           <img class="img-main" src="<?php echo ne_asset('/images/products/products-details-img-sip-panel.jpg')?>" alt="" >
		   <div class="img-icon">
             <span class="icon-analysis"></span>
           </div>
	    </div>
        <!--Main Photo and Text-->


        <h3 class="caption" type="text-titel">ՍԻՊ Պանելներ</h3><br>
        <p class="caption">Շուկայում մատչելի գնով էներգաարդյունավետ առանձնատների կառուցման համար կան բազմաթիվ ժամանակակից շինանյութեր։ Այս շարքում իրենց պատվավոր տեղն են զբաղեցնում են SIP/ՍԻՊ պանելները։ ՍԻՊ պանելներով կառուցապատման տեխնոլոգիան կոչվում է նաև կանադական, քանի որ այս շինանյութն առաջին անգամ ստեղծվել է Կանադայում։</p><br><br>
        <p class="caption">ՍԻՊ պանելը (Structural insulated Panel) համաշխարհային ճանաչում ստացած շինանյութ է, որն ունի եռաշերտ կառուցվածք։ Երկու ՕՍՊ սալերի միջև գտնվում է ՍԻՊ պանելի միջուկը՝ պենոպոլիստիրոլի կամ հանքաբամբակի տեսքով։ ՕՍՊ սալերն իրենցից ներկայացնում են փայտի մանր տաշեղներ, որոնց համար կապակցող նյութ է հանդիսանում խեժային սոսինձը։</p><br><br>
        <p class="caption">ՍԻՊ պանելներով կառուցած շինությունն ունի հետևյալ առանձնահատկությունները․</p><br><br>

        <ul class="caption-list">
           <li>Կատարյալ ջերմա- և ձայնամեկուսացում</li>
            <li>Կոստրուկցիայի թեթև քաշ</li>
            <li>Արագ մոնտաժ</li>
            <li>Շինաշխատանքների իրականացում տարվա յուրաքանչյուր եղանակին</li>
            <li>Դիմացկունություն մեծ ծանրաբեռնվածությունների ժամանակ։ 12տ/1քմ երկայնական և 2տ/1քմ լայնակի ծանրաբեռնվածության դեպքում։</li>
        </ul><br><br>

        <p class="caption">Գեպո Տանիք ընկերությունն իր սպառողին է առաջարկում հետևյալ տեսակի ՍԻՊ պանելներ:</p><br><br>

        <table class="table-style">
            <tr><th class="border">Միջուկ</th><th class="border">Հաստություն</th><th class="border">Պրոֆիլային լայնություն</th><th class="border">Մոնտաժային լայնություն</th></tr>
			<tr><td class="border">Պոլիստերին</td><td class="border">6, 8, 10, 12, 15, 20 սմ</td><td class="border">1200 մմ</td><td class="border">1100 մմ</td></tr>
			<tr><td class="border">Հանքաբամբակ</td><td class="border">8, 10, 12, 15, 20 սմ</td><td class="border">1200 մմ</td><td class="border">1100 մմ</td></tr>
        </table><br><br>

        <div class="photo-content">
          <div class="photo-content-col">
            <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-sip-panel-img-1.png')?>" alt="">
          </div>
          <div class="photo-content-col">
            <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-sip-panel-img-2.png')?>" alt="">
          </div>
        </div><br><br>




    </div>
    <!--Main Content End-->

</div>
<!--Page Content and Menu End-->

