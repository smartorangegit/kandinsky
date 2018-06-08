<div class="zag__form_wrapper form_rieltor" >

	<form  class="zag__form" id="form_rieltor">
		<p class="form__title"><span class="italic-text">Сотрудничество</p>
		<input name="name_an"  required type="text" placeholder="<?=$mes['НазваниеАН:']?>*" >
		<input name="name"  required type="text" placeholder="<?=$mes['Имя:']?>*" >
		<input class="inputemeilmask" name="email" required type="email" placeholder="<?=$mes['E-mail:']?>*" >
		<input name="text" type="text"  placeholder="Текстовое сообщение:">		
		<input class="inputtelmask" onkeyup="javascript:countme('form_rieltor');" name="tel" required type="tel" placeholder="<?=$mes['Телефон:']?>*" >
			
					
		<input  name="typ" class="webad" type="hidden" value="8" >
		<input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
        <input  name="metka" class="metka" type="hidden" value="Сотрудничество для риелторов - Kandinskiy"/>
        <input  name="inn" class="userInn" type="hidden" value="Kandinskiy"/>
		<input  class='submit' data-id='form_rieltor' type="submit" value="<?=$mes['Отправить']?>">
		<div class="succses__form_info">
			<p class="succses__form_text"></p>
		</div>
	</form>
</div>

<style>
#form_rieltor{
	        display: none;
}
</style>
