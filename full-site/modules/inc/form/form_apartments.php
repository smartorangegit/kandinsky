<div class="zag__form_wrapper form_price" >
					<form  class="zag__form" id="form_price">
						<p class="form__title"><span class="italic-text"><?=$mes['Узнать цену']?></p>
						<input name="name"  required type="text" placeholder="<?=$mes['Имя:']?>*" >
						<input class="inputemeilmask" name="email" required type="email" placeholder="<?=$mes['E-mail:']?>*" >
						<input class="inputtelmask" name="tel" onkeyup="javascript:countme('form_price');" required type="tel" placeholder="<?=$mes['Телефон:']?>*">
						<input name="kv" value='<?=$kv?>' type="hidden"  type="text" >
						<?if(empty($kv)){ 	echo '<input  name="text" type="text" placeholder="'.$mes['Текстовое сообщение:'].'">';}?>
							
		<input  name="typ" class="webad" type="hidden" value="21" >
		<input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
        <input  name="metka" class="metka" type="hidden" value="Узнать цену - kandinskiy"/>
        <input  name="inn" class="userInn" type="hidden" value="Kandinskiy"/>
		
				
						<input  class='submit' data-id='form_price' type="submit" value="<?=$mes['Отправить']?>">
							<div class="succses__form_info">
		<p class="succses__form_text"></p>
	</div>
					</form>
</div>

<div class="zag__form_wrapper form_booking" >
					<form  class="zag__form" id="form_booking">
						<p class="form__title"><span class="italic-text"><?=$mes['Забронировать квартиру']?></p>
						<input name="name"  required type="text" placeholder="<?=$mes['Имя:']?>*" >
						<input class="inputemeilmask" name="email" required type="email" placeholder="<?=$mes['E-mail:']?>*" >
						<input class="inputtelmask" onkeyup="javascript:countme('form_booking');" name="tel" required type="tel" placeholder="<?=$mes['Телефон:']?>*">
						<input name="kv" value='<?=$kv?>' type="hidden" type="text">
						
		<input  name="typ" class="webad" type="hidden" value="2" >
		<input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
        <input  name="metka" class="metka" type="hidden" value="Забронировать квартиру - kandinskiy"/>
        <input  name="inn" class="userInn" type="hidden" value="Kandinskiy"/>
		
						<input  class='submit' data-id='form_booking' type="submit" value="<?=$mes['Отправить']?>">
	<div class="succses__form_info">
		<p class="succses__form_text"></p>
	</div>
					</form>
</div>