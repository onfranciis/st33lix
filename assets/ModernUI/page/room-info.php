<div id="oda-ayarlari" style="display:none;">
  <div id="oda-ayarlarihareket">
    <div class="oda-ayarlari-padding">
      <div class="oda-ayarlari-header-baslik">Room Settings</div>
      <div class="habbo-header-kapat-buton">
        <div class="habbo-header-kapat" onclick="$('#oda-ayarlari').fadeOut(200);">
          <img class="kapat-icon" src="./images/kapat.png">
        </div>
      </div>
    </div>
  </div>
  <div id="oda-ayarlari-menu">
    <div class="h5-menu-center">
      <div id="oy-temel-buton" class="oda-ayarlari-mbox" style="box-shadow: rgb(255, 255, 255) -1px 3px 0px 0px inset; background: linear-gradient(rgb(227, 227, 227) 50%, rgb(223, 223, 223) 50%);">Basic</div>
      <div id="oy-erisim-buton" class="oy-menubosluk oda-ayarlari-mbox">Access</div>
      <div id="oy-haklar-buton" class="oy-menubosluk oda-ayarlari-mbox">Rights</div>
      <div id="oy-vip-buton" class="oy-menubosluk oda-ayarlari-mbox">VIP</div>
      <div id="oy-yonet-buton" class="oy-menubosluk oda-ayarlari-mbox">To manage</div>
    </div>
  </div>

  <div class="ayar-box-padding">
    <div id="temel-ayar-box" style="display: block;">
      <div class="oda-ayar-baslik-text">Room name</div>
      <textarea placeholder="Type a name for your room" maxlength="30" id="oda-ayar-textarea"></textarea>
      <div class="oda-ayar-baslik-text oabt-padding">Add a description</div>
      <textarea placeholder="Write a description article for your room" maxlength="120" id="oda-ayar-textarea" style="height: 60px;"></textarea>
      <div class="oda-ayar-baslik-text oabt-padding">Select Category</div>
      <select id="kategori-sec">
        <option value="Standart oda" selected="">Standard room</option>
        <option value="Rol Oyunu">Staging</option>
        <option value="Takas et &amp; Kumarhaneler">Commerce and casinos</option>
        <option value="Oyunlar &amp; Etkinlikler">Games &amp; Events</option>
        <option value="Sohbet &amp; Tartışma">Chat and discussion</option>
        <option value="Disko &amp; Tanışma">Disco and dating</option>
      </select>
      <div class="oda-ayar-baslik-text oabt-padding">Maximum number of visitors</div>
      <select id="kategori-sec">
        <option selected="" value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
        <option value="25">25</option>
        <option value="30">30</option>
        <option value="35">35</option>
        <option value="40">40</option>
        <option value="45">45</option>
        <option value="50">50</option>
        <option value="55">55</option>
        <option value="60">60</option>
        <option value="65">65</option>
        <option value="70">70</option>
        <option value="75">75</option>
      </select>
      <div class="oda-ayar-baslik-text oabt-padding">Commerce settings</div>
      <select id="kategori-sec">
        <option selected="" value="Takas yapılamaz">Can't negotiate</option>
        <option value="Yalnızca oda sahibi ve hakları olan diğer oyuncular takas yapabilir">Only other players with room owners and rights can negotiate</option>
        <option value="Herkes tasak yapabilir">Anyone can throw away</option>
      </select>
      <div class="oda-ayar-checkbox"> <input type="checkbox" id="check-css">
        <div class="oda-ayar-baslik-text oabt-padding-cb">Sort rooms by Mobi</div>
      </div>
      <div class="oda-ayar-checkbox" style="margin-top: 7px;"> <input type="checkbox" id="check-css">
        <div class="oda-ayar-baslik-text oabt-padding-cb">Let the nesting in the room go into action</div>
      </div>
      <div id="odayi-sil">
        <div class="odayi-sil-yazi">Permanently delete this room</div>
      </div>
    </div>
    <div id="erisim-ayar-box" style="display: none;">
      <div class="oda-ayar-baslik-text">Room access</div>
      <div class="oda-ayar-aciklama-text">Select the access rights for the room. Open means that anyone can enter. Locked provides access only to Users who know the password.</div>
      <div class="bosluk2 oda-ayar-baslik-text">Access to this room</div>
      <div class="oda-ayar-checkbox bosluk01"> <input type="checkbox" id="check-css">
        <div class="oda-ayar-baslik-text oabt-padding-cb">Open - Anyone can enter</div>
      </div>
      <div class="oda-ayar-checkbox bosluk01"> <input type="checkbox" id="check-css">
        <div class="oda-ayar-baslik-text oabt-padding-cb">Visitors must ring the bell</div>
      </div>
      <div class="oda-ayar-checkbox bosluk01"> <input type="checkbox" id="check-css">
        <div class="oda-ayar-baslik-text oabt-padding-cb">For users who do not have rights, this room does not appear on the</div>
      </div>
      <div class="oda-ayar-checkbox bosluk01"> <input type="checkbox" id="check-css">
        <div class="oda-ayar-baslik-text oabt-padding-cb">Password is required to enter this room</div>
      </div>
      <div class="bosluk10 oda-ayar-baslik-text">Animal options</div>
      <div class="oda-ayar-checkbox bosluk01"> <input type="checkbox" id="check-css">
        <div class="oda-ayar-baslik-text oabt-padding-cb">Password is required to enter this room</div>
      </div>
      <div class="oda-ayar-checkbox bosluk01"> <input type="checkbox" id="check-css">
        <div class="oda-ayar-baslik-text oabt-padding-cb">Password is required to enter this room</div>
      </div>
    </div>
    <div id="haklar-ayar-box" style="display: none;">
      <div class="oda-ayar-main-box">
        <div class="oda-ayar-baslik-text oyb-padding">Search:</div>
        <input class="kullanici-arama" placeholder="Username to search" maxlength="30" type="search">
      </div>
      <div class="odada-haklari-olanlar">
        <div class="haklari-olanlar-baslik">Users with rights to your room <b style="color: #f44336;">(0/0)</b></div>
        <div class="oho-main-box">
          <div class="odada-haklari-olanlar-liste">
            <div class="hakki-olan-kullanici-box">username</div>
            <div class="hakki-olan-kullanici-box">username</div>
            <div class="hakki-olan-kullanici-box">username</div>
            <div class="hakki-olan-kullanici-box">username</div>
            <div class="hakki-olan-kullanici-box">username</div>
            <div class="hakki-olan-kullanici-box">username</div>
            <div class="hakki-olan-kullanici-box">username</div>
            <div class="hakki-olan-kullanici-box">username</div>
            <div class="hakki-olan-kullanici-box">username</div>
            <div class="hakki-olan-kullanici-box">username</div>
            <div class="hakki-olan-kullanici-box">username</div>
            <div class="hakki-olan-kullanici-box">username</div>
            <div class="hakki-olan-kullanici-box">username</div>
            <div class="hakki-olan-kullanici-box">username</div>
            <div class="hakki-olan-kullanici-box">username</div>
            <div class="hakki-olan-kullanici-box">username</div>
            <div class="hakki-olan-kullanici-box">username</div>
          </div>
          <div class="odada-haklari-olanlari-temizle">
            <p class="ohot-text">Clean all</p>
          </div>
        </div>
      </div>
      <div class="odada-haklari-olmayanlar">
        <div class="haklari-olmayanlar-baslik">Friends who have no rights in your room <b style="color: #f44336;">(0/0)</b></div>
        <div class="oho-main-box">
          <div class="odada-haklari-olmayanlar-liste">
            <div class="hakki-olmayan-kullanici-box">username</div>
            <div class="hakki-olmayan-kullanici-box">username</div>
            <div class="hakki-olmayan-kullanici-box">username</div>
            <div class="hakki-olmayan-kullanici-box">username</div>
            <div class="hakki-olmayan-kullanici-box">username</div>
            <div class="hakki-olmayan-kullanici-box">username</div>
            <div class="hakki-olmayan-kullanici-box">username</div>
            <div class="hakki-olmayan-kullanici-box">username</div>
            <div class="hakki-olmayan-kullanici-box">username</div>
            <div class="hakki-olmayan-kullanici-box">username</div>
            <div class="hakki-olmayan-kullanici-box">username</div>
            <div class="hakki-olmayan-kullanici-box">username</div>
            <div class="hakki-olmayan-kullanici-box">username</div>
            <div class="hakki-olmayan-kullanici-box">username</div>
            <div class="hakki-olmayan-kullanici-box">username</div>
            <div class="hakki-olmayan-kullanici-box">username</div>
            <div class="hakki-olmayan-kullanici-box">username</div>
            <div class="hakki-olmayan-kullanici-box">username</div>
          </div>
        </div>
      </div>
    </div>
    <div id="vip-ayar-box" style="display: none;">
      <div class="oda-ayar-baslik-text">HC Extras</div>
      <div class="oda-ayar-aciklama-text">Customize your walls and floors! You can choose whether the walls of the room are visible and determine the thickness of the walls and floors.</div>
      <div class="bosluk2 oda-ayar-baslik-text">HC Settings</div>
      <div class="oda-ayar-checkbox bosluk01"> <input type="checkbox" id="check-css">
        <div class="oda-ayar-baslik-text oabt-padding-cb">Hide room walls (HC only)</div>
      </div>
      <select id="kategori-sec" class="bosluk0-05">
        <option value="En ince duvarlar" selected="">Thinner walls</option>
        <option value="İnce duvarlar">Thin walls</option>
        <option value="Normal duvarlar">Normal walls</option>
        <option value="Kalın duvarlar">Thick walls</option>
      </select>
      <select id="kategori-sec" class="bosluk01">
        <option value="Standart oda" selected="">The thinnest floors</option>
        <option value="Rol Oyunu">Thin floors</option>
        <option value="Takas et &amp; Kumarhaneler">Normal floors</option>
        <option value="Oyunlar &amp; Etkinlikler">Thick floors</option>
      </select>
      <div class="bosluk2 oda-ayar-baslik-text">Chat settings</div>
      <div class="oda-ayar-aciklama-text">Control and edit the appearance of the message balloons in this room.</div>
      <select id="kategori-sec" class="bosluk0-05">
        <option value="Serbest akış hali (Balonlar geçebilir)" selected="">Free flow state (balloons can pass)</option>
        <option value="Satır satır (Eski)">Line by line (old)</option>
      </select><select id="kategori-sec" class="bosluk01">
        <option value="Geniş balonlar" selected="">Wide balloons</option>
        <option value="Normal balonlar">Normal balloons</option>
        <option value="İnce balonlar">Thin balloons</option>
      </select>
      <select id="kategori-sec" class="bosluk01">
        <option value="Hızlı yukarı kaydırma" selected="">Fast scroll up</option>
        <option value="Normal kaydırma">Normal scrolling</option>
        <option value="Yavaş yukarı kaydırma">Slow down scrolling</option>

      </select>
      <select id="kategori-sec" class="bosluk01">
        <option value="Ekstra anti-flood koruması" selected="">Extra flood protection</option>
        <option value="Standart anti-flood koruması">Standard flood protection</option>
        <option value="En az anti-flood koruması">Minimal flood protection</option>
      </select>
      <input class="max-sohbet-mesafe" placeholder="00" maxlength="2" type="number">
      <div class="oda-ayar-baslik-text oabt-padding-cb-2">Maximum listening distance from the chat</div>
    </div>
    <div id="yonet-ayar-box" style="display: none;">
      <div class="oda-ayar-aciklama-text">Choose the control settings you want</div>
      <div class="oda-ayar-baslik-text bosluk2">Who can silence</div>
      <div class="oda-ayar-checkbox bosluk01"> <input type="checkbox" id="check-css" checked="">
        <div class="oda-ayar-baslik-text oabt-padding-cb">none</div>
      </div>
      <div class="oda-ayar-checkbox bosluk01"> <input type="checkbox" id="check-css">
        <div class="oda-ayar-baslik-text oabt-padding-cb">Users with rights</div>
      </div>
      <div class="oda-ayar-baslik-text bosluk2">Who can play</div>
      <div class="oda-ayar-checkbox bosluk01"> <input type="checkbox" id="check-css">
        <div class="oda-ayar-baslik-text oabt-padding-cb">All Users</div>
      </div>
      <div class="oda-ayar-checkbox bosluk01"> <input type="checkbox" id="check-css">
        <div class="oda-ayar-baslik-text oabt-padding-cb">Users with rights</div>
      </div>
      <div class="oda-ayar-checkbox bosluk01"> <input type="checkbox" id="check-css">
        <div class="oda-ayar-baslik-text oabt-padding-cb">none</div>
      </div>
      <div class="oda-ayar-baslik-text bosluk2">Who can ban</div>
      <div class="oda-ayar-checkbox bosluk01"> <input type="checkbox" id="check-css">
        <div class="oda-ayar-baslik-text oabt-padding-cb">none</div>
      </div>
      <div class="oda-ayar-checkbox bosluk01"> <input type="checkbox" id="check-css">
        <div class="oda-ayar-baslik-text oabt-padding-cb">Users with rights</div>
      </div>
      <div class="odadan-yasaklanan-kullanicilar-box">
        <div class="odadan-yasaklananlar-liste">
          <div class="odadan-yasaklanan-kullanici-box">username</div>
          <div class="odadan-yasaklanan-kullanici-box">username</div>
        </div>
      </div>
      <div class="yasakli-kullanici-baslik">Banned users</div>
      <div class="yasak-kaldir-buton-box">
        <p class="yasak-kaldir-text">Remove Ban</p>
      </div>
    </div>
  </div>
</div>