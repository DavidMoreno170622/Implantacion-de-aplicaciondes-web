

def valida_opcion():
    while True:
        print("====================")
        print("GAMIFICACIÓN EN EL AULA")
        print("====================")
        print("1 - Cargar datos del fichero")
        print("2 - Imprimir datos")
        print("3 - Jugar")
        print("4 - Guardar datos")
        print("5 - Cambiar contraseña")
        print("0 - SALIR")
        print("----------------------------")
        opcion = int(input("Dame la opción: "))
        
        #lista=[1,2,3,4,5,0]

        if opcion in range(0,6):
            return opcion

        else:
            print("Por favor, vuelve a intentarlo.")



print("La opción seleccionada es:",valida_opcion())