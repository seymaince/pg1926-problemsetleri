#Problem Set 5
class okul1():
    okuladi = "X İlkokulu"
    sınıflar = 1,2,3,4
    subeler = ["A","B"]
    ogrencisayisi=80
    ogretmenler = ["Şeyma","Seçil","Betül","Ali","Ahmet"]
    branslar = ["Türkçe","Matematik","Hayat Bilgisi"]
class okul2():
    okuladi = "Y Ortaokulu"
    sınıflar = 5,6,7,8
    subeler = ["A","B","C","D"]
    ogrencisayisi=250
    ogretmenler = ["Şeyma","Seçil","Betül","Münevver","Zeliha","Ayşe","Ahmet","Mehmet"]
    branslar = ["Bilişim","Matematik","Sosyal Bilgiler","Fen Bilgisi","Türkçe","Beden"]
class okul3():
    okuladi = "Z Lisesi"
    sınıflar = 9,10,11,12
    subeler = ["A","B","C","D","E","F"]
    ogrencisayisi=350
    ogretmenler = ["Şeyma","Seçil","Betül","Münevver","Zeliha","Ayşe","Said","Mustafa"]
    branslar = ["Fizik","Matematik","Tarih","Dil ve Anlatım","Edebiyat","Geometri","Kimya","Biyoloji"]
print("-"*30)
print("İlçemizdeki Okullar")
print(okul1.okuladi, okul2.okuladi, okul3.okuladi)
print("-"*30)
okul3.subeler.append("G") #Z Lisesine Yeni Şube Ekleme
print (okul3.subeler)
