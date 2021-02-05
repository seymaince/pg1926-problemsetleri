#Problem Set 3    3.	Sayıların sırasını bozmadan 0 sayılarını listenin başına taşımanız gerekmektedir. 
sayi1 = int(input("1.Sayı Giriniz: "))
sayi2 = int(input("2.Sayı Giriniz: "))
sayi3 = int(input("3.Sayı Giriniz: "))
sayi4 = int(input("4.Sayı Giriniz: "))
sayi5 = int(input("5.Sayı Giriniz: "))
listem = [sayi1,sayi2,sayi3,sayi4,sayi5]
kacsıfır=listem.count(0)
if 0 in listem:
      a=0
      while a<kacsıfır:
        a+=1
        print('0',end=",")
        listem.remove(0)
      print(listem)
else:
  print(listem)