
$(document).ready(function () {

  $(".mesaj-yaz").on('keyup', function (e) {
    if (e.keyCode === 13) {

      if ($(".mesaj-yaz").val().replace(/\s/g, "") == ""){
        console.log('%c ClientBOT:: SPAM UYARISI! ', 'background: #222; color: #bada55; font-size: 13px');
      }else{

      var mesaj = badWordCatch($(".mesaj-yaz").val());

      MesajGonder(Link(mesaj));
      }
    }
  });


  function Link(yazi) {
    const linkler = yazi.match(/(((ftp|https?):\/\/)[\-\w@:%_\+.~#?,&\/\/=]+)/g);
    if (linkler) {
      console.log('%c ClientBOT:: WEB Site URL başarıyla gönderildi! ', 'background: #222; color: #bada55; font-size: 13px');
      linkler.forEach(function (url) {
        yazi = yazi.replace(url, '<a style="color: #007cde;" target="_blank" href="' + url + '">' + url + "</a>");
      });
    }
    return yazi.replace("(", "(");
  }

  function MesajGonder(mesaj) {
    console.log('%c ClientBOT:: Mesaj başarıyla gönderildi! ', 'background: #222; color: #bada55; font-size: 13px');
    $("#tum-mesajlar-liste").append(`
      <!-- Benim gönderdiğim mesaj -->
      <div id="sohbet-mesaj-box"> <!-- Giden Mesaj -->
          <div class="gonderen-avatar">
              <img class="avatar-konum" src="https://www.habbo.com.tr/habbo-imaging/avatarimage?user=devCorelo&hd-180-1.hr-828-61.ch-255-66.lg-270-110.sh-290-62&action=std&gesture=std&direction=2&head_direction=2&size=n&headonly=1&img_format=png">
          </div>
          <div class="giden-kAdi"><b style="color: #16546d;">[ME]</b> Corelo:</div>
          <div class="giden-mesaj-box"> <!-- Mesaj -->
              <p>
              ${mesaj
                .replace(":D", "😀")
                .replace(":(", "😔")
                .replace(":/", "😕")
                .replace(":d", "😀")
                .replace("xd", "😀")
                .replace("xD", "😆")
                .replace(":)", "😊")
                .replace(":O", "😮")
                .replace(":o", "😮")
                .replace("-_-", "😐")
                .replace("-.-", "😐")
                .replace("<3", "💖")
                .replace(";)", "😉")
                .replace(">:D", "😆")
                .replace(">:)", "😆")
                .replace("clientGIF_10", "<img class='paylasilan-gif-box' src='./images/gif/10.gif'>")
                .replace("clientGIF_11", "<img class='paylasilan-gif-box' src='./images/gif/11.gif'>")
                .replace("clientGIF_12", "<img class='paylasilan-gif-box' src='./images/gif/12.gif'>")
                .replace("clientGIF_13", "<img class='paylasilan-gif-box' src='./images/gif/13.gif'>")
                .replace("clientGIF_14", "<img class='paylasilan-gif-box' src='./images/gif/14.gif'>")
                .replace("clientGIF_15", "<img class='paylasilan-gif-box' src='./images/gif/15.gif'>")
                .replace("clientGIF_16", "<img class='paylasilan-gif-box' src='./images/gif/16.gif'>")
                .replace("clientGIF_17", "<img class='paylasilan-gif-box' src='./images/gif/17.gif'>")
                .replace("clientGIF_18", "<img class='paylasilan-gif-box' src='./images/gif/18.gif'>")
                .replace("clientGIF_19", "<img class='paylasilan-gif-box' src='./images/gif/19.gif'>")
                .replace("clientGIF_20", "<img class='paylasilan-gif-box' src='./images/gif/20.gif'>")
                .replace("clientGIF_21", "<img class='paylasilan-gif-box' src='./images/gif/21.gif'>")
                .replace("clientGIF_22", "<img class='paylasilan-gif-box' src='./images/gif/22.gif'>")
                .replace("clientGIF_23", "<img class='paylasilan-gif-box' src='./images/gif/23.gif'>")
                .replace("clientGIF_24", "<img class='paylasilan-gif-box' src='./images/gif/24.gif'>")
                .replace("clientGIF_25", "<img class='paylasilan-gif-box' src='./images/gif/25.gif'>")
                .replace("clientGIF_26", "<img class='paylasilan-gif-box' src='./images/gif/26.gif'>")
                .replace("clientGIF_27", "<img class='paylasilan-gif-box' src='./images/gif/27.gif'>")
                .replace("clientGIF_28", "<img class='paylasilan-gif-box' src='./images/gif/28.gif'>")
                .replace("clientGIF_29", "<img class='paylasilan-gif-box' src='./images/gif/29.gif'>")
                .replace("clientGIF_30", "<img class='paylasilan-gif-box' src='./images/gif/30.gif'>")
                .replace("clientGIF_31", "<img class='paylasilan-gif-box' src='./images/gif/31.gif'>")
                .replace("clientGIF_32", "<img class='paylasilan-gif-box' src='./images/gif/32.gif'>")
                .replace("clientGIF_33", "<img class='paylasilan-gif-box' src='./images/gif/33.gif'>")
                .replace("clientGIF_34", "<img class='paylasilan-gif-box' src='./images/gif/34.gif'>")
                .replace("clientGIF_35", "<img class='paylasilan-gif-box' src='./images/gif/35.gif'>")
                .replace("clientGIF_36", "<img class='paylasilan-gif-box' src='./images/gif/36.gif'>")
                .replace("clientGIF_1", "<img class='paylasilan-gif-box' src='./images/gif/1.gif'>")
                .replace("clientGIF_2", "<img class='paylasilan-gif-box' src='./images/gif/2.gif'>")
                .replace("clientGIF_3", "<img class='paylasilan-gif-box' src='./images/gif/3.gif'>")
                .replace("clientGIF_4", "<img class='paylasilan-gif-box' src='./images/gif/4.gif'>")
                .replace("clientGIF_5", "<img class='paylasilan-gif-box' src='./images/gif/5.gif'>")
                .replace("clientGIF_6", "<img class='paylasilan-gif-box' src='./images/gif/6.gif'>")
                .replace("clientGIF_7", "<img class='paylasilan-gif-box' src='./images/gif/7.gif'>")
                .replace("clientGIF_8", "<img class='paylasilan-gif-box' src='./images/gif/8.gif'>")
                .replace("clientGIF_9", "<img class='paylasilan-gif-box' src='./images/gif/9.gif'>")
              }
              </p>
          </div>
      </div>
      <!-- Benim gönderdiğim mesaj BOX End -->
      `);
    $(".mesaj-yaz").val("");

    $(".mesaj-gelen-box").animate({ scrollTop: $('.mesaj-gelen-box').prop("scrollHeight") }, 0);
  }

  function badWordCatch(mesaj) {

    var wordInput = mesaj;
    wordInput = wordInput.toLowerCase();

    var arr = wordInput.split(" ");

    // Hotel adları ve Küfür Filtrelemesi
    var badWords = ["habbo", "runo", "habcu", "habsen", "habbocity", "hubga", "bobba", "bubbo", "yabbo", "cabbo", "habsen", "habbocash", "habnet", "ananı sikeyim", "amk", "oç", "orsbu", "orosbu", "orospu", "piç", "amına koyayım", "aq", "amına", "amcık", "yarrak", "yarak", "boom"];

    var foundBadWords = arr.filter(el => badWords.includes(el));

    // Engellenen kelime için uyarı mesajı
    if (foundBadWords.length > 0) {
      console.log('%c ClientBOT:: Küfür ve Reklam engellendi! ', 'background: #222; color: #fff; font-size: 13px');
      return '<b style="text-transform: uppercase; font-size: 10px; color: #F44336;">*Küfür ve Reklam Yasak!*</b>';
    } else {
      return mesaj;
    }
  }

});


function GifGonder(gif) {
  $(".mesaj-yaz").val(gif);
}
