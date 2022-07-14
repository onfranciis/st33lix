<div id="floorplan" style="display:none;">
	<div class="habbo-header-bilgi" onclick="$('#bilgilendirmeHareket').toggle();">?</div>
	<div id="floorplanhareket">
		<div class="floorplan-padding">
			<div class="floorplan-header-baslik">Éditer de sol</div>
			<div class="habbo-header-kapat-buton">
				<div class="habbo-header-kapat" onclick="$('#floorplan').fadeOut(200);">
					<img class="kapat-icon" src="./images/kapat.png">
				</div>
			</div>
		</div>
	</div>
	<div class="floorplan-box">
		<div class="floorp-ustbg">
			<div class="floorp-badge"></div>
			<div class="floorp-baslik">Bienvenue dans l'éditeur de sol</div>
			<div class="floorp-aciklama">Créer votre model d'appart 👷‍♂️🚧 depuis ce panel.</div>
		</div>
		<div class="floorplan-bottom-box cizim-modu-box">
			<div class="floor-box-baslik">Mode dessin</div>
			<div class="fp-cmb" style="margin-left: 0;">
				<div class="karo-ekle-box"></div>
			</div>
			<div class="fp-cmb">
				<div class="karo-kaldir-box"></div>
			</div>
			<div class="fp-cmb" style="box-shadow: rgb(255, 255, 255) -1px 3px 0px 0px inset;background: linear-gradient(rgb(227, 227, 227) 50%,rgb(223, 223, 223) 50%);border: solid 1px #00000087;">
				<div class="karo-zemin-yukselt-box"></div>
			</div>
			<div class="fp-cmb">
				<div class="karo-zemin-indir-box"></div>
			</div>
			<div class="fp-cmb">
				<div class="karo-baslangic-box"></div>
			</div>

			<div class="yukseklikCizin-baslik">Hauteur</div>
			<div class="fp-yukseklik-belirleme">
				<div class="fp-yukseklik-1 fpy_h-a"></div>
				<div class="fp-yukseklik-2 fpy_h-a"></div>
				<div class="fp-yukseklik-3 fpy_h-a" style="margin-top: -2px;border-top: solid 2px #ffffff69;border-bottom: solid 2px #00000040;"></div>
				<div class="fp-yukseklik-4 fpy_h-a"></div>
				<div class="fp-yukseklik-5 fpy_h-a"></div>
				<div class="fp-yukseklik-6 fpy_h-a"></div>
				<div class="fp-yukseklik-7 fpy_h-a"></div>
				<div class="fp-yukseklik-8 fpy_h-a"></div>
				<div class="fp-yukseklik-9 fpy_h-a"></div>
				<div class="fp-yukseklik-10 fpy_h-a"></div>
				<div class="fp-yukseklik-11 fpy_h-a"></div>
				<div class="fp-yukseklik-12 fpy_h-a"></div>
				<div class="fp-yukseklik-13 fpy_h-a"></div>
				<div class="fp-yukseklik-14 fpy_h-a"></div>
				<div class="fp-yukseklik-15 fpy_h-a"></div>
				<div class="fp-yukseklik-16 fpy_h-a"></div>
				<div class="fp-yukseklik-17 fpy_h-a"></div>
				<div class="fp-yukseklik-18 fpy_h-a"></div>
				<div class="fp-yukseklik-19 fpy_h-a"></div>
				<div class="fp-yukseklik-20 fpy_h-a"></div>
				<div class="fp-yukseklik-21 fpy_h-a"></div>
				<div class="fp-yukseklik-22 fpy_h-a"></div>
				<div class="fp-yukseklik-23 fpy_h-a"></div>
				<div class="fp-yukseklik-24 fpy_h-a"></div>
				<div class="fp-yukseklik-25 fpy_h-a"></div>
				<div class="fp-yukseklik-26 fpy_h-a"></div>
				<div class="fp-yukseklik-27 fpy_h-a"></div>
				<div class="fp-yukseklik-28 fpy_h-a"></div>
				<div class="fp-yukseklik-29 fpy_h-a"></div>
				<div class="fp-yukseklik-30 fpy_h-a"></div>
			</div>
			<div class="zemin-duzenle-box">
				<div class="floor-oda-buyut"></div>
				<div class="oda-zemin-floor"></div>
			</div>
		</div>
		<div class="floor-avatar-yon-ayarlar">
			<div class="floor-box-baslik">Direction</div>
			<div class="floor-avatar-sol f-yon-button">
				<svg class="f-avatar-sol" viewBox="0 0 638 1030">
					<path d="M570 13L12 489Q0 500 0 515t12 26l558 476q19 16 43.5 7t24.5-33V39q0-24-24.5-33T570 13z"></path>
				</svg>
			</div>
			<img class="floor-avatar" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=devCorelo&amp;hd-180-1.hr-828-61.ch-255-66.lg-270-110.sh-290-62&amp;action=std&amp;gesture=std&amp;direction=2&amp;head_direction=2&amp;size=n&amp;img_format=png">
			<div class="floor-avatar-sag f-yon-button"><svg class="f-avatar-sag" viewBox="0 0 638 1030">
					<path d="M68 13l558 476q12 11 12 26t-12 26L68 1017q-19 16-43.5 7T0 991V39Q0 15 24.5 6T68 13z"></path>
				</svg>
			</div>
		</div>
		<div class="floor-oda-ayarlar">
			<div class="floor-box-baslik">Paramètres</div>
			<select id="floor-kategori-sec">
				<option value="En ince duvarlar">Thinnest walls</option>
				<option value="İnce duvarlar">Thin walls</option>
				<option value="Normal duvarlar">Normal walls</option>
				<option value="Kalın duvarlar">Thick walls</option>
			</select>
			<select id="floor-kategori-sec">
				<option value="En ince zeminler">The thinnest floors</option>
				<option value="İnce zeminler">Thin floors</option>
				<option value="Normal zeminler">Normal floors</option>
				<option value="Kalın zeminler">Thick floors</option>
			</select>
			<floor-hr></floor-hr>
			<div class="floor-duvar-yukseklik"> <input placeholder="1" maxlength="2" type="number" class="duvar-yukseklik-box">
				<div class="f-duvar-yukseklik-text">Hauteur du sol</div>
				<div class="duvar-yukseklik-max-uyari">(Max 16)</div>
			</div>
		</div>
		<div class="floorplan-bottom-box floorplan-odaAyar-box">
			<div class="floor-zemin-onizleme-box">
				<div class="oda-zemin-onizleme-floor"></div>
			</div>
		</div>
		<div id="degisiklikleri-geri-al" class="floor-button-box-left">Précédent</div>
		<div id="floor-kaydet" class="floor-button-box-right">Sauvegarder</div>
	</div>
</div>