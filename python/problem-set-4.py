#Problem Set 4
sayi1 = int(input("1.Sayı Giriniz: "))
sayi2 = int(input("2.Sayı Giriniz: "))
sayi3 = int(input("3.Sayı Giriniz: "))
sayi4 = int(input("4.Sayı Giriniz: "))
sayi5 = int(input("5.Sayı Giriniz: "))
sayi6 = int(input("6.Sayı Giriniz: "))
sayilar = [sayi1,sayi2,sayi3,sayi4,sayi5,sayi6]
enbuyuk=max(sayilar)
if enbuyuk % 2==1:
  print("Listenin En Büyük Tek Sayısı:",enbuyuk)
elif enbuyuk % 2==0:
  print("Listenin En Büyük Çift Sayısı:",enbuyuk)