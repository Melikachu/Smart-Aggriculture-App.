# Smart-Aggriculture-App.

Yapmış olduğum Smart Agriculture App. web uygulamasının aşamalar halinde PHP dosyalarının kısaca açıklaması..

Hem Html-Css kodlarını yazmak ve düzenlemek için hem php için Visual Code kullandım.

Gerekli olup olmadığını bilmediğim **"config.php"** ve **"database.php"** fileları ile veritabanının bağlantısını oluşturdum. İçinde gerekli kütüphanelerin olduğunu düşündüğüm için internetten hazır şekilde projeme ekledim.

"loginpage.php" ---> Kullanıcı giriş sayfası. Email ve password oluşturulup veritabanına kaydedilir.
"login.php" ---> Kayıtlı kullanıcı giriş sayfası.
"connection.php" ---> İletişim kısmı için kullanıcıların mesajını ve bilgilerini veritabanına kaydeder.

Grafik Kısmı
"humidity.php" ---> Nem, Sıcaklı,Işık sensörlerimizin okuduğu verileri veritabanına kaydeder. Gerçek zamanlı olarak grafiklerde görüntülemek için Html ve Javascript ile oluşturduğumuz grafiklere echo komutu ile  verileri yazdırır. 
"hum.php", "temp.php", "water.php" ---> Gauge grafiği (gösterge grafiği) ile gerçek zamanlı tıpkı bir termometre gibi verileri gösterir. Anlık nem, sıcaklık ve su seviyesi değerleri web uygulamasında görterilir.

Kontrol Kısmı
"status.php" ---> Buradaki komutlar ile control panelinden manuel olarak girilen verileri veritabanına kaydeder. Kullanıcının seçtiği değerlere göre; Sıcaklık belirlenenin üstüne çıktığında fanı açar, altına indiğinde fanı kapatır ve uygulamada bulunan buton ile fanı açıp kapatabilir buna uygun olarak yazdığım kod veribanına 1 veya 0 değerleri gönderir.
Aynı şekilde ışık şiddeti kullanıcı tarafından belirlenebilir. Belirlenen ışık şiddetine göre; bitkinin ihtiyacına uygun olarak ledlerin sağladığı ışık ayarlanır ve uygulamada bulunan buton ile ledi aç veya kapat komutlarını uygulamamız yerine getirir.

Proje baştan sona donanım ve yazılım kısımlarında sistematik olarak çalışılmıştır. Donanımda kullanılan 'NodeMCU' ve wifi modulü ile sensörlerin doğrudan veritabanıyla bağlantı kurması sağlanmıştır. 
