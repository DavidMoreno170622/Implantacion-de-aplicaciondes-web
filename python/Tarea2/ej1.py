rc=0
while rc == 0:


    print("=============================")
    print("         MISCELANEA")
    print("=============================")

    print("1 - Saludo castellano/valenciano")
    print("2 - Estrellas")
    print("3 - Escalera de estrellas")
    print("0 - SALIR")
    print("---------------------------")

    opcion = int(input("Dame la opción: "))


    if opcion == 0:
        print("Adios") 
        rc=1
    elif opcion == 1:
        pregunta = input("Quieres saludo en Castellano o Valenciano (cs/va)?:").upper()
        if pregunta == "CS":
            print("Buenos dias")

        elif pregunta == "VA":
            print("Bon dia")
            

        else:
            print("Tienes que dar valor cs o va")

    elif opcion == 2:
        numero = int(input("Dime un numero: "))
        for i in range(numero):
            print("*", end="")
            

    elif opcion == 3:
        numero2 = int(input("Dime un numero: "))

        for i in range(numero2 + 1):
            print("*" * i)
            print()

    else:
        print("Elije entre el 0 y el 3")