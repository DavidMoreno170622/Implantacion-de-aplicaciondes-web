secreto = 7

while secreto == 7: 

    numero = int(input("Adivina el numero secreto: "))
    if numero == 7:
        print("Felicidades!")
        secreto = 0
    else:
        print("Intentalo otra vez!")
