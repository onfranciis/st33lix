<div id="envanterhtml" style="display:none;">
		<div class="envanter-header-bilgi" onclick="$('#bilgilendirmeHareket').toggle();">?</div>
        <div id="envanterhtmlhareket">
			<div class="envanter-padding">
				<div class="envanter-header-baslik">Inventaire</div>
				<div class="habbo-header-kapat-buton"> 
					<div class="habbo-header-kapat" onclick="$('#envanterhtml').fadeOut(200);">
						<img class="kapat-icon" src="./images/kapat.png"> 
					</div>
				</div>
			</div>
		</div>

		<div id="envanter-menu">
			<div class="h5-menu-center">
				
				<div id="e-mobilya" class="envanter-menu-box" style="box-shadow: rgb(255, 255, 255) -1px 3px 0px 0px inset; background: linear-gradient(rgb(227, 227, 227) 50%, rgb(223, 223, 223) 50%);">Mobiliers</div>
				<div id="e-hayvanlar" class="envanter-menu-box">Animaux</div>
				<div id="e-kazanilanRozetler" class="envanter-menu-box">Badges</div>
				<div id="e-robotlar" class="envanter-menu-box">Bots</div>
			</div>
		</div>

		<!-- Envanter Mobilya BOX -->
		<div id="envanter-mobilya-box" style="display: block;">
			<div id="envanter-mobi-icerik-box">
				<div class="envanter-icerisindeki-mobiler">
					<div class="emb-sol">
						<div class="embs-m">
							<div class="mobi-arama-box">
								<input class="envanter-mobi-arama" placeholder="Enter the name of the item you want to search for." maxlength="30" type="search">
							</div>
							<div class="envanter-onizleme-tikla" id="mobilya-onizleme-box">
								<div class="mobi-ufak-icon" style="background-image: url(././images/mobi-onizleme/mobi1.png);"></div>
								<div class="mobi-adet-box">
									<div class="mobi-adet-sayi">x100</div>
								</div>
							</div>
							<div class="envanter-onizleme-tikla" id="mobilya-onizleme-box">
								<div class="mobi-ufak-icon" style="background-image: url(././images/mobi-onizleme/mobi2.png);"></div>
								<div class="mobi-adet-box">
										<div class="mobi-adet-sayi">x2</div>
								</div>
							</div>

							<div class="envanter-onizleme-tikla" id="mobilya-onizleme-box">
								<div class="mobi-ufak-icon" style="background-image: url(././images/mobi-onizleme/mobi3.png);"></div>
								<div class="mobi-adet-box">
										<div class="mobi-adet-sayi">x57</div>
								</div>
							</div>

						</div>
					</div>
					<div class="emb-sag">
						<div class="emb-s-m">
							<div class="mobi-onizleme-buyuk">
								<div id="mobi-onizleme-goruntu" style="background-image: url(././images/mobi3.png);background-position: center top 37px;"></div>
							</div>
							<div class="envanter-mobi-adi">
								<div class="e-m-a-yazi">Nom du mobi</div>
							</div>
							<div class="envanter-mobi-odaya-yerlestir">
								<div class="odaya-yerlestir-yazi">Placer dans l'appart</div>
							</div>
							<div class="takas-teklif-box" style="display:none;">
								<input class="teklif-miktar-takas" placeholder="1" maxlength="2" type="number">
								<div class="takas-teklifi-ver">
								<div class="teklif-et-yazi">Offrir</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="takas-yap-box">
				<div class="suan-takas-yapiliyor">
					<div class="takas-yapiliyor-box-cizgi"></div>
					<div class="takas-yapiliyor-yazi">Échange en cours</div>
					<div class="takas-yapiliyor-box-cizgi"></div>
				</div>
				<div class="takas-bilgilendirme">		
					<div class="t-b-padding">
						<div class="t-b-yazi">Place les mobis que tu souhaites échanger</div>
						<div class="t-b-aciklama"><b>ATTENTION!</b>Tu ne pourras plus revenir en arrière</div>
					</div>		
				</div>
				<div class="sen-tarafindan-takas">
					<div class="yaptigin-takas-yazi"><b></b>Offert par <b>vous</b></div>
					<div class="takas-edilenler">
						<div class="takas-edilen-mobi-box" style="background-image: url(././images/takac_ico_1.png);"></div>
						<div class="takas-edilen-mobi-box" style="background-image: url(././images/takac_ico_2.png);"></div>
						<div class="takas-edilen-mobi-box" style="background-image: url(././images/takac_ico_3.png);"></div>
						<div class="takas-edilen-mobi-box" style="background-image: url(././images/takac_ico_4.png);"></div>
						<div class="takas-edilen-mobi-box" style="background-image: url(././images/takac_ico_5.png);"></div>
						<div class="takas-edilen-mobi-box"></div>
						<div class="takas-edilen-mobi-box"></div>
						<div class="takas-edilen-mobi-box"></div>
						<div class="takas-edilen-mobi-box"></div>
					</div>
					<div class="takas-mobi-bilgi-box">
						<div class="secilen-onizleme">Prévisualiser</div>
						<div class="takas-secilen-mobi-onizleme" style="background-image: url(././images/mobi5.png);"></div>
					</div>
					<div class="yapilan-takas-bilgileri">
						<div class="kac-urun-koyuldu"><b>0</b> mobis</div>
						<div class="kac-kredi-urun-koyuldu"><b>0</b> crédits, mobi credit</div><div class="onaylandi">✓</div>
					</div>
				</div>
				<div class="baskasi-tarafindan-takas">
					<div class="yapilan-takas-yazi"><b></b>Offert par <b>Noubi</b></div>
					<div class="takas-edilenler">
						<div class="takas-edilen-mobi-box" style="background-image: url(././images/takac_ico_1.png);"></div>
						<div class="takas-edilen-mobi-box" style="background-image: url(././images/takac_ico_2.png);"></div>
						<div class="takas-edilen-mobi-box" style="background-image: url(././images/takac_ico_3.png);"></div>
						<div class="takas-edilen-mobi-box" style="background-image: url(././images/takac_ico_4.png);"></div>
						<div class="takas-edilen-mobi-box" style="background-image: url(././images/takac_ico_5.png);"></div>
						<div class="takas-edilen-mobi-box"></div>
						<div class="takas-edilen-mobi-box"></div>
						<div class="takas-edilen-mobi-box"></div>
						<div class="takas-edilen-mobi-box"></div>
					</div>
					<div class="takas-mobi-bilgi-box">
						<div class="secilen-onizleme">Prévisualiser</div>
						<div class="takas-secilen-mobi-onizleme" style="background-image: url(././images/mobi3.png);"></div>
					</div>
					<div class="karsidan-yapilan-takas-bilgileri">
						<div class="kac-urun-koyuldu"><b>0</b> items</div>
						<div class="kac-kredi-urun-koyuldu"><b>0</b> credits</div><div class="onaylandi">✓</div>
					</div>
				</div>
				<div class="takas-islem-butonlar">
					<div class="takasi-kabul-et-buton" style="display: none;">
						<div class="takas-buton-yazi">Accepter l'échange</div>
					</div>
					<div class="takasi-degistir-buton">
						<div class="takas-buton-yazi">Échanger</div>
					</div>
					<div class="takasi-onayla-buton" style="display: none;">
						<div class="takas-buton-yazi">Approuver</div>
					</div>
					<div class="takas-iptal-buton">
						<div class="takas-buton-yazi">Annuler</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Envanter Mobilya BOX END -->

		<!-- Envanter Hayvanlar BOX -->
		<div id="envanter-hayvanlar-box" style="display: none;">
			<div id="envanter-hayvan-icerik-box">
				<div class="envanter-icerisindeki-hayvanlar">
					<div class="ehayvan-sol">
						<div class="eh-sol-m">
							<div class="envanter-onizleme-tikla" id="mobilya-onizleme-box">
								<div class="mobi-ufak-icon" style="background-image: url(././images/mobi-onizleme/h1_ico.png);"></div>
							</div>
							<div class="envanter-onizleme-tikla" id="mobilya-onizleme-box">
								<div class="mobi-ufak-icon" style="background-image: url(././images/mobi-onizleme/h2_ico.png);"></div>
							</div>
						</div>
					</div>
					<div class="ehayvan-sag">
						<div class="eh-sag-m">
						<div class="mobi-onizleme-buyuk">
								<div id="mobi-onizleme-goruntu" style="background-image: url(././images/mobi-onizleme/h1.png);"></div>
							</div>
							<div class="envanter-hayvan-adi">
								<div class="eh-yazi">Nom de l'animal</div>
							</div>
							<div class="envanter-hayvan-odaya-yerlestir">
								<div class="odaya-yerlestir-yazi">Placer dans l'appart</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Envanter Hayvanlar BOX END -->

		<!-- Envanter Rozetler BOX -->
		<div id="envanter-kazanilanRozetler-box" style="display: none;">
			<div id="envanter-rozetler-icerik-box">
				<div class="envanter-icerisindeki-rozetler">
					<div class="erzt-sol">
						<div class="erzt-s-b">
							<div class="envanter-onizleme-tikla" id="rozet-onizleme-box">
								<div class="rozet-resmi" style="background-image: url(https://images.habbo.com/c_images/album1584/PT782.gif);"></div>
							</div>
							<div class="envanter-onizleme-tikla" id="rozet-onizleme-box">
								<div class="rozet-resmi" style="background-image: url(https://images.habbo.com/c_images/album1584/PT990.gif);"></div>
							</div>
							<div class="envanter-onizleme-tikla" id="rozet-onizleme-box">
								<div class="rozet-resmi" style="background-image: url(https://images.habbo.com/c_images/album1584/US051.gif);"></div>
							</div>
							<div class="envanter-onizleme-tikla" id="rozet-onizleme-box">
								<div class="rozet-resmi" style="background-image: url(https://images.habbo.com/c_images/album1584/FR62C.gif);"></div>
							</div>
						</div>
					</div>
					<div class="erzt-sag">
						<div class="takilan-yazi">Mes badges</div>
						<div class="takilan-rozetler-box">
							<div class="takilan-rozet-onizleme">
								<div class="takilan-rozet-onizleme-badge" style="background-image: url(https://images.habbo.com/c_images/album1584/FR78C.gif);"></div>
							</div>
							<div class="takilan-rozet-onizleme">
								<div class="takilan-rozet-onizleme-badge" style="background-image: url(https://images.habbo.com/c_images/album1584/PT874.gif);"></div>
							</div>
							<div class="takilan-rozet-onizleme">
								<div class="takilan-rozet-onizleme-badge" style="background-image: url(https://images.habbo.com/c_images/album1584/NL765.gif);"></div>
							</div>
							<div class="takilan-rozet-onizleme">
								<div class="takilan-rozet-onizleme-badge" style="background-image: url(https://images.habbo.com/c_images/album1584/FR664.gif);"></div>
							</div>
							<div class="takilan-rozet-onizleme">
								<div class="takilan-rozet-onizleme-badge" style="background-image: url(https://images.habbo.com/c_images/album1584/DE430.gif);"></div>
							</div>
						</div>
					</div>
				</div>

				<div class="rozet-bilgi-box">
					<div class="secilen-rozet-box" style="background-image: url(https://images.habbo.com/c_images/album1584/FR62C.gif);"></div>
					<div class="secilen-rozet-bilgileri">
						<div class="secilen-rozet-adi">badge_name_habbo</div>
						<div class="secilen-rozet-genel-aciklama">Here, select the badges you want to use and save your selection.</div>
					</div>
					<div class="rozeti-tak-box">
						<div id="rozeti-tak-buton">
							<div id="rozet-buton-yazi">Wear badge</div>
						</div>
					</div>
					<div class="rozeti-cikar-box" style="display: none;">
						<div id="rozeti-cikar-buton">
							<div id="rozet-buton-yazi">Remove badge</div>
						</div>
					</div>
				</div>
				<div class="basari-puani-bilgi-box">
					<div id="basari-puanim-text">Your success score: <b>5555</b></div>
				</div>
			</div>
		</div>
		<!-- Envanter Rozetler BOX END -->
		
		<!-- Envanter Robotlar BOX -->
		<div id="envanter-robotlar-box" style="display: none;">
			<div id="envanter-robotlar-icerik-box">
				<div class="envanter-icerisindeki-robotlar">
					<div class="erobotlar-sol">
						<div class="er-sol-m">
							<div class="envanter-onizleme-tikla" id="mobilya-onizleme-box">
								<div class="mobi-ufak-icon" style="background-image: url(././images/mobi-onizleme/r1_ico.png);"></div>
							</div>
							<div class="envanter-onizleme-tikla" id="mobilya-onizleme-box">
								<div class="mobi-ufak-icon" style="background-image: url(././images/mobi-onizleme/r2_ico.png);"></div>
							</div>
						</div>
					</div>
					<div class="erobotlar-sag">
						<div class="er-sag-m">
							<div class="mobi-onizleme-buyuk">
								<div id="mobi-onizleme-goruntu" style="background-image: url(././images/mobi-onizleme/r1.png);"></div>
							</div>
							<div class="envanter-robot-adi">
								<div class="er-yazi">Nom du bot</div>
							</div>
							<div class="envanter-robot-odaya-yerlestir">
								<div class="odaya-yerlestir-yazi">Placer dans l'appart</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Envanter Robotlar BOX END -->

	</div>