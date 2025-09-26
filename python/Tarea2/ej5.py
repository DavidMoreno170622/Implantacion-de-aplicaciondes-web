numero = input("Introduce un número entero del 1 al 10: ")

if not numero.isdigit():
    print("Error: no has introducido un número entero.")
    exit()

numero = int(numero)

if numero < 1 or numero > 10:
    print("Error: el número debe estar entre 1 y 10.")
    exit()

print(f"Tabla de multiplicar del {numero}:")
for i in range(1, 11):
    print(f"{numero} x {i} = {numero * i}")