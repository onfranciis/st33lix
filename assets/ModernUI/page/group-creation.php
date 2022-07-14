<div id="grup-olustur-box" style="display: none;">
	<div id="grup-olustur-boxhareket">
		<div class="grupOlustur-padding">
			<div class="grupOlustur-header-baslik">
					Créer un groupe HabboBuzz
			</div>
			<div class="habbo-header-kapat-buton">
				<div class="habbo-header-kapat" onclick="$('#grup-olustur-box').fadeOut(200);">
					<img class="kapat-icon" src="./images/kapat.png">
				</div>
			</div>
		</div>
	</div>
	<!-- Grup Kimlik Oluşturma -->
	<div class="grup-kimligi">
		<div class="grupOlustur-islem-baslik">
			Nom du groupe
		</div>
		<textarea placeholder="Merci d'écrire le nom de ton groupe" maxlength="20" id="grup-adi"></textarea>
		<div class="grupOlustur-islem-baslik">		
				Description du groupe
		</div>
		<textarea placeholder="Merci d'écrire la description de ton groupe" maxlength="250" id="grup-aciklamasi"></textarea>
		<div class="grupOlustur-islem-baslik">			
				Choisis un QG		
		</div>
		<select id="grup-oda-kategori">
			<option value="my room name 1" selected="">			
					my room name 1				
			</option>
			<option value="my room name 2">				
					my room name 2			
			</option>
		</select>
		<div class="grupOlustur-islem-uyari">			
				Choose your group main hall carefully. 
				The main hall cannot be changed or changed later.			
		</div>
		<div class="oda-yok-uyari">			
				Don't you have any rooms? 
				Click here to create a new room!			
		</div>
		<div class="grupOlustur-iptal" onclick="$('#grup-olustur-box').fadeOut(200);">			
				Cancel			
		</div>
		<div id="grup-kimligi-ilerle" class="grupOlustur-ilerle">			
				Next step
		</div>
	</div>
	<!-- Grup Rozet Oluşturma -->
	<div class="grup-rozet-olustur" style="display: none;">
		<div class="grup-rozet-onizleme">
			<div class="grup-rozet-otxt">
					Group Badge
			</div>
			<div class="grup-rozet-obox" style="background-image: url(././images/create-group/base/01.gif);">
			</div>
		</div>
		<div class="grup-sembol-dizayn">
			<div class="plate-aciklama">
				<div class="grup-image-txt">		
						Rosette					
				</div>
				<div class="grup-position-txt">					
						Position					
				</div>
				<div class="grup-color-txt">					
						Group Colors					
				</div>
			</div>
			<div class="grup-sembol-dbox">
				<div class="pgroup-box">
					<div class="plate-group-box">
						<div class="plate-group-imgprev" style="background-image: url(././images/new.png);"></div>
					</div>
					<div class="plate-group-position">
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
					</div>
					<div class="plate-group-color">
						<div class="pg-colorbox" style="background-color: #FFD500;"></div>
						<div class="pg-colorbox" style="background-color: #EB7500;"></div>
						<div class="pg-colorbox" style="background-color: #83DD00;"></div>
						<div class="pg-colorbox" style="background-color: #579900;"></div>
						<div class="pg-colorbox" style="background-color: #4fc0fa;"></div>
						<div class="pg-colorbox" style="background-color: #006ece;"></div>
						<div class="pg-colorbox" style="background-color: #ff97e2;"></div>
						<div class="pg-colorbox" style="background-color: #f233be;"></div>
						<div class="pg-colorbox" style="background-color: #ff2c2c;"></div>
						<div class="pg-colorbox" style="background-color: #ae0909;"></div>
						<div class="pg-colorbox" style="background-color: #e0e0e0;"></div>
						<div class="pg-colorbox" style="background-color: #bfbfbf;"></div>
						<div class="pg-colorbox" style="background-color: #363636;"></div>
						<div class="pg-colorbox" style="background-color: #fae6ab;"></div>
						<div class="pg-colorbox" style="background-color: #967540;"></div>
						<div class="pg-colorbox" style="background-color: #c1e9ff;"></div>
						<div class="pg-colorbox" style="background-color: #fff064;"></div>
						<div class="pg-colorbox" style="background-color: #a9ff7c;"></div>
					</div>
				</div>
				<div class="pgroup-box">
					<div class="plate-group-box">
						<div class="plate-group-imgprev" style="background-image: url(././images/new.png);"></div>
					</div>
					<div class="plate-group-position">
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
					</div>
					<div class="plate-group-color">
						<div class="pg-colorbox" style="background-color: #FFD500;"></div>
						<div class="pg-colorbox" style="background-color: #EB7500;"></div>
						<div class="pg-colorbox" style="background-color: #83DD00;"></div>
						<div class="pg-colorbox" style="background-color: #579900;"></div>
						<div class="pg-colorbox" style="background-color: #4fc0fa;"></div>
						<div class="pg-colorbox" style="background-color: #006ece;"></div>
						<div class="pg-colorbox" style="background-color: #ff97e2;"></div>
						<div class="pg-colorbox" style="background-color: #f233be;"></div>
						<div class="pg-colorbox" style="background-color: #ff2c2c;"></div>
						<div class="pg-colorbox" style="background-color: #ae0909;"></div>
						<div class="pg-colorbox" style="background-color: #e0e0e0;"></div>
						<div class="pg-colorbox" style="background-color: #bfbfbf;"></div>
						<div class="pg-colorbox" style="background-color: #363636;"></div>
						<div class="pg-colorbox" style="background-color: #fae6ab;"></div>
						<div class="pg-colorbox" style="background-color: #967540;"></div>
						<div class="pg-colorbox" style="background-color: #c1e9ff;"></div>
						<div class="pg-colorbox" style="background-color: #fff064;"></div>
						<div class="pg-colorbox" style="background-color: #a9ff7c;"></div>
					</div>
				</div>
				<div class="pgroup-box">
					<div class="plate-group-box">
						<div class="plate-group-imgprev" style="background-image: url(././images/new.png);"></div>
					</div>
					<div class="plate-group-position">
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
					</div>
					<div class="plate-group-color">
						<div class="pg-colorbox" style="background-color: #FFD500;"></div>
						<div class="pg-colorbox" style="background-color: #EB7500;"></div>
						<div class="pg-colorbox" style="background-color: #83DD00;"></div>
						<div class="pg-colorbox" style="background-color: #579900;"></div>
						<div class="pg-colorbox" style="background-color: #4fc0fa;"></div>
						<div class="pg-colorbox" style="background-color: #006ece;"></div>
						<div class="pg-colorbox" style="background-color: #ff97e2;"></div>
						<div class="pg-colorbox" style="background-color: #f233be;"></div>
						<div class="pg-colorbox" style="background-color: #ff2c2c;"></div>
						<div class="pg-colorbox" style="background-color: #ae0909;"></div>
						<div class="pg-colorbox" style="background-color: #e0e0e0;"></div>
						<div class="pg-colorbox" style="background-color: #bfbfbf;"></div>
						<div class="pg-colorbox" style="background-color: #363636;"></div>
						<div class="pg-colorbox" style="background-color: #fae6ab;"></div>
						<div class="pg-colorbox" style="background-color: #967540;"></div>
						<div class="pg-colorbox" style="background-color: #c1e9ff;"></div>
						<div class="pg-colorbox" style="background-color: #fff064;"></div>
						<div class="pg-colorbox" style="background-color: #a9ff7c;"></div>
					</div>
				</div>
				<div class="pgroup-box">
					<div class="plate-group-box">
						<div class="plate-group-imgprev" style="background-image: url(././images/new.png);"></div>
					</div>
					<div class="plate-group-position">
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
						<div class="pg-posbox"></div>
					</div>
					<div class="plate-group-color">
						<div class="pg-colorbox" style="background-color: #FFD500;"></div>
						<div class="pg-colorbox" style="background-color: #EB7500;"></div>
						<div class="pg-colorbox" style="background-color: #83DD00;"></div>
						<div class="pg-colorbox" style="background-color: #579900;"></div>
						<div class="pg-colorbox" style="background-color: #4fc0fa;"></div>
						<div class="pg-colorbox" style="background-color: #006ece;"></div>
						<div class="pg-colorbox" style="background-color: #ff97e2;"></div>
						<div class="pg-colorbox" style="background-color: #f233be;"></div>
						<div class="pg-colorbox" style="background-color: #ff2c2c;"></div>
						<div class="pg-colorbox" style="background-color: #ae0909;"></div>
						<div class="pg-colorbox" style="background-color: #e0e0e0;"></div>
						<div class="pg-colorbox" style="background-color: #bfbfbf;"></div>
						<div class="pg-colorbox" style="background-color: #363636;"></div>
						<div class="pg-colorbox" style="background-color: #fae6ab;"></div>
						<div class="pg-colorbox" style="background-color: #967540;"></div>
						<div class="pg-colorbox" style="background-color: #c1e9ff;"></div>
						<div class="pg-colorbox" style="background-color: #fff064;"></div>
						<div class="pg-colorbox" style="background-color: #a9ff7c;"></div>
					</div>
				</div>
			</div>

			<div class="plate-aciklama">
				<div class="grup-template-txt">
					
						Topic
					
				</div>
			</div>
			<div class="grup-sembol-dbox">
				<div class="pgroup-box">
					<div class="plate-group-box">
						<div class="plate-group-imgprev" style="background-image: url(././images/new.png);"></div>
					</div>
					<div class="plate-group-position">
					</div>
					<div class="plate-group-color">
						<div class="pg-colorbox" style="background-color: #FFD500;"></div>
						<div class="pg-colorbox" style="background-color: #EB7500;"></div>
						<div class="pg-colorbox" style="background-color: #83DD00;"></div>
						<div class="pg-colorbox" style="background-color: #579900;"></div>
						<div class="pg-colorbox" style="background-color: #4fc0fa;"></div>
						<div class="pg-colorbox" style="background-color: #006ece;"></div>
						<div class="pg-colorbox" style="background-color: #ff97e2;"></div>
						<div class="pg-colorbox" style="background-color: #f233be;"></div>
						<div class="pg-colorbox" style="background-color: #ff2c2c;"></div>
						<div class="pg-colorbox" style="background-color: #ae0909;"></div>
						<div class="pg-colorbox" style="background-color: #e0e0e0;"></div>
						<div class="pg-colorbox" style="background-color: #bfbfbf;"></div>
						<div class="pg-colorbox" style="background-color: #363636;"></div>
						<div class="pg-colorbox" style="background-color: #fae6ab;"></div>
						<div class="pg-colorbox" style="background-color: #967540;"></div>
						<div class="pg-colorbox" style="background-color: #c1e9ff;"></div>
						<div class="pg-colorbox" style="background-color: #fff064;"></div>
						<div class="pg-colorbox" style="background-color: #a9ff7c;"></div>

					</div>
				</div>
			</div>
		</div>

		<div id="grup-rozet-olustur-geri" class="grupOlustur-geri" style="box-shadow: rgb(255, 255, 255) -1px 3px 0px 0px inset; background: linear-gradient(rgb(227, 227, 227) 50%, rgb(223, 223, 223) 50%);">
			
				&lt;Back
			
		</div>
		<div class="grupOlustur-ilerle">
			
				Next step
			
		</div>
	</div>

</div>