<div id="odalarhtml" style="display:none;">
	<div id="odalarhtmlhareket" class="odalar-header">
		<div class="odalar-padding">
			<div class="odalar-header-olustur" onclick="$('#odaOlustur').toggle();">+</div>
			<div class="hotel-header-bilgi" onclick="$('#bilgilendirmeHareket').toggle();">?</div>
			<div class="odalar-header-baslik">Navigateur</div>
			<div class="odalar-header-kapat-buton">
				<div class="odalar-header-kapat" onclick="$('#odalarhtml').fadeOut(200);">
					<img class="kapat-icon" src="./images/kapat.png">
				</div>
			</div>
		</div>
	</div>

	<div id="odalar-menu" class="tabs">
		<div class="h5-menu-center">
			<div id="resmi-odalar-button" class="odalar-box" style="box-shadow: rgb(255, 255, 255) -1px 3px 0px 0px inset; background: linear-gradient(rgb(227, 227, 227) 50%, rgb(223, 223, 223) 50%);">
				Public
			</div>
			<div id="tum-odalar-button" class="menubosluk odalar-box">
				Tous les apparts
			</div>
			<div id="benim-odalarim-button" class="odalar-box">
				Mon monde
			</div>
		</div>
	</div>
	<div class="odalar-arama">
		<div class="odalar-padding">
			<div class="arama-icon">
				<img src="https://image.flaticon.com/icons/svg/483/483356.svg">
			</div>
			<input placeholder="Rechercher.." maxlength="30" type="text">
		</div>
	</div>
	<!-- Herkese Açık Odalar -->
	<div id="herkese-acik-odalar" style="display: block;">
		<div class="odalar-padding">
			<div class="tumodalar">APPARTS OFFICIELS <b style="color: #F44336;">(5)</b>
				<div class="odalar-sekme-kucult">_</div>
				<div class="odalar-sekme-ac" style="display:none;">+</div>
			</div>
		</div>
		<odalar-cizgi style="margin-top: 5px;"></odalar-cizgi>
		<div class="h-a-o-l-fixed">
			<div id="herkeseAcikOdalar-liste" class="odalar-listesi">
				<div class="official-oda-bilgiler-sol">
					<div class="official-oda-resmi"></div>
					<div class="official-oda-isim">
						HabboBuzz Réception
					</div>
					<div class="official-footer">
						<div class="official-aktif-kullanici-ufak"><img src="./images/aktif.png" class="ufak-logo" style="left: 0px;">
							<div class="oda-sayisi">
								0
							</div>
						</div>
						<div onclick="$('#oda-bilgileri-html').toggle();" class="official-bilgi">
							i
						</div>
					</div>
					<div class="official-odaya-giris">
						<div class="odaya-giris-yazi">GO</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- -->

	<!-- Tüm Odalar -->
	<div id="tum-odalar" style="display: none;">
		<div class="odalar-padding">
			<div class="tumodalar">ALL ROOMS <b style="color: #F44336;">(0)</b></div>
		</div>
		<odalar-cizgi style="margin-top: 5px;"></odalar-cizgi>
		<div class="tum-odalar-listesi">
			<div class="tum-oda-bilgiler">
				<div class="tum-oda-exbox">
					<div class="t-aktif-kullanici usercount oda-user-gray"><img src="./images/aktif.png" class="ufak-logo" style="left: 0px;">
						<div class="t-oda-sayisi">
							0
						</div>
					</div>
					<div class="to-gir">GO</div>
				</div>
				<div class="oda-w">
					<div class="t-oda-adi"><img src="./images/odalar.png" class="ufak-logo">
						room_name
					</div>
				</div>
				<div class="oda-s-w">
					<div class="t-oda-sahibi-box">
						<div class="t-oda-sahibi"><img src="./images/sahip.png" class="ufak-logo">
							room_admin
						</div>
					</div>
				</div>
				<div onclick="$('#oda-bilgileri-html').toggle();" class="t-oda-info">
					i
				</div>
			</div>
		</div>
	</div>
	<!-- -->

	<!-- Benim Odalarım -->
	<div id="benim-odalarim" style="display: none;">
		<div class="odalar-padding">
			<div class="tumodalar">MY WORLD <b style="color: #F44336;">(0)</b>
			</div>
		</div>
		<odalar-cizgi style="margin-top: 5px;"></odalar-cizgi>
		<div class="odalar-listesi">
			<div class="oda-bilgiler-ufak">
				<div class="tum-oda-exbox">
					<div class="t-aktif-kullanici usercount oda-user-gray"><img src="./images/aktif.png" class="ufak-logo" style="left: 0px;">
						<div class="t-oda-sayisi">
							0
						</div>
					</div>
				</div>
				<div class="oda-w">
					<div class="t-oda-adi"><img src="./images/odalar.png" class="ufak-logo">
						room_name
					</div>
				</div>
				<div class="oda-info-ufak" onclick="$('#oda-bilgileri-html').toggle();">			
					i
				</div>
			</div>
		</div>
	</div>
	<!-- -->


</div>