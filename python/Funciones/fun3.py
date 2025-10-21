def lista():
    jugadores = []
    while True:
        print("===============================")
        print("     JUGADORES ON-LINE")
        print("===============================")
        print("1 - Llega un jugador nuevo")
        print("2 - Se va un jugador")
        print("3 - FIN")
        print("----------------------------------")
        opcion = int(input("Dame la opción: "))

        if opcion == 1:
            user = input("¿Quien eres? ")
            print("Bienvenid@ jugador",user)
            jugadores.append(
            user
            )
            print("LISTA DE JUGADORES: "," - ".join(jugadores))

        if opcion == 2:
            if not jugadores:
                print("No hay mas que eliminar")
                break
            print("Adiós al jugador",jugadores.pop(0))

        if opcion == 3:

            print("LISTA DE JUGADORES: "," - ".join(jugadores))
            print("Hasta pronto")
            break
lista()