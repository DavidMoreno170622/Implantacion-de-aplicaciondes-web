rc = 0 
lista_compra = []

while rc == 0:

    print("--- LISTA DE LA COMPRA ---")
    print("1. Añadir artículo")
    print("2. Ver lista")
    print("3. Eliminar artículo")
    print("4. Salir")
    print("--------------------------")

    opcion = int(input("Elige una opción: "))


    if opcion == 4:
        print("Adios") 
        rc=1
    elif opcion == 1:
        lista = input("Dime el nombre del articulo: ")
        lista_compra.append(lista)
        print("Artículo añadido!")

    elif opcion == 2:
        if not lista_compra:
            print("La lista esta vacia")
        else:
            for i, articulo in enumerate(lista_compra, start=1):
                print(f"{i}. {articulo}")
    elif opcion == 3:
        eliminar = input("Dime articulo a eliminar: ").lower()
        encontrado = False
        for i in lista_compra:
            if i == eliminar:
                lista_compra.remove(i)
                print(f"{i} eliminado.")
                encontrado = True
                break
            if not encontrado:
                print(f"El artículo '{eliminar}' no está en la lista.")


    else:
        print("Elije entre el 1-4")