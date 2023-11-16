<?php /* Template Name: sendvich-panelnerMy */ ?>

<?php get_header(); ?>
<?php  ?>
<!--function for Page Header Start-->
<?php include("templates/func-header.php"); ?> 


<header>

 <title>Գեպո Տանիք | Ապրանքներ | Սենդվիչ Պանե</title>

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
    $title = "Սենդվիչ Պանե";
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
           <img class="img-main" src="<?php echo ne_asset('/images/products/products-details-img-sandwich-panel.jpg')?>" alt="" >
		   <div class="img-icon">
             <span class="icon-analysis"></span>
           </div>
	    </div>
        <!--Main Photo and Text-->

        <h3 class="caption" type="text-titel">Սենդվիչ Պանելներ</h3><br>
        <p class="caption">Սենդվիչ պանելը եռաշերտ կառուցվածք ունեցող ժամանակակից շինանյութ է, որը կազմված է 2 երկու պողպատե պրոֆիլային թիթեղներից, որոնց միջև գտնվում է մեկուսիչ նյութը: Հանդիսանալով ունիվերսալ շինանյութ՝ սենդվիչ պանելները կիրառում են տարբեր նշանակության և մեծության օբյեկտների շինարարության համար։ Լինի դա մեծ պահեստ կամ անգար, թե փոքր մթերային խանութ՝ սենդվիչ պանելներով կառուցապատումը խնայում է ոչ միայն ժամանակը, այլ նաև զգալիորեն կրճատում է շինարարական գործընթացի համար նախատեսված բյուջեն։</p><br><br>
        <p class="caption">Մենք արտադրում ենք երկու տեսակի սենդվիչ պանելներ․</p><br><br>
        

        <ol>
            <li class="caption"><strong>1. Պատի</strong> սենդվիչ պանել, որը նախատեսված է շինության պատերի կառուցվածքն ապահովելու համար։ Վերջինները կարող են ունենալ ինչպես հարթ մակերեսով թիթեղներ, այնպես էլ ալիքավոր։ Ըստ միջանկյալ մեկուսիչ նյութի տեսակի տարբերում ենք ՝ հանքաբամբակի և պենոպլաստի միջուկով սենդվիչ պանելներ։</li><br><br>
            <li class="caption"><strong>2. Տանիքի</strong> սենդվիչ պանելներ, որոնք ունենում են միայն ալիքավոր մակերեսով թիթեղ և առանձնանում են ծայրակցվածքի հատվածում բարձր հերմետիկությամբ։ Ըստ միջանկյալ մեկուսիչ նյութի տեսակի տարբերում ենք ՝ հանքաբամբակի և պենոպլաստի միջուկով սենդվիչ պանելներ։</li>
        </ol><br><br>

        <p class="caption">Սենդվիչ պանելները նաև տարբերվում են իրենց հաստությամբ, գույնով և երկարությամբ։ Երկարությունը ՝ ըստ պատվիրատուի, գույնի ընտրությունը՝ ըստ RAL գունապնակի:</p><br><br>

        <table class="table-style">
            <tr><th class="border">Տեսակ</th><th class="border">Միջուկ</th><th class="border">Հաստություն</th><th class="border">Պրոֆիլային լայնություն</th><th class="border">Մոնտաժային լայնություն</th></tr>
			<tr><td class="border">Պատ</td><td class="border">Հանքաբամբակ</td><td class="border">6, 8, 10, 12, 15, 20 սմ</td><td class="border">1200 մմ</td><td class="border">1100 մմ</td></tr>
			<tr><td class="border">Պատ</td><td class="border">Պոլիստերին</td><td class="border">4, 5, 6, 8, 10, 12 սմ</td><td class="border">1200 մմ</td><td class="border">1100 մմ</td></tr>
			<tr><td class="border">Տանիք</td><td class="border">Հանքաբամբակ</td><td class="border">6, 8, 10, 12, 15, 20 սմ</td><td class="border">1200 մմ</td><td class="border">1100 մմ</td></tr>
			<tr><td class="border">Տանիք</td><td class="border">Պոլիստերին</td><td class="border">4, 5, 6, 8, 10, 12 սմ</td><td class="border">1200 մմ</td><td class="border">1100 մմ</td></tr>
        </table><br><br>

        <div class="photo-content">
          <div class="photo-content-col">
           <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-sandwich-panel-img-1.png')?>" alt="">
          </div>
          <div class="photo-content-col">
           <img class="img-table" src="<?php echo ne_asset('/images/products/products-details-img-sandwich-panel-img-2.png')?>" alt="">
          </div>
        </div><br><br><br>


    </div>
    <!--Main Content End-->

</div>
<!--Page Content and Menu End-->