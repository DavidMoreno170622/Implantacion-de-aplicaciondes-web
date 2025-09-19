num1 = (input("Dime un numero entero: "))
num2 = (input("Dime otro numero entero: "))

if num1.isdigit() and num2.isdigit():

    num1 = int(num1)
    num2 = int(num2)
    if num2 == 0:

        print("Con 0 no se puede dividir")


    else:
        
        numC=num1/num2
        print("El resultado de la division es: ",numC)
else:

    print("Que sea entero")
