<div id="arkadaslarhtml" style="display:none;">
        <div id="arkadaslarhtmlhareket" class="arkadaslar-header">
			<div class="arkadaslar-padding">
				<div class="hotel-header-bilgi" style="margin: 7px 0px;" onclick="$('#bilgilendirmeHareket').toggle();">?</div>
				<div class="arkadaslar-header-baslik">MES AMIS</div>
				<div class="arkadaslar-header-kapat-buton"> 
					<div class="arkadaslar-header-kapat" onclick="$('#arkadaslarhtml').fadeOut(200);">
						<img class="kapat-icon" src="./images/kapat.png"> 
					</div>
				</div>
			</div>
		</div>
		<div id="arkadaslar-arama-box">
			<div class="arkadaslar-arama-box-padding">
				<div class="arama-icon">
					<img src="https://image.flaticon.com/icons/svg/483/483356.svg">
				</div>
				<input placeholder="Rechercher..." maxlength="30" type="text">
			</div>
		</div>
		<div class="benim-arkadaslarim-tum">
			<div class="online-arkadaslarim">
				<div class="online-offline-arkadaslar-baslik">
					<div class="online-offline-arladaslar-baslik">Amis en ligne  <b style="color: #F44336;">(3)</b>
						<div id="onlineArkadaslarKapat" class="arkadaslar-sekme">_</div>
						<div id="onlineArkadaslarAc" class="arkadaslar-sekme-kapat" style="display: none;">+</div>
					</div>
				</div>
				<div class="arkadaslar-cizgi" style="margin-top: 5px;margin-bottom: 15px;"></div>
				<div class="online-arkadaslar-listesi">
					<div class="kullanici-bilgiler">
						<img src="./images/ADM.gif" class="personel-rozet">
						<div class="online-kullanici-adi">Staff Chat</div>
						<div class="suan-cemrimici">seulement pour le staff</div>
						<div class="arkadaslar-sohbet-et" onclick="$('#habbosohbethtml').toggle();"></div>	
					</div>
					<div class="kullanici-bilgiler">
						<img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=devCorelo&hd-180-1.hr-828-61.ch-255-66.lg-270-110.sh-290-62&action=std&gesture=std&direction=2&head_direction=2&size=n&img_format=png" class="arkadaslarim-avatar">
						<div class="online-kullanici-adi">Noubi</div>
						<div class="suan-cemrimici">En ligne</div>
						<div class="arkadaslar-sohbet-et" onclick="$('#habbosohbethtml').toggle();"></div>
						<div class="arkadaslar-takip-et"></div>		
					</div>
				</div>
			</div>
			<div class="offline-arkadaslarim">
				<div class="online-offline-arkadaslar-baslik">
					<div class="online-offline-arladaslar-baslik">AMIS HORS-LIGNE <b style="color: #F44336;">(2)</b>
						<div id="offlineArkadaslarKapat" class="arkadaslar-sekme">_</div>
						<div id="offlineArkadaslarAc" class="arkadaslar-sekme-kapat" style="display: none;">+</div>
					</div>
				</div>
				<div class="arkadaslar-cizgi" style="margin-top: 5px;"></div>

				<div class="offline-arkadaslar-listesi">

					<div class="kullanici-bilgiler">
						<img src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=devCorelo&hd-180-1.hr-828-61.ch-255-66.lg-270-110.sh-290-62&action=std&gesture=std&direction=2&head_direction=2&size=n&img_format=png" class="arkadaslarim-avatar">
						<div class="offline-kullanici-adi">Prim</div>
						<div class="suan-cemrimdisi">déconnecté depuis 15 minutes</div>
						<div class="arkadaslar-sohbet-et" onclick="$('#habbosohbethtml').toggle();"></div>
						<div class="arkadaslar-takip-et"></div>		
					</div>
				</div>
			</div>
		</div>	
	</div>