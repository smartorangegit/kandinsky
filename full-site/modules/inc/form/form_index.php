<form class="contacts__form" id='form_index'>
	<div class="bordered__form"></div>
	<p class="form__title"><?=$mes['Возникли вопросы – напишите нам']?></p>
	<div class="input-container">
		<input class="form-name"  name="name" required type="text" placeholder="<?=$mes['Имя:']?>*" >
		<input class="form-email" name="email" required type="email" placeholder="<?=$mes['E-mail:']?>*" >
		<input class="form-tel inputtelmask" onkeyup="javascript:countme('form_index');" name="tel" required type="tel" placeholder="<?=$mes['Телефон:']?>*" >
		<input  name="typ" class="webad" type="hidden" value="1" >
	</div>
	<textarea class="form-text" name="text"  cols="30" rows="10" placeholder="<?=$mes['Текстовое сообщение:']?>"></textarea>
	<input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
       <input  name="metka" class="metka" type="hidden" value="Форма обратной связи - kandinskiy"/>
       <input  name="inn" class="userInn" type="hidden" value="Kandinskiy"/>
	<input class='submit' data-id='form_index' type="submit" value="<?=$mes['Отправить']?>">
	<div class="succses__form_info">
		<p class="succses__form_text"></p>
	</div>
</form>