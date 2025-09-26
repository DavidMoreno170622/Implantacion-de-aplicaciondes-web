dia = input("Dime un dia de la semana: ").upper()

if dia == "SABADO" or dia == "DOMINGO":
    print("Fin de semana")
elif dia == "LUNES" or dia == "MARTES" or dia == "MIERCOLES" or dia == "JUEVES" or dia == "VIERNES":
    print("Entre semana")
else:
    print("Tiene que ser dia de la semana")