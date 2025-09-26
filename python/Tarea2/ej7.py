frutas = ["manzana","pera","naranja"]

fruta_usuario = input("Dime el nombre de una fruta: ").lower()

if fruta_usuario in frutas:
    print("Valido")
else:
    print("No valido")

