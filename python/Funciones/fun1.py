numero = int(input("Dame un número del 1 al 10: "))
def tabla(x):

    print("Tabla de multiplicar del Nº" ,numero)
    for i in range(11):
        ana = x * i
        print(i,"*",x,"=",ana)

tabla(numero)