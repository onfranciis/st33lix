<div id="profil-detay-html" style="display:none;">
		<div class="profil-header-bilgi" onclick="$('#bilgilendirmeHareket').toggle();">?</div>
        <div id="profil-detay-htmlhareket" class="profil-header">
			<div class="profil-padding">
				<div class="profil-detay-bilgiler-aciklama">
					<div class="profil-detay-bilgiler-aciklama-i">
						<img src="./images/mgz-hc.png" style="margin: 4px;">
						<div class="p-d-b-a-i-yazi">Informations détaillées</div>
					</div>
				</div>
				<div class="profil-header-baslik">Mon profil</div>
				<div class="habbo-header-kapat-buton"> 
					<div class="habbo-header-kapat" onclick="$('#profil-detay-html').fadeOut(200);">
						<img class="kapat-icon" src="./images/kapat.png"> 
					</div>
				</div>
			</div>
		</div>

		<div id="profil-menu">
			<div class="h5-menu-center">
				<div id="profil-detay" class="profil-menu-box" style="box-shadow: rgb(255, 255, 255) -1px 3px 0px 0px inset; background: linear-gradient(rgb(227, 227, 227) 50%, rgb(223, 223, 223) 50%);">Profil</div>
				<div id="profil-gruplar" class="profil-menu-box">Groupe</div>
			</div>
		</div>

		<div class="habbo-profil">
			<img class="profil-arkapng" src="./images/profil-arkapng.png?0">
			
			<!-- Profil Detayları -->
			<div id="profil-detay-box" style="display: block;">
				<div class="profil-detay-b-sol">
					<div class="profil-detay-avatar-box">
						<div class="profil-avatar-box">
							<div class="profil-karakter">
								<img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=devCorelo&amp;hd-180-1.hr-828-61.ch-255-66.lg-270-110.sh-290-62&amp;action=std&amp;gesture=std&amp;direction=2&amp;head_direction=2&amp;size=n&amp;img_format=png">
							</div>
							<img class="profil-karakter-karo" src="./images/platteh.png?0">
						</div>
						<div class="p-a-b-username">
							<div class="kullanici-profil-cevrimici"></div>
							<div class="kullanici-profil-cevrimdisi" style="display: none;"></div>Mercury
						</div>
						<div class="p-d-b-fixed">
							<div class="profil-detaylar-box">
								<div class="p-d-b-padding">Créé le: <b style="color: #00000073;"></b></div>
							</div>
						</div>
						<div class="p-d-b-fixed">
							<div class="profil-detaylar-box">
								<div class="p-d-b-padding">Dernière connexion: <b style="color: #00000073;"></b></div>
							</div>
						</div>
						<div class="p-d-b-fixed">
							<div class="profil-detaylar-box">
								<div class="p-d-b-padding"><b style="color: #00000073;">Win-Win</b>: <b style="color: #00000073;">544400</b></div>
							</div>
						</div>
						<div class="p-d-b-fixed">
							<div class="profil-detaylar-box">
								<div class="p-d-b-padding">Amis: <b style="color: #00000073;">8</b></div>
							</div>
						</div>
					</div>
					<div class="profil-rozetler5">
						<div class="p-r5-padding">
							<div class="profil-rozet-box" style="margin-left: 0;background-image: url(https://images.habbo.com/c_images/album1584/ADM.gif);"></div>
							<div class="profil-rozet-box" style="background-image: url(https://images.habbo.com/c_images/album1584/FR78C.gif);"></div>
							<div class="profil-rozet-box" style="background-image: url();"></div>
							<div class="profil-rozet-box" style="background-image: url();"></div>
							<div class="profil-rozet-box" style="background-image: url();"></div>
						</div>
					</div>
				</div>
				<profil-cizgi></profil-cizgi>
				<div class="profil-detay-b-sag">
					<div class="l-iliski-padding">
						<div class="tumiliskiler">MES RELATIONS <b style="color: #F44336;">(1)</b></div>
					</div>
					<div class="profil-detay-iliskiler-box">
						<div class="p-d-i-fixed">
							<img class="iliskiKalp-icon" src="./images/kalp.png">
							<div class="profil-iliskiler-box" style="margin-top: 0;">
								<div class="p-d-b-padding">Noubi</div>
							</div>
						</div>
						<div class="p-d-i-fixed">
							<img class="iliskiGulucuk-icon" src="./images/gulucuk.png">
							<div class="profil-iliskiler-box">
								<div class="p-d-b-padding">Chercher de nouveaux amis</div>
							</div>
						</div>
						<div class="p-d-i-fixed">
							<img class="iliskiKuruKafa-icon" src="./images/kurukafa.png">
							<div class="profil-iliskiler-box">
								<div class="p-d-b-padding">Chercher de nouveaux amis</div>
							</div>
						</div>
						<div class="p-d-i-fixed">
							<img class="iliskiBok-icon" src="./images/bok.png?0">
							<div class="profil-iliskiler-box">
								<div class="p-d-b-padding">Chercher de nouveaux amis</div>
							</div>
						</div>
					</div>
					<div id="arkadas-istek-yolla"><img src="./images/istek-yolla.png" style="float: left;margin: 5px;position: absolute;">
						<div class="istek-yolla-yazi" onclick="$('#arkadaslik-istegi-gonderildi').toggle();">DEMANDER EN AMI</div><div class="zaten-arkadasin" style="display: none;">DÉJÀ EN AMI</div>
					</div>
				</div>
			</div>
			<!-- Profil Detayları END -->

			<!-- Profil Grupları -->
			<div id="profil-grup-box" style="display: none;">
				<div class="l-gruplar-padding">
					<div class="tumgruplar">MES GROUPES <b style="color: #F44336;">(4)</b>		</div>
				</div>
				<div class="profil-grup-b-bilgi">
					<div class="profil-grup-m">
						<div class="profil-grup-bilgi-box" style="margin-top:0px;">
							<div class="grup_rozet_box">
								<img class="grup_rozet" src="./images/grup_badge.png">
							</div>
							<div class="grup_bilgi">
								<div class="grupadi">HabboBuzz France</div>
								<div class="grup_tarih_sahip">Créé par <b style="color: #000000e0;">Mercury</b> le 01.01.2020</div>
								<div class="grup_uyeler"><b>100</b> membres sont dans ce groupe</div>
							</div>
							<div class="grup-bilgilerim-box">
								<div class="grup-bilgilerim-box-yazi">i</div>
							</div>
							<div class="grup-odasina-gir">
								<div class="grup-odasina-gir-yazi">QG du groupe</div>
							</div>
						</div>
						<div class="profil-grup-bilgi-box">
							<div class="grup_rozet_box">
								<img class="grup_rozet" src="./images/grup_badge.png">
							</div>
							<div class="grup_bilgi">
								<div class="grupadi">HabboBuzz English</div>
								<div class="grup_tarih_sahip">Créé par <b style="color: #000000e0;">Mercury</b> le 01.01.2020</div>
								<div class="grup_uyeler"><b>100</b> membres sont dans ce groupe</div>
							</div>
							<div class="grup-bilgilerim-box">
								<div class="grup-bilgilerim-box-yazi">i</div>
							</div>
							<div class="grup-odasina-gir">
								<div class="grup-odasina-gir-yazi">QG du groupe</div>
							</div>
						</div>
						<div class="profil-grup-bilgi-box">
							<div class="grup_rozet_box">
								<img class="grup_rozet" src="./images/grup_badge.png">
							</div>
							<div class="grup_bilgi">
								<div class="grupadi">HabboBuzz España</div>
								<div class="grup_tarih_sahip">Créé par <b style="color: #000000e0;">Mercury</b> le 01.01.2020</div>
								<div class="grup_uyeler"><b>100</b> membres sont dans ce groupe</div>
							</div>
							<div class="grup-bilgilerim-box">
								<div class="grup-bilgilerim-box-yazi">i</div>
							</div>
							<div class="grup-odasina-gir">
								<div class="grup-odasina-gir-yazi">QG du groupe</div>
							</div>
						</div>
						<div class="profil-grup-bilgi-box">
							<div class="grup_rozet_box">
								<img class="grup_rozet" src="./images/grup_badge.png">
							</div>
							<div class="grup_bilgi">
								<div class="grupadi">HabboBuzz Italia</div>
								<div class="grup_tarih_sahip">Créé par <b style="color: #000000e0;">Mercury</b> le 01.01.2020</div>
								<div class="grup_uyeler"><b>100</b> membres sont dans ce groupe</div>
							</div>
							<div class="grup-bilgilerim-box">
								<div class="grup-bilgilerim-box-yazi">i</div>
							</div>
							<div class="grup-odasina-gir">
								<div class="grup-odasina-gir-yazi">QG du groupe</div>
							</div>
						</div>
						<div class="profil-grup-bilgi-box">
							<div class="grup_rozet_box">
								<img class="grup_rozet" src="./images/grup_badge.png">
							</div>
							<div class="grup_bilgi">
								<div class="grupadi">Habbo HTML Group</div>
								<div class="grup_tarih_sahip">Created by <b style="color: #000000e0;">Corelo</b> on 01.01.2020</div>
								<div class="grup_uyeler"><b>100</b> members are currently members of this group</div>
							</div>
							<div class="grup-bilgilerim-box">
								<div class="grup-bilgilerim-box-yazi">i</div>
							</div>
							<div class="grup-odasina-gir">
								<div class="grup-odasina-gir-yazi">GROUP ROOM</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Profil Grupları END -->
			
		</div>
	</div>