<footer class="footer">
	<div class="container">
		<div class="all-rights">
			<span><?=$mes['fut-mes1']?></span>
			<a href="https://www.facebook.com/KandinskyOdessaResidence/" class="face-book__link"><img src="/img/footer/facebook-icon-1.png" alt="" class="face-book__ico"></a>
		 <span  class="all-rights-block">
		<? 
		 
		 foreach (Breadcrumbs() as $k=>$url)
		 {
			 if(count(Breadcrumbs())==$k+1)
			 {
				 echo ' <span class="all-rights-span">'.$url['text'].'</a> </span>';
			 }
			 else
			 {
				 echo ' <span class="all-rights-span"><a href="'.$url['url'].'">'.$url['text'].'</a> </span> <span> ></span>'; 
			 }
			 			
		 }
			?>
		</span>
		</div>
	

		
		<div class="smarto-developer">
			<a class="smarto-developer__link" target="_blanc" href="http://smartorange.com.ua"><?=$mes['fut-mes2']?><i class="smart-orange"></i></a>
		</div>
	</div>
	<?php /*** modules/inc/form/ */ FormInclude('form_zag');?>
	<?php /**Микроразметка*/?>
<div itemscope itemtype="http://schema.org/LocalBusiness" style="overflow: hidden; height:0px;">
    <span itemprop="name" content="KANDINSKY Odessa Residence"></span>
    <span itemprop="url" content="<?=$site_url?>"></span>
    <span itemprop="logo" content="<?=$site_url?>/img/kandinsky_logo.svg"></span>
    <span itemprop="telephone" content="+ 38 (048) 752-89-21"></span>
    <span itemprop="email"  content="info@kandinsky-residence.com.ua"></span>
    <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        <span itemprop="streetAddress" content="Французский бульвар, 63/65"></span>
        <span itemprop="addressLocality" content="Odessa"></span>
             <span itemprop="addressCountry" content="Ukraine"></span>
          </span>
    <span itemprop="priceRange" content="$$$"></span>
    <meta itemprop="image" content="<?=$site_url?>/img/house-choose/house-choose.jpg"/>
<time itemprop="openingHours" datetime="Mo-Fr 10:00-20:00">Пн.-Пт.: 10:00-20:00</time>
<time itemprop="openingHours" datetime="Sa-Su 10:00-18:00">Сб.-Вс.: 10:00-18:00</time>
</div>

</footer>
