<footer class="footer">
	<div class="container">
		<div class="all-rights">
			<span><?=$mes['fut-mes1']?></span>
			<a href="https://www.facebook.com/KandinskyOdessaResidence/" class="social_links">
				<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 512 512" viewBox="0 0 512 512" width="26" height="26" fill="#666666"><path d="m468.333-1h-426.666c-23.894 0-42.667 18.773-42.667 42.667v426.667c0 23.893 18.773 42.666 42.667 42.666h196.267 102.4 128c23.893 0 42.666-18.773 42.666-42.667v-426.666c0-23.894-18.773-42.667-42.667-42.667zm-213.333 494.933v-170.666h-68.267v-68.267h68.267v-59.733c0-48.64 37.547-89.6 85.333-93.867h76.8v68.267h-68.267c-14.507 0-25.6 11.093-25.6 25.6v59.733h85.334v68.267h-85.333v170.667h-68.267zm238.933-25.6c0 14.507-11.093 25.6-25.6 25.6h-128v-153.6h85.333v-102.4h-85.333v-42.667c0-5.12 3.413-8.533 8.533-8.533h85.334v-102.4h-94.72c-57.173 5.12-101.547 53.76-101.547 110.933v42.667h-68.267v102.4h68.267v153.6h-196.266c-14.507 0-25.6-11.093-25.6-25.6v-426.666c0-14.507 11.093-25.6 25.6-25.6h426.667c14.507 0 25.6 11.093 25.6 25.6v426.666z" transform="translate(1 1)"/></svg>
			</a>
			<a href="https://www.instagram.com/kandinsky.sealife/?hl=ru" class="social_links">
				<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 368 368" viewBox="0 0 368 368" width="26" height="26" fill="#666666"><path d="m312 0h-256c-30.88 0-56 25.12-56 56v256c0 30.88 25.128 56 56 56v-.728c6.536.728 18.416.728 40 .728h216c30.88 0 56-25.128 56-56v-256c0-30.88-25.128-56-56-56zm40 312c0 22.056-17.944 40-40 40 0 0-254.232 0-256 0-22.056 0-40-17.944-40-40v-256c0-22.056 17.944-40 40-40h256c22.056 0 40 17.944 40 40z"/><path d="m184 64c-66.168 0-120 53.832-120 120s53.832 120 120 120 120-53.832 120-120-53.832-120-120-120zm0 224c-57.344 0-104-46.656-104-104s46.656-104 104-104 104 46.656 104 104-46.656 104-104 104z"/><path d="m183.624 111.624c-39.904 0-72.376 32.472-72.376 72.376s32.472 72.376 72.376 72.376 72.376-32.472 72.376-72.376-32.472-72.376-72.376-72.376zm0 128.752c-31.088 0-56.376-25.288-56.376-56.376s25.288-56.376 56.376-56.376 56.376 25.288 56.376 56.376-25.288 56.376-56.376 56.376z"/><circle cx="304" cy="64" r="16"/></svg>
			</a>
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
		<style media="screen">
			.social_links{display: inline-block; vertical-align: middle; text-decoration: none; margin: 0 6px; max-width: 26px;}
		</style>



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
