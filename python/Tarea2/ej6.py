numero = int(input("Dime un numero primo entero: "))

if numero <= 0:
    print("Adios")
    exit() 
else:
    for i in range(0, numero + 1 ,2):
        print(i)


