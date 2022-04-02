# Smart-Aggriculture-App.

Yapmış olduğum Smart Agriculture App. web uygulamasının aşamalar halinde PHP dosyalarının kısaca açıklaması..

Hem Html-Css kodlarını yazmak ve düzenlemek için hem php için Visual Code kullandım.
![Image](https://github.com/Melikachu/Smart-Aggriculture-App./blob/main/png/png.png)

Gerekli olup olmadığını bilmediğim **[config.php](https://github.com/Melikachu/Smart-Aggriculture-App./blob/main/config.php)** ve **[database.php](https://github.com/Melikachu/Smart-Aggriculture-App./blob/main/database.php)** fileları ile veritabanının bağlantısını oluşturdum. İçinde gerekli kütüphanelerin olduğunu düşündüğüm için internetten hazır şekilde projeme ekledim.

**[loginpage.php](https://github.com/Melikachu/Smart-Aggriculture-App./blob/main/loginpage.php)** ---> Kullanıcı giriş sayfası. Email ve password oluşturulup veritabanına kaydedilir.
**[login.php](https://github.com/Melikachu/Smart-Aggriculture-App./blob/main/login.php)** ---> Kayıtlı kullanıcı giriş sayfası.
**[connection.php](https://github.com/Melikachu/Smart-Aggriculture-App./blob/main/connection.php)** ---> İletişim kısmı için kullanıcıların mesajını ve bilgilerini veritabanına kaydeder.

**_Grafik Kısmı_**

**[humidity.php](https://github.com/Melikachu/Smart-Aggriculture-App./blob/main/humidity.php)** ---> Nem, Sıcaklı,Işık sensörlerimizin okuduğu verileri veritabanına kaydeder. Gerçek zamanlı olarak grafiklerde görüntülemek için Html ve Javascript ile oluşturduğumuz grafiklere echo komutu ile  verileri yazdırır. 
**[hum.php](https://github.com/Melikachu/Smart-Aggriculture-App./blob/main/hum.php)**, **[temp.php](https://github.com/Melikachu/Smart-Aggriculture-App./blob/main/temp.php)**, **[water.php](https://github.com/Melikachu/Smart-Aggriculture-App./blob/main/water.php)** ---> Gauge grafiği (gösterge grafiği) ile gerçek zamanlı tıpkı bir termometre gibi verileri gösterir. Anlık nem, sıcaklık ve su seviyesi değerleri web uygulamasında görterilir.

**_Kontrol Kısmı_**

**[status.php](https://github.com/Melikachu/Smart-Aggriculture-App./blob/main/status.php)** ---> Buradaki komutlar ile control panelinden manuel olarak girilen verileri veritabanına kaydeder. Kullanıcının seçtiği değerlere göre; Sıcaklık belirlenenin üstüne çıktığında fanı açar, altına indiğinde fanı kapatır ve uygulamada bulunan buton ile fanı açıp kapatabilir buna uygun olarak yazdığım kod veribanına 1 veya 0 değerleri gönderir.
Aynı şekilde ışık şiddeti kullanıcı tarafından belirlenebilir. Belirlenen ışık şiddetine göre; bitkinin ihtiyacına uygun olarak ledlerin sağladığı ışık ayarlanır ve uygulamada bulunan buton ile ledi aç veya kapat komutlarını uygulamamız yerine getirir.

Proje baştan sona donanım ve yazılım kısımlarında sistematik olarak çalışılmıştır. Donanımda kullanılan 'NodeMCU' ve wifi modulü ile sensörlerin doğrudan veritabanıyla bağlantı kurması sağlanmıştır. 

HTML ve CSS kodlarını [buradan](https://github.com/Melikachu/Smart-Aggriculture-App./tree/main/HTML) inceleyebilirsiniz.

![Image](https://github.com/Melikachu/Smart-Aggriculture-App./blob/main/png/png5.png)
![Image](https://github.com/Melikachu/Smart-Aggriculture-App./blob/main/png/png2.png)
![Image](https://github.com/Melikachu/Smart-Aggriculture-App./blob/main/png/png3.png)
![Image](https://github.com/Melikachu/Smart-Aggriculture-App./blob/main/png/png4.png)


