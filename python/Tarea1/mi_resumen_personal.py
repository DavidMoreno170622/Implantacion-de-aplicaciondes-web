usuario = input("Dime tu nombre: ")

edad = int(input("Dime tu año de nacimiento: "))

comida = input("Dime tu comida favorita: ")

edad_final=2025-edad

print("*** Tu Resumen Personal ***")
print(f"Nombre: [{usuario}]")
print(f"Año de Nacimiento: [{edad}]")
print(f"Edad Aproximada: [{edad_final}] años")
print(f"Comida Favorita: [{comida}]")
print("***************************")